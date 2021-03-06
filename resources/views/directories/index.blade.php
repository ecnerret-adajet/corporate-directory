
@extends('layouts.app')
@section('content')
          
       <div class="row" style="padding-top: 20px ! important;">
           
        

        <div class="panel panel-primary">
  <div class="panel-heading">
  			   <h3 class="panel-title">All Directories 
           @permission('role-create')
                <a href="{{url('directories/create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Add New</a>
  			   	    <a href="{{url('exportPDF')}}" class="btn btn-warning"><i class="fa fa-plus"></i> Export to excel</a>
            @endpermission
  			   </h3>
  	
  </div>
  <div class="panel-body">



@forelse($directories->chunk(4) as $items)
  <div class="row">
  		    @foreach($items as $item)  
  <div class="col-md-3" style="padding:5px;">
  		<div class="panel @foreach($item->statuses as $status)
          {{  is_null($status->name) ? : 'panel-danger'  }}
        @endforeach panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">
    		@foreach($item->companies as $company)
    			{{$company->name}}
    		@endforeach

        <a class="btn-xs btn-primary btn pull-right" style="color: #fff" href="" data-toggle="modal" data-target=".directory-{{$item->id}}-modal">
         View
        </a>
    </h3>
  </div>
  <div class="panel-body">
    <img class="img-circle" src="{{ asset('avatar/'.$item->avatar) }}" style=" display: block; margin: 10px auto; height:50px; width:auto; ">

  <table class="table table-hover text-center">
  <tbody>
    <tr>
      <td colspan="2" style="font-size: 12px;">{{$item->name}}</td>
    </tr>
      <tr>
      <td colspan="2" style="font-size: 12px;">{{str_limit($item->position,25)}}</td>
    </tr>
   <tr>
      <td colspan="2" style="font-size: 12px;">
        <a class="btn btn-info btn-block btn-sm round" href="mailto:{{str_replace(' ', '', $item->email)}}">
        <i class="fa fa-envelope-o"></i> Email
        </a>
      </td>
    </tr>
  </tbody>
</table> 

  </div>
</div>
  </div>
         {!! Form::open(['id' => 'frmDelete-' . $item->id, 'style' => 'display:none', 'method' => 'DELETE', 'action' =>                                    ['DirectoriesController@destroy', $item->id]  ]) !!}
          {{ Form::submit('Submit') }}
          {!! Form::close() !!}


		  @endforeach
@empty

<h2 class="text-center">
   No Employee Found :(
</h2>


  </div><!-- end row -->
@endforelse


{{ $directories->links() }}

  </div>
</div>


</div>



@foreach($directories as $item)
<!-- modal directory modal -->
<div class="modal fade directory-{{$item->id}}-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Directory details </h4>
      </div>
      <div class="modal-body">
           
          <img src="{{ asset('avatar/'.$item->avatar) }}" style="width:150px; height:150px;" class="meta__avatar img-responsive img-style" alt="placeholder">


            <center>

            <a  class="btn btn-primary btn-sm round" href="mailto:{{$item->email}}"><i class="fa fa-envelope-o" aria-hidden="true" ></i> Mail</a>

              </center>


              <span class="category" style="padding-top: 10px; font-size: 20px;">{{ $item->name }}</span>
               <span class="category category--position">{{ $item->position }}</span>


            <div class="panel panel-default panel-box">
  <div class="panel-body">

    @role('Administrator')
          <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
                  <i class="fa fa-map-marker  fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box">
                {{$item->address }}
              </div>
          </div>
    @endrole

            <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
                  <i class="fa fa-suitcase  fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box">
                 @foreach($item->companies as $company)
                            {{$company->name}}
                          @endforeach
              </div>
          </div>

            <div class="row">
              <div class="col-md-4 col-xs-4 text-right">

                  <i class="fa fa-briefcase fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box-end">
                 @foreach($item->departments as $department)
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
                {{$item->phone }}
              </div>
          </div>

          <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
                  <i class="fa fa-volume-control-phone fa-icon" aria-hidden="true"></i>
              </div>

              <div class="col-md-8 col-xs-8 text-left box">
              <span class="{{ ($item->local == null ? 'no-data' : '')}}">

                {{ ($item->local == null ? 'No local' : $item->local) }}
              </span>
              </div>
          </div>

           <div class="row">
              <div class="col-md-4 col-xs-4 text-right">
                  <i class="fa fa-info-circle fa-icon" aria-hidden="true"></i>
              </div>
              <div class="col-md-8 col-xs-8 text-left box-end">
              <span class="check_status"> 

                  @foreach($item->statuses as $status)
                     
                      @if (isset($status->name))
                          {{ $status->name }}  
                      @else
                      No Status
                      @endif  

                   @endforeach 
           
                
              </span>
              </div>
          </div>

           
  </div>
</div>
 
        

      </div>
      <div class="modal-footer">



        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

         @permission('role-create')
          <a type="button" class="btn btn-primary round pull-left btn-sm" style="margin-right: 10px;" href="{{url ('directories/' .$item->id. '/edit') }}">
            <i class="fa fa-sliders" aria-hidden="true" style="color: #fff;"></i> Modify
          </a> 


            <span data-form="#frmDelete-{{$item->id}}" data-title="Delete a Contact" data-message="Are you sure you want to delete <strong style='color:#e74c3c'>{{$item->name }}</strong> ?" >
                
            <a type="button" class ="formConfirm btn btn-danger btn-sm round pull-left" href="">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
            </a>
            @endpermission

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







@endforeach






@endsection







