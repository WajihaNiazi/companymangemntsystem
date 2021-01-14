<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Departments <span class="table-project-n">Data</span> Table</h1>
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
                                                            <a   href="<?php echo base_url();?>forms/department/delete/<?php echo $dp->id;?>"><i class="fa fa-trash pd-setting-ed btn btn-danger" aria-hidden="true"></i></a>
                                                            <a   href="<?php echo base_url();?>forms/department/update/<?php echo $dp->id;?>"><i class="fa fa-pencil-square-o btn btn-success pd-setting-ed" aria-hidden="true"></i></a>
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

