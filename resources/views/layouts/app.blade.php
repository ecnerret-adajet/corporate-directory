<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Corporate Directory</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    


    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style1.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />


     <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

      <!-- MetisMenu CSS -->
    <link href="{{asset('plugin/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

        <script src="{{asset ('js/modernizr.custom.js') }}"></script>

</head>
<body id="app-layout">




    <div id="wrapper">

        <!-- Navigation -->
        @if(Auth::check())
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> Corporate Directory</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">           
                <!-- /.dropdown -->
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" style="position: relative; padding-left: 50px;">
                          
                  <img src="{{asset('/avatar/placeholder.png')}}" class="img-circle img-responsive " style="width: 35px; height:auto; position: absolute; top: 10px; left: 10px;" alt="User Image" />
                  <span>{{ Auth::user()->name }}</span>
                       
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">


                        <li class="sidebar-search">
                         {{ Form::open(array('url' => '/search', 'method' => 'get')) }}
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search..." value="" name="q">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" value="">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            {!! Form::close() !!} 
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{url('directories')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-database" aria-hidden="true"></i> Companies<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            @for($i=0; $i <= 16; $i++)
                                <li>
                                @foreach($companies->slice($i,1) as $company)
                                    <a href="{{url('company/'.$company->name)}}"><i class="fa fa-tags" aria-hidden="true"></i>
                                     {{$company->name}} 
                                      <span class="badge pull-right">{{ $company->directories->count() }}  </span>
                                    </a>
                                  @endforeach
                                </li>
                            @endfor
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                  
                       
                        <li>
                            <a href="#"><i class="fa fa-database" aria-hidden="true"></i>  User Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="{{url('/users')}}"><i class="fa fa-tags" aria-hidden="true"></i> All Users</a>
                                </li>
                                <li>
                                    <a href="{{url('/roles')}}""><i class="fa fa-tags" aria-hidden="true"></i> All Roles</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                
                
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        @endif
        <div id="page-wrapper">
      


                        @yield('content')



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    
    


    
    

    
















    
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"/></script>

   <script src="{{asset('js/sb-admin-2.js')}}"/></script>

   <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('plugin/metisMenu/metisMenu.min.js')}}"></script>

     <!-- JavaScripts   -->
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('js/laravel-bootstrap-modal-form.js') }}"></script>
    <script src="{{ asset('js/classie.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/uisearch.js')}}"></script>
    <script>
            new UISearch( document.getElementById( 'sb-search' ) );
        </script>

        <script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
    <script>
        $('.grid').masonry({
  // options...
  itemSelector: '.grid-item',
        });
    </script>


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
    
    <script type="text/javascript">
  $('.formConfirm').on('click', function(e) {
        e.preventDefault();
        var el = $(this).parent();
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        $('#formConfirm')
        .find('#frm_body').html(msg)
        .end().find('#frm_title').html(title)
        .end().modal('show');
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
  });
  $('#formConfirm').on('click', '#frm_submit', function(e) {
        var id = $(this).attr('data-form');
        $(id).submit();
  });
</script>
    
</body>
</html>
