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

class StatusesController extends Controller
{
   public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Status $status)
  {
  	$directories = $status->directories()->paginate(12);
  	$departments = Department::all();
  	$companies = Company::all();
  	$statuses = Status::with('directories')->get();

  	return view('directories.status', compact('directories','departments','directory','companies','statuses'));

  }


}
