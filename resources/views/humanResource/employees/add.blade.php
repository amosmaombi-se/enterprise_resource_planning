@extends('layouts.app')
@section('content')  

<div class="page-wrapper">
    <div class="page-content-tab">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                        <li class="breadcrumb-item active">Add Membe</li>
                    </ol>
                </div>
                <h4 class="page-title">Add User</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card dr-pro-pic">
                <div class="card-body">
                    <button type="button" class="btn btn-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">
                        <i class="mdi mdi-plus-circle-outline mr-2"></i>Upload excel file</button>

                    <div class="">
                        <form action="{{ route('create-user') }}"  class="form-horizontal form-material mb-0" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input type="text" placeholder="First Name" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" 
                                    class="@error('first_name') is-invalid @enderror" required>
                                       @error('first_name')
                                           <span class="text text-danger">{{ $message }}</span>
                                       @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Middle Name" class="form-control" name="middle_name" value="{{ old('middle_name') }}" id="middle_name">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="{{ old('last_name') }}"  class="@error('last_name') is-invalid @enderror" required>
                                     @error('last_name')
                                      <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input type="text" placeholder="Email" class="form-control" name="email" id="email" value="{{ old('email') }}"  class="@error('email') is-invalid @enderror"  required>
                                    @error('email')
                                      <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Phone number" class="form-control" name="phone" id="phone" value="{{ old('phone') }}"  class="@error('phone') is-invalid @enderror"  required>
                                    @error('phone')
                                     <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Address" class="form-control" name="address" id="address" value="{{ old('address') }}"   
                                    class="@error('address') is-invalid @enderror" required>
                                    @error('address')
                                    <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Date of birth</label>
                                    <input type="date"  class="form-control" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" required
                                      class="@error('date_of_birth') is-invalid @enderror">
                                    @error('date_of_birth')
                                      <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="">National ID</label>
                                    <input type="text" placeholder="National ID number" class="form-control" name="nin" id="nin" value="{{ old('nin') }}" 
                                    class="@error('nin') is-invalid @enderror">
                                    @error('nin')
                                       <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="">Gender</label>
                                    <select class="form-control" name="gender" value="{{ old('gender') }}" required>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>                                                
                               
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input type="text" placeholder="Bank name" class="form-control" name="bank_name" id="bank_name" value="{{ old('bank_name') }}" required 
                                      class="@error('bank_name') is-invalid @enderror">
                                    @error('bank_name')
                                      <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Account number" class="form-control" name="bank_account_number" id="bank_account_number" value="{{ old('bank_account_number') }}" required
                                    class="@error('bank_account_number') is-invalid @enderror">
                                    @error('bank_account_number')
                                      <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>   
                              
                                <div class="col-md-4">
                                    <input type="text" placeholder="Salary" class="form-control transaction_amount" name="salary" id="salary" value="{{ old('salary') }}" required class="@error('salary') is-invalid @enderror">
                                    @error('salary')
                                    <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                                              
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Joining Date</label>
                                    <input type="date" placeholder="Joining Date" class="form-control" name="join_date" id="join_date" value="{{ old('join_date') }}" required class="@error('join_date') is-invalid @enderror">
                                    @error('join_date')
                                      <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="">Roles</label>
                                    <select class="form-control" name="role_id">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>   
                            </div>

                            <div class="form-group">
                                <textarea rows="2" placeholder="description..." name="description" class="form-control"></textarea>
                                <button type="submit" class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0 ml-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>                                            
            </div>
        </div> <!--end col-->                                          
    </div>
</div>
</div>
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add new users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('upload-users') }}"  class="form-horizontal form-material mb-0" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="MemberName">Upload file</label>
                                <input type="file" class="form-control" id="MemberNames" name="MemberNames" required="">
                            </div>
                        </div>
                                                                                          
                    </div>
                 
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>  
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>             
                </form>  
            </div>
        </div>
    </div>
</div>



@endsection
