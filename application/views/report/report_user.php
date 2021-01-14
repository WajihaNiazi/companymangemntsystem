<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Users <span class="table-project-n">Data</span> Table</h1>
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
                                                <th data-field="idusers">ID</th>
                                                <th data-field="FirstName" data-editable="true">First Name</th>
                                                <th data-field="lastName" data-editable="true">LastName</th>
                                                <th data-field="userName" data-editable="true">Username</th>
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="type" data-editable="true">Type</th>
                                                <th data-field="created_date" data-editable="true">Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($result as $user):?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $user->idusers;?></td>
                                                    <td><?php echo $user->FirstName;?></td>
                                                    <td><?php echo $user->lastName;?></td>
                                                    <td><?php echo $user->userName;?></td>
                                                    <td><?php echo $user->email;?></td>
                                                    <td><?php echo $user->type;?></td>
                                                    <td><?php echo $user->created_date;?></td>
                                                    <td>
                                                        <a class="fa fa-pencil-square-o btn btn-success pd-setting-ed" aria-hidden="true" data-toggle="tooltip" title="Edit" href="<?php echo base_url();?>forms/users/update/<?php echo $user->idusers;?>"></a>
                                                        <a class="fa fa-trash pd-setting-ed btn btn-danger" aria-hidden="true" data-toggle="tooltip" title="Trash"  href="<?php echo base_url();?>forms/users/delete/<?php echo $user->idusers;?>"></a>
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

