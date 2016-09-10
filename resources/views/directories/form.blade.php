    
        


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
            
            
               
                        <div class="form-group">
                            <label class="col-md-4 control-label"> 
                            {!! Form::label('company_list', 'Company:')  !!} 
                            </label>

                            <div class="col-md-6 selectContainer">
                    {!! Form::select('company_list[]', $companies, null, ['class' => 'form-control', 'placeholder' => '-- Select a department --']) !!}
                                
                                
                           
                            </div>
                        </div>




   <div class="form-group">
                            <label class="col-md-4 control-label"> 
                            {!! Form::label('department_list', 'Department:')  !!} 
                            </label>

                            <div class="col-md-6">
                    {!! Form::select('department_list[]', $departments, null, ['class' => 'form-control', 'placeholder' => '-- Select Company --']) !!}
                            
                           
                                
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
                    {!! Form::select('statuses_list[]', $statuses, null, ['class' => 'form-control', 'placeholder' => '-- Select Status --']) !!}
                                
                                
                           
                            </div>
                        </div>


                        
             <hr/>

           <div class="form-group">
                            <div class="col-md-12">

                  <a type="button" class ="btn btn-default" href="{{ URL::previous() }}">
                  CANCEL
                </a>

                 {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary pull-right'])  !!} 
                            </div>
                        </div>         







