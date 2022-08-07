<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>ERP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Enterprise resource planning" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{!! asset('backend/assets/images/favicon.ico') !!}">

        <link href="{!! asset('plugins/fullcalendar/packages/core/main.css') !!}" rel="stylesheet" />
        <link href="{!! asset('plugins/fullcalendar/packages/daygrid/main.css') !!}" rel="stylesheet" />
        <link href="{!! asset('plugins/fullcalendar/packages/bootstrap/main.css') !!}" rel="stylesheet" />
        <link href="{!! asset('plugins/fullcalendar/packages/timegrid/main.css') !!}" rel="stylesheet" />
        <link href="{!! asset('plugins/fullcalendar/packages/list/main.css') !!}" rel="stylesheet" />
        
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

        <script src="{!! asset('backend/assets/js/jquery.min.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/jquery-ui.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/bootstrap.bundle.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/metismenu.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/waves.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/feather.min.js ') !!}"></script>
        <script src="{!! asset('backend/assets/js/jquery.slimscroll.min.js ') !!}"></script>
        <script src="{!! asset('backend/plugins/apexcharts/apexcharts.min.js ') !!}"></script> 
        <script src="{!! asset('backend/assets/pages/jquery.crm_dashboard.init.js') !!}"></script> 
        <script src="{!! asset('backend/assets/js/thousandth/thousands.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/app.js') !!}"></script>

        <script src="{!! asset('backend/plugins/moment/moment.js') !!} "></script>
        <script src="{!! asset('backend/plugins/fullcalendar/packages/core/main.js') !!}"></script>
        <script src="{!! asset('backend/plugins/fullcalendar/packages/daygrid/main.js') !!} "></script>
        <script src="{!! asset('backend/plugins/fullcalendar/packages/timegrid/main.js') !!}"></script>
        <script src="{!! asset('backend/plugins/fullcalendar/packages/interaction/main.js') !!}"></script>
        <script src="{!! asset('backend/plugins/fullcalendar/packages/list/main.js') !!}"></script>
        <script src="{!! asset('backend/assets/pages/jquery.calendar.js') !!}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script>
            $(document).ready(function() {
                toastr.options.timeOut = 5000;
                @if (Session::has('error'))
                    toastr.error('{{ Session::get('error') }}');
                @elseif(Session::has('success'))
                    toastr.success('{{ Session::get('success') }}');
                @endif
            });
        </script>
        
    </body>

</html>