<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Staffs <span class="table-project-n">Data</span> Table</h1>
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
                                                foreach($result as $staff):?>
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
                                                        <a class="fa fa-pencil-square-o btn btn-success pd-setting-ed" style="color:#ffffff" aria-hidden="true" data-toggle="tooltip" title="Edit" href="<?php echo base_url();?>forms/staff/update/<?php echo $staff->id;?>"></a>

                                                        <a  href="<?php echo base_url();?>forms/staff/delete/<?php echo $staff->id;?>"><i class="fa fa-trash btn btn-danger pd-setting-ed" aria-hidden="true"></i></a>
                                                    <?php endif;?>
                                                    <a class="fa fa-eye btn btn-primary pd-setting-ed" style="color:#ffffff" aria-hidden="true" data-toggle="tooltip" title="view" href="<?php echo base_url();?>forms/staff/view_staff/<?php echo $staff->id;?>"></a>
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

