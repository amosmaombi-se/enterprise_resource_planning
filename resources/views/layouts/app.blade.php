<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>ERP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{!! asset('backend/assets/images/favicon.ico') !!}">

        <!-- App css -->
        <link href="{!! asset('backend/assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/assets/css/jquery-ui.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('backend/assets/css/icons.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/assets/css/metisMenu.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/assets/css/app.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    </head>

    <body>
        @if(session('status'))
         <div class="alert alert-success">
            {{ session('status') }}
         </div>
        @endif
        <!-- leftbar-tab-menu -->
        @include('layouts.sidebar')

        <!-- Top Bar Start -->
        @include('layouts.topbar')
        <!-- Top Bar End -->

        <div class="page-wrapper">
            @yield('content')
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{!! asset('backend/assets/js/jquery.min.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/jquery-ui.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/bootstrap.bundle.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/metismenu.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/waves.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/feather.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/jquery.slimscroll.min.js ') !!}"></script>
        <script src="{!! asset('backend/plugins/apexcharts/apexcharts.min.js ') !!}"></script> 
        <script src="{!! asset('backend/assets/pages/jquery.crm_dashboard.init.js') !!}"></script> 
        
        <!-- App js -->
        <script src="{!! asset('backend/assets/js/app.js') !!}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

        <script>
            $(document).ready(function() {
                toastr.options.timeOut = 10000;
                @if (Session::has('error'))
                    toastr.error('{{ Session::get('error') }}');
                @elseif(Session::has('success'))
                    toastr.success('{{ Session::get('success') }}');
                @endif
            });
        </script>
        
    </body>

</html>