<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Department<span class="table-project-n"></span></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="department" data-editable="true">Department Name</th>
                                                <?php if($this->session->userdata('user_type') == 'admin'):?>
                                                    <th>Action</th>
                                                <?php endif;?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($result as $dp):?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $dp->id;?></td>
                                                    <td><?php echo $dp->dp_name;?></td>
                                                    <?php if($this->session->userdata('user_type') == 'admin'):?>
                                                        <td>
                                                            <a class="fa fa-trash pd-setting-ed btn btn-danger" style="color:#fff;"  aria-hidden="true" data-toggle="tooltip" title="Trash" href="<?php echo base_url();?>forms/department/delete/<?php echo $dp->id;?>"></a>
                                                            <a class="fa fa-reply btn btn-success pd-setting-ed"  style="color:#fff;" aria-hidden="true" data-toggle="tooltip" title="Edit" href="<?php echo base_url();?>forms/department/undo/<?php echo $dp->id;?>"></a>
                                                        </td>
                                                    <?php endif;?>
                                                </tr> 
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </div>


        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Staff<span class="table-project-n"></span></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="FirstName" data-editable="true">FirstName</th>
                                                <th data-field="LastName" data-editable="true">LastName</th>
                                                <th data-field="FatherName" data-editable="true">FatherName</th>
                                                <th data-field="phone" data-editable="true">Phone Number</th>
                                                <th data-field="salary" data-editable="true">salary</th>
                                                <th data-field="position" data-editable="true">position</th>
                                                <th data-field="ssn" data-editable="true">ssn</th>
                                                <th data-field="dp_id" data-editable="true">Department</th>
                                                <th data-field="age" data-editable="true">Age</th>
                                                <th data-field="address" data-editable="true">Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                function Age($Year){
                                                    $getYear=substr($Year,0,4);
                                                    $date = date("Y-m-d");
                                                    $getAge=substr($date,0,4);
                                                    $age =$getAge-$getYear;
                                                    return $age;
                                                }
                                                foreach($staffs as $staff):?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $staff->id;?></td>
                                                    <td><?php echo $staff->FirstName;?></td>
                                                    <td><?php echo $staff->LastName;?></td>
                                                    <td><?php echo $staff->FatherName;?></td>
                                                    <td><?php echo $staff->phone;?></td>
                                                    <td><?php echo $staff->salary;?></td>
                                                    <td><?php echo $staff->position;?></td>
                                                    <td><?php echo $staff->ssn;?></td>
                                                    <td><?php echo $staff->dp_name;?></td>
                                                    <td><?php echo Age($staff->date_of_brith);?></td>
                                                    <td><?php echo $staff->city."/"; echo $staff->district."/";echo $staff->address;?></td>
                                                    <td>
                                                    <?php if($this->session->userdata('user_type') == 'admin'):?>
                                                        <a class="fa fa-trash pd-setting-ed btn btn-danger" style="color:#ffffff" aria-hidden="true" data-toggle="tooltip" title="Trash" href="<?php echo base_url();?>forms/staff/deleted_staffs/<?php echo $staff->id;?>"></a>
                                                        <a class="fa fa-reply btn btn-success pd-setting-ed" style="color:#ffffff" aria-hidden="true" data-toggle="tooltip" title="undo" href="<?php echo base_url();?>forms/staff/undo_staffs/<?php echo $staff->id;?>"></a>
                                                    <?php endif;?>
                                                    <a class="fa fa-eye btn btn-success pd-setting-ed" style="color:#ffffff" aria-hidden="true" data-toggle="tooltip" title="view" href="<?php echo base_url();?>forms/staff/view_staff/<?php echo $staff->id;?>"></a>
                                                    </td>
                                                </tr> 
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>User<span class="table-project-n"></span></h1>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <div class="contacts-area mg-b-15">
        <div class="container-fluid">
        <div class="row">
        
            <p class="bg-danger">
              <?php if($this->session->flashdata('delete')):?>
                <?php  echo $this->session->flashdata('delete');?>
              <?php endif;?>
            </p>
            <?php foreach($users as $user):?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="student-inner-std res-mg-b-30">
                   
                        <div class="student-img">
                            <?php if($user->photo):?>
                                <img src="<?php echo base_url();?>profile_img/<?php echo $user->photo;?>" style="width:300px;height:300px;" alt="" />
                            <?php else:?>
                                <span class="admin-name"></span>
                                <img src="<?php echo base_url();?>profile_img/55168-200.png" style="width:300px;height:300px;" alt="" />
                            <?php endif;?>
                        </div>
                        <div class="student-dtl">
                            <h2><?php echo $user->userName;?></h2>
                            <a class="fa fa-trash pd-setting-ed btn btn-danger"  style="color:#fff;"aria-hidden="true" data-toggle="tooltip" title="Trash"  href="<?php echo base_url();?>forms/users/deleted/<?php echo $user->idusers;?>"></a>
                            <a class="fa fa-reply  pd-setting-ed btn btn-success" aria-hidden="true" data-toggle="tooltip" title="undo"  href="<?php echo base_url();?>forms/users/undo_users/<?php echo $user->idusers;?>"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

