
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Tables</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Basic Tables</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary px-4 mt-0 mb-3" onclick="location.href='{{ route('add-user') }}'"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Member</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Member Name</th>
                                                <th>Age</th>
                                                <th>NIN</th>                                                    
                                                <th>Address</th>
                                                <th>Mobile No</th>
                                                <th>Join Date</th>
                                                <th>Gender</th>                                                
                                                <th class="text-right">Action</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                           @if(isset($users))
                                            @foreach( $users as $user )
                                            <tr>
                                                <td>
                                                <img src="{!! asset('backend/assets/images/users/user-10.jpg') !!}" alt=""
                                                 class="thumb-sm rounded-circle mr-2"><?= $user->name() ?></td>
                                                <td><?= \Carbon\Carbon::parse($user->date_of_birth)->age ?></td>
                                                <td><?= $user->nin ?></td>
                                                <td><?= $user->address ?? '' ?></td>
                                                <td><?= $user->phone ?></td> 
                                                <td><?= date('d/m/Y', strtotime($user->join_date)) ?></td>
                                                <td><?= ucfirst($user->gender) ?></td>                                                                                               
                                                <td class="text-right"> 
                                                    <?php $view_url = "/view-user/$user->uuid"; $edit_url = "/edit-user/$user->uuid"; $delete_url = "/delete-user/$user->uuid";?>                                                      
                                                    <a href="<?= $view_url ?>" class="mr-2"><i class="fas fa-eye text-info font-16"></i></a>
                                                    <a href="<?= $edit_url ?>" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                    <a href="<?= $delete_url ?>"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                                </td>
                                            </tr>
                                             @endforeach
                                            @endif
                                           </tbody>
                                        </table>                    
                                    </div>                                         
                                </div> 
                            </div>
                        </div>                              
                    </div>


                  
                </div>
            </div>
        </div>

@endsection
        


        
   