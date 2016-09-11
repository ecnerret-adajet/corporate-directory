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
use App\Status;
use Flash;
use Gate;
use Image;

class CompaniesController extends Controller
{
    
   public function __construct()
  {
    $this->middleware('auth');
  }
       
    
    public function index(Company $company)
    {

        $directories = $company->directories()->paginate(12);
        $departments = Department::lists('name','id');
        $statuses = Status::all();
        $companies = Company::with('directories')->get();
     
        
        
        return view('directories.company', compact('directories','departments','directory','companies','statuses'));
    }
     
    
 
}
