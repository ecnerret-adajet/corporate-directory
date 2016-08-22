<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Directory;
use App\Company;
use App\Department;

class PagesController extends Controller
{
    
      public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function getsearch(Request $request)
    {
          $this->validate($request, [
            'q' => 'required'
        ]);
        
         $q = $request->get('q');
        
      $companies = Company::with('directories')->get();
      $departments = Department::lists('name','id');
        $directory = Directory::all();
        
        
         $directories = Directory::where('name', 'like', "%$q%")
            ->paginate(9)
             ->appends(['q' => $q]);
       

        return view('directories.index', compact('directories','q','companies','departments','directory'));
        
    }
}
