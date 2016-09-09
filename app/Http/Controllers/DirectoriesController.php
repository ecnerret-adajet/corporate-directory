<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DirectoryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Directory;
use App\User;
use App\Company;
use App\Department;
use Flash;
use Gate;
use Image;

class DirectoriesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories = Directory::orderBy('name','asc')
                    ->paginate(12);
        $directory = Directory::all();
        $companies = Company::all();
        $departments = Department::lists('name','id');
    
        return view('directories.index', compact('directories','companies','departments','directory'))
        ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directories = Directory::all();
        $companies = Company::all();
        $departments = Department::lists('name','id');
        
        return view('directories.create', compact('companies','departments','directories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DirectoryRequest $request)
    {
        $directory = Auth::user()->directories()->create($request->all());
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/avatars/' . $filename ) ); 
            $directory->avatar = $filename;
            $directory->save();
        }

        $directory->companies()->attach($request->input('company_list'));
        $directory->departments()->attach($request->input('department_list'));
        
        
        flashy()->success('You have added an assignee succesfully.');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Directory $directory)
    {
        return view('directories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory $directory)
    {
        $companies = Company::lists('name', 'id');
        $departments = Department::lists('name','id');
        
        
        return view('directories.edit', compact(
            'companies','departments','directory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DirectoryRequest $request, Directory $directory)
    {
         $directory->update($request->all());
        $directory->companies()->sync((!$request->input('company_list') ? [] : $request->input('company_list')));
        $directory->departments()->sync((!$request->input('department_list') ? [] : $request->input('department_list')));

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/avatars/' . $filename ) ); 
            $directory->avatar = $filename;
            $directory->save();
        }
        
        
        flashy()->success('You have added an assignee succesfully.');

        return redirect('directories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $directory)
    {
         $directory->delete();
        return redirect('directories');
    }
}
