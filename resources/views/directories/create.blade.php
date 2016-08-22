@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Directory</div>
                <div class="panel-body">
                   
                        <img src="{{asset('/avatars/user-placeholder.png')}}" style="width:150px; height:150px;" class="meta__avatar img-responsive img-style" alt="placeholder">
                     {!! Form::model($directory = new \App\Directory,  ['class' => 'form-horizontal',  'url' => 'directories',  'files' => 'true', 'enctype'=>'multipart/form-data', 'id' => 'assetinventoryForm'])!!}
                    {!! csrf_field() !!}
                    
                    
                    
        
                    
                    
                    
                    
    @include('directories.form', ['submitButtonText' => 'Submit'])


                    
                    
                    

{!! Form::close() !!}
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
