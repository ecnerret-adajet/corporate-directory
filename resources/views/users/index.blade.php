@extends('layouts.app')
@section('content')

       <div class="row" style="padding-top: 20px ! important;">
           
        

        <div class="panel panel-primary">
  <div class="panel-heading">
  			   <h3 class="panel-title">Users Management
  			   	    <a href="{{ route('users.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Add User</a>
  			   	    <a href="{{ url('/roles')}}" class="btn btn-warning"><i class="fa fa-life-ring" aria-hidden="true"></i> Manage Roles</a>
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
			<th>Email</th>
			<th>Roles</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($data as $key => $user)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			@if(!empty($user->roles))
				@foreach($user->roles as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif
		</td>
		<td>
			
			<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
		</td>
	</tr>
	@endforeach
	</table>
	{!! $data->render() !!}


  </div>
</div>


</div>

@endsection
	