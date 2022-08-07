@extends('layouts.app')
@section('content')  

<div class="page-wrapper">
    <div class="page-content-tab">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Hospital</a></li>
                                <li class="breadcrumb-item active">Insurance Co.</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Leave settings.</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
       

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" 
                            data-target=".bs-example-modal-lg"><i class="mdi mdi-plus-circle-outline mr-2"></i>Create leave type</button>
                            <div class="table-responsive">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Leave type</th>  
                                        <th>Period (Days)</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(isset($leave_types))
                                    @foreach($leave_types as $key => $leave_type)
                                    <tr>
                                        <td>{{ $key+1 }}</td>                                                
                                        <td>{{ $leave_type->name }}</td>                                                
                                        <td>{{ $leave_type->period ?? '' }}</td>
                                        <td class="text-right">                                                       
                                            <a href="{{ route('edit-leave-setting')}}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>                    
                            </div>                                         
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col-->                               
            </div><!--end row-->

        </div><!-- container -->

        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Leave type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('create-leave-setting') }}" method="POST">
                            @csrf

                            <div class="row">                                                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="LeaveName">Leave Name</label>
                                        <input type="text" class="form-control" id="leaveName"  name="leaveName" required="" 
                                        class="@error('leaveName') is-invalid @enderror">
                                        @error('leaveName')
                                        <span class="text text-danger">{{ $message }}</span>
                                      @enderror                              
                                    </div>
                                </div>      
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ContactNo">Period</label>
                                        <input type="text"  placeholder="In number of days (Option)" class="form-control"  name="period" id="period">
                                    </div>
                                </div>  
                                
                            </div> 
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>  
                        </form>  
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> 

      

    
    </div>
    <!-- end page content -->
</div>
@endsection
