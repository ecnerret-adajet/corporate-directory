    
        


             <div class="form-group">
                            <label class="col-md-4 control-label">  
                            </label>

                            <div class="col-md-6">                                
                                <input type="file" name="avatar">
                            </div>
    </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">  
                        {!! Form::label('name', 'Full Name:')  !!}
                            </label>

                            <div class="col-md-6">                                
                        {!! Form::text('name', null, ['class' => 'form-control']) !!} 

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label"> 
                                {!! Form::label('address', 'Address:')  !!}
                            </label>

                            <div class="col-md-6">
                                 {!! Form::text('address',  null, ['class' => 'form-control']) !!} 
                                
                            
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label"> 
                                {!! Form::label('position', 'Position:')  !!}
                            </label>

                            <div class="col-md-6">
                                 {!! Form::text('position',  null, ['class' => 'form-control']) !!} 
                                
                             
                            </div>
                        </div>
            
            
               
                        <div class="form-group{{ $errors->has('company_list') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> 
                            {!! Form::label('company_list', 'Company:')  !!} 
                            </label>

                            <div class="col-md-6 selectContainer">
                 
                      {!! Form::select('company_list[]', $companiesx, null, ['class' => 'form-control', 'placeholder' => '-- Select a Company --']) !!}
                    
                               @if ($errors->has('company_list'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_list') }}</strong>
                                    </span>
                                @endif
                                
                           
                            </div>
                        </div>




                          <div class="form-group{{ $errors->has('department_list[]') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> 
                           Department:
                            </label>

                            <div class="col-md-6">
                    {!! Form::select('department_list[]', $departmentsx, null, ['class' => 'form-control']) !!}


                               @if ($errors->has('department_list[]'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department_list[]') }}</strong>
                                    </span>
                                @endif
                           
                                
                            </div>
                        </div>




        <div class="form-group">
                            <label class="col-md-4 control-label">  
                        {!! Form::label('phone', 'Phone:')  !!}
                            </label>

                            <div class="col-md-6">                                
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!} 

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>




        <div class="form-group">
                            <label class="col-md-4 control-label">  
                        {!! Form::label('local', 'Local:')  !!}
                            </label>

                            <div class="col-md-6">                                
                        {!! Form::text('local', null, ['class' => 'form-control']) !!} 

                           
                            </div>
    </div>



        <div class="form-group">
                            <label class="col-md-4 control-label">  
                        {!! Form::label('email', 'Email:')  !!}
                            </label>

                            <div class="col-md-6">                                
                        {!! Form::text('email', null, ['class' => 'form-control']) !!} 

                               
                            </div>
    </div>

                     <div class="form-group">
                            <label class="col-md-4 control-label"> 
                            {!! Form::label('statuses_list', 'Status:')  !!} 
                            </label>

                            <div class="col-md-6 selectContainer">
                  
                         {!! Form::select('statuses_list[]', $statusesx, null, ['class' => 'form-control', 'placeholder' => '-- Select Status --']) !!}

                  
                                
                           
                            </div>
                        </div>


                        
             <hr/>

           <div class="form-group">
                            <div class="col-md-12">

                  <a type="button" class ="btn btn-default" href="{{ URL::previous() }}">
                  CANCEL
                </a>

                 {!! Form::submit($submitButtonText, ['class' => 'btn btn-success pull-right'])  !!} 
                            </div>
                        </div>         







