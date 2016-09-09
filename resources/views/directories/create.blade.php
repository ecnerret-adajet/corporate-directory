@extends('layouts.app')

@section('content')

 <div class="row" style="padding-top: 20px ! important;">
           
        

        <div class="panel panel-primary">
  <div class="panel-heading">
               <h3 class="panel-title">Add new directory
               </h3>
    
  </div>
  <div class="panel-body">
                  
                    
                    
                    
             <img src="{{asset('/avatar/user-placeholder.png')}}" style="width:150px; height:150px;" class="meta__avatar img-responsive img-style" alt="placeholder">
                     {!! Form::model($directory = new \App\Directory,  ['class' => 'form-horizontal',  'url' => 'directories',  'files' => 'true', 'enctype'=>'multipart/form-data', 'id' => 'assetinventoryForm'])!!}
                    {!! csrf_field() !!} 
                    
                    
                    
                    
    @include('directories.form', ['submitButtonText' => 'Submit'])


                    
                    
                    

{!! Form::close() !!}
                    
                    
      </div>
</div>


</div>
@endsection
