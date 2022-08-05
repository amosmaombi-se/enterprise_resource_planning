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
                        <li class="breadcrumb-item active">Edit Member</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit User</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card dr-pro-pic">
                <div class="card-body">
                 

                    <div class="">
                        <form action="{{ route('update-user') }}"  class="form-horizontal form-material mb-0" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input type="text" placeholder="First Name" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name }}" 
                                    class="@error('first_name') is-invalid @enderror">
                                       @error('first_name')
                                           <span class="text text-danger">{{ $message }}</span>
                                       @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Middle Name" class="form-control" name="middle_name" value="{{ $user->middle_name }}" id="middle_name">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="{{ $user->last_name }}"  class="@error('last_name') is-invalid @enderror" required>
                                     @error('last_name')
                                      <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <input type="text" placeholder="Email" class="form-control" name="email" id="email" value="{{ $user->email }}"  class="@error('email') is-invalid @enderror"  required>
                                    @error('email')
                                      <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Phone number" class="form-control" name="phone" id="phone" value="{{ $user->phone }}"  class="@error('phone') is-invalid @enderror"  required>
                                    @error('phone')
                                     <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Address" class="form-control" name="address" id="address" value="{{ $user->address }}"   
                                    class="@error('address') is-invalid @enderror" required>
                                    @error('address')
                                    <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Date of birth</label>
                                    <input type="date"  class="form-control" name="date_of_birth" id="date_of_birth" value="{{ $user->date_of_birth }}" required
                                      class="@error('date_of_birth') is-invalid @enderror">
                                    @error('date_of_birth')
                                      <span class="text text-danger">{{ $message }}</span>
                                   @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="">National ID</label>
                                    <input type="text" placeholder="National ID number" class="form-control" name="nin" id="nin" value="{{ $user->nin }}" 
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
                                    <input type="text" placeholder="Bank name" class="form-control" name="bank_name" id="bank_name" value="{{ $user->bank_name }}" required 
                                      class="@error('bank_name') is-invalid @enderror">
                                    @error('bank_name')
                                      <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Account number" class="form-control" name="bank_account_number" id="bank_account_number" value="{{ $user->bank_account_number }}" required
                                    class="@error('bank_account_number') is-invalid @enderror">
                                    @error('bank_account_number')
                                      <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>   
                              
                                <div class="col-md-4">
                                    <input type="text" placeholder="Salary" class="form-control transaction_amount" name="salary" id="salary" value="{{ $user->salary }}" required class="@error('salary') is-invalid @enderror">
                                    @error('salary')
                                    <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                                              
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Joining Date</label>
                                    <input type="date" placeholder="Joining Date" class="form-control" name="join_date" id="join_date" 
                                    value="{{ $user->join_date }}" required class="@error('join_date') is-invalid @enderror">
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
                                <input type="hidden" class="form-control" name="uuid"
                                value="{{ $user->uuid }}">
                                <textarea rows="2" placeholder="description..." name="description"  class="form-control">{{ $user->description}} </textarea>
                                <button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0"  type="submit">update</button>                                                
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






@endsection
