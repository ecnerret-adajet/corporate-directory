@extends('layouts.app')

@section('content')


  <div class="row" style="padding-top: 20px ! important;">
           
        

        <div class="panel panel-primary">
  <div class="panel-heading">
               <h3 class="panel-title">Edit Directory
                 
               </h3>
    
  </div>
  <div class="panel-body">

                <img src="{{asset('/avatar/'.$directory->avatar)}}" style="width:150px; height:150px;" class="meta__avatar img-responsive img-style" alt="placeholder">

                     {!! Form::model($directory, ['method' => 'PATCH', 'action' => ['DirectoriesController@update', $directory->id], 'class' => 'form-horizontal',  'files' => true, 'name' => 'autoSumForm' ]) !!} 
                    
                    
                    
    @include('directories.form', ['submitButtonText' => 'Update'])


                    
                    
                    

{!! Form::close() !!}
                    
                    
</div>
</div>


</div>

@endsection
