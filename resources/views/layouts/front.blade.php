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



<div class="row">

 @yield('content')

</div>
    
    


    
    

    
















    
    
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

        <script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
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
