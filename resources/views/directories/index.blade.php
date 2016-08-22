
@extends('layouts.app')

@section('content')
          
  <div class="row">
      <button id="menu-toggle" class="menu-toggle"><span>Menu</span></button>
      <div id="theSidebar" class="sidebar">
        <button class="close-button fa fa-fw fa-close"></button>

          <div class="row">
          <div id="sb-search" class="sb-search">
          {{ Form::open(array('url' => '/search', 'method' => 'get')) }}
            <form>
              <input class="sb-search-input" placeholder="Search employees.." type="text" value="" name="q" id="search">
              <input class="sb-search-submit" type="submit" value="">
              <span class="sb-icon-search"></span>
            </form>
          {!! Form::close() !!} 
          </div>
        </div>



      <ul class="list-group text-right">

      <a href="{{url('/directories')}}">
    <li class="list-group-item sub">
    All Employees
    <i class="fa fa-user-plus fa-menus" aria-hidden="true"></i> 
  </li>

      </a>

 <a href="{{url('/directories/create')}}">
  <li class="list-group-item sub">
    Add employee 
    <i class="fa fa-user-plus fa-menus" aria-hidden="true"></i> 
  </li>
  </a>

 <a href="{{url('/logout')}}">
    <li class="list-group-item sub">
    Logout  <i class="fa fa-sign-out fa-menus" aria-hidden="true"></i>
  </li>
  </a>


  </ul>


  <hr/>

  <div class="row" style="padding:0; margin: 0;">
      <div class="col-md-6" style="padding:0; margin: 0;">

      @foreach($companies->slice(0,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}  
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
                  {{ $company->directories->count() }}  
      </span>
  </li>
  </a>
   @endforeach  



      @foreach($companies->slice(1,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}} 
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
             {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>


          @foreach($companies->slice(2,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
             {{ $company->directories->count() }}   
       
      </span>
  @endforeach 
  </li>
  </a>


     @foreach($companies->slice(3,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>


     @foreach($companies->slice(4,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>



     @foreach($companies->slice(5,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>




       @foreach($companies->slice(6,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>

            @foreach($companies->slice(7,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>
      </div>


      <div class="col-md-6" style="padding:0; margin: 0;">





     @foreach($companies->slice(8,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>



     @foreach($companies->slice(9,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>



     @foreach($companies->slice(10,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>

     @foreach($companies->slice(11,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>



      @foreach($companies->slice(12,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>



     @foreach($companies->slice(13,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>


     @foreach($companies->slice(14,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>



     @foreach($companies->slice(15,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>


     @foreach($companies->slice(16,1) as $company)
 <a href="{{url('company/'.$company->name)}}">
    <li class="list-group-item sub">
     
         {{$company->name}}
         <span style="margin-left: 10px;" class="label label-pill  label-info">
       
          {{ $company->directories->count() }}  
       
      </span>
  @endforeach 
  </li>
  </a>

  
      </div>

  </div>

  

     

      
       
      </div>



      <div id="theGrid" class="main">
        <section class="grid">
          <header class="top-bar">
            <h2 class="top-bar__headline">CORPORATE DIRECTORY</h2>
            <div class="filter">
                Welcome, {{ Auth::user()->name }} !
            </div>
          </header>


@forelse($directories as $directory)
          <a class="grid__item" href="#">
            <h4 class="title title--preview">{{ $directory->name }}</h4>
            <div class="loader"></div>
            <span class="category">{{$directory->position}}</span>
            <div class="meta meta--preview">
              <img class="meta__avatar" src="avatars/{{$directory->avatar}}" alt="author01" /> 
              <span class="meta__date"><i class="fa fa-calendar-o"></i> Date Added</span>
              <span class="meta__reading-time"><i class="fa fa-trash"></i> Delete </span>
            </div>
          </a>
@empty
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
    <h2 style="color: #95a5a6;">No found results !</h2>
</div>
</div>
</div>
@endforelse



          <footer class="page-meta">
              <div class="pagination pagination-sm"> {{ $directories->links() }} </div>
          </footer>
        </section>





        <section class="content">
          <div class="scroll-wrap">

@foreach($directories as $directory)

            <article class="content__item">

             <img src="avatars/{{$directory->avatar}}" style="width:150px; height:150px;" class="meta__avatar img-responsive img-style" alt="placeholder">
           
            <center>

            <a  class="btn btn-primary btn-sm round" href="mailto:{{$directory->email}}"><i class="fa fa-envelope-o" aria-hidden="true" ></i> Mail</a>

              </center>


            
              <span class="category category--full">{{ $directory->name }}</span>
               <span class="category category--position">{{ $directory->position }}</span>


  <div class="panel panel-default panel-box">
  <div class="panel-body">
          <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
                  <i class="fa fa-map-marker  fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box">
                {{$directory->address }}
              </div>
          </div>

            <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
                  <i class="fa fa-suitcase  fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box">
                 @foreach($directory->companies as $company)
                            {{$company->name}}
                          @endforeach
              </div>
          </div>

            <div class="row">
              <div class="col-md-4 col-xs-4 text-right">

                  <i class="fa fa-briefcase fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box-end">
                 @foreach($directory->departments as $department)
                            {{$department->name}}
                          @endforeach
              </div>
          </div>


  </div>
</div>
 


          <div class="panel panel-default panel-box">
  <div class="panel-body">
          <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
              <i class="fa fa-phone  fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box">
                {{$directory->phone }}
              </div>
          </div>

          <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
                  <i class="fa fa-volume-control-phone fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box-end">
              <span class="{{ ($directory->local == null ? 'no-data' : '')}}">

                {{ ($directory->local == null ? 'No local' : $directory->local) }}
              </span>
              </div>
          </div>

           
  </div>
</div>
 
        
               <div class="row">
           
            <div class="col-md-6 col-xs-6 text-right">
           
             <a type="button" class="btn btn-primary btn-sm round" style="margin-right: 20px;" href="{{url ('directories/' .$directory->id. '/edit') }}">
            <i class="fa fa-sliders" aria-hidden="true" style="color: #fff;"></i> Modify
               </a> 
            </div>



            <div class="col-md-6 col-xs-6 text-left">

            <span data-form="#frmDelete-{{$directory->id}}" data-title="Delete a Contact" data-message="Are you sure you want to delete <strong style='color:#e74c3c'>{{$directory->name }}</strong> ?" >
                
                <a type="button" class ="formConfirm btn btn-default btn-sm round" href="" style="color: #fff;">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                </a>
            
                    </span>


         


            </div>

            
              </div>
              
            
           
            </article>


 {!! Form::open(['id' => 'frmDelete-' . $directory->id, 'style' => 'display:none', 'method' => 'DELETE', 'action' =>                                    ['DirectoriesController@destroy', $directory->id]  ]) !!}
          {{ Form::submit('Submit') }}
          {!! Form::close() !!}


@endforeach


           
          </div>
          <button class="close-button"><i class="fa fa-close"></i><span>Close</span></button>
        </section>
      </div>
    </div><!-- /container -->




<!-- modal delete confirm -->

<div class="modal fade" id="formConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="frm_title">Delete</h4>
      </div>
      <div class="modal-body" id="frm_body"></div>
      <div class="modal-footer">
        <button style='margin-left:10px;' type="button" class="btn btn-primary col-sm-2 pull-right" id="frm_submit">Confirm</button>
        <button type="button" class="btn btn-default col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">Cancel</button>
      </div>
    </div>
  </div>
</div>



@endsection







