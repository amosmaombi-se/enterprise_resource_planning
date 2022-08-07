<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>ERP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Enterprise resource planning" name="description" />
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

    </head>

    <body class="account-body accountbg">
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-cardf shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    
                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-3 mt-5">Welcome to ERP</h4>
                                        <p class="text-muted mb-0">Sign in</p>  
                                    </div> 
    
                                    <form class="form-horizontal my-4" action="{{ route('user-login') }}" method="POST">
                                           @csrf
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"  required 
                                                class="@error('email') is-invalid @enderror">
                                            </div>  
                                            @error('email')
                                              <span class="text text-danger">{{ $message }}</span>
                                            @enderror                                  
                                        </div>
            
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>                                            
                                            <div class="input-group mb-3"> 
                                                <input type="password" class="form-control" name="password" placeholder="Enter password" required 
                                                class="@error('password') is-invalid @enderror">
                                            </div> 
                                            @error('password')
                                              <span class="text text-danger">{{ $message }}</span>
                                            @enderror                              
                                        </div>
            
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-switch switch-success">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                    <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div><!--end col--> 
                                            <div class="col-sm-6 text-right">
                                                <a href="{{ route('forget-password')}}" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                            </div>
                                        </div>
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-primary btn-round btn-md text-center" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                               
                            </div>
                        </div><!--end card-->
                       
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="{!! asset('backend/assets/js/jquery.min.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/jquery-ui.min.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/bootstrap.bundle.min.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/metismenu.min.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/waves.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/feather.min.js') !!}"></script>
        <script src="{!! asset('backend/assets/js/jquery.slimscroll.min.js') !!}"></script>        

        <!-- App js -->
        <script src="{!! asset('backend/assets/js/app.js') !!}"></script>
        
    </body>

</html>