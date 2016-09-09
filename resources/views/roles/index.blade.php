@extends('layouts.app')
 
@section('content')


  <div class="row" style="padding-top: 20px ! important;">
           
        

        <div class="panel panel-primary">
  <div class="panel-heading">
  			   <h3 class="panel-title">Role Management
  			   @permission('role-create')
  			   	    <a href="{{ route('roles.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Create Role</a>
  			   	@endpermission    
  			   </h3>
  	
  </div>
  <div class="panel-body">


	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Description</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($roles as $key => $role)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $role->display_name }}</td>
		<td>{{ $role->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
			@permission('role-edit')
			<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
			@endpermission
	

	
		</td>
	</tr>
	@endforeach
	</table>
	{!! $roles->render() !!}


  </div>
</div>


</div>
@endsection