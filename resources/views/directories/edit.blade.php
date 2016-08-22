@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Directory</div>
                <div class="panel-body">

                <img src="{{asset('/avatars/'.$directory->avatar)}}" style="width:150px; height:150px;" class="meta__avatar img-responsive img-style" alt="placeholder">

                     {!! Form::model($directory, ['method' => 'PATCH', 'action' => ['DirectoriesController@update', $directory->id], 'class' => 'form-horizontal',  'files' => true, 'name' => 'autoSumForm' ]) !!} 
                    
                    
                    
    @include('directories.form', ['submitButtonText' => 'Update'])


                    
                    
                    

{!! Form::close() !!}
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
