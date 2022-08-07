
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
                                        <li class="breadcrumb-item active">Leaves</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Leaves</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>

                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary px-4 mt-0 mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">
                                        <i class="mdi mdi-plus-circle-outline mr-2"></i>Add new leave</button>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Member Name</th>
                                                    <th>Role</th> 
                                                    <th>From</th>
                                                    <th>To</th>                                                    
                                                    <th>Total Days</th>
                                                    <th>Reason</th>
                                                    <th>Permission</th>                                         
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
        
                                            <tbody>
                                           @if(isset($leaves))
                                            @foreach( $leaves as $leave)
                                            <tr>
                                                <td>#</td>
                                                <td>
                                                  <img src="{!! asset('backend/assets/images/users/user-10.jpg') !!}" alt=""
                                                 class="thumb-sm rounded-circle mr-2"><?= $leave->name->name() ?>
                                                </td>
                                                <td></td>
                                                <td><?= date('d/m/Y', strtotime($leave->start_date)) ?></td>
                                                <td><?= date('d/m/Y', strtotime($leave->end_date))  ?></td>
                                                <td><?= $leave->number_of_days ?></td> 
                                                <td> </td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>                                                                   
                                                                                             
                                                <td class="text-right"> 
                                                    <?php $view_url = "/view-leave/$leave->uuid"; $edit_url = "/edit-leave/$leave->uuid"; $delete_url = "/delete-user/$user->uuid";?>                                                      
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



        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel2">Add Leave</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="MemberNameEdit">Member Name</label>
                                        <input type="text" class="form-control" value="Donald Gardner" id="MemberNameEdit" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="FromToEdit">From</label>
                                        <input type="date" class="form-control"  id="From" name="From" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="ToEdit">To</label>
                                        <input type="date" class="form-control"  id="To"  name="To" required="">
                                    </div>
                                </div>                                                                    
                            </div>
                            <div class="row">  
                                    <div class="form-group">
                                        <label for="ReasonEdit">Reason</label>
                                        <input type="text" class="form-control" value="Going to Family Function" id="ReasonEdit" required="">
                                    </div>
                                </div>
                            <button type="button" class="btn btn-sm btn-primary">Save</button>  
                            <button type="button" class="btn btn-sm btn-danger">cancel</button>             
                        </form>  
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
@endsection
        


        
   