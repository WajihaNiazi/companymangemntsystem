<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Items <span class="table-project-n">Data</span> Table</h1>
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
                                                <th data-field="iditems">ID</th>
                                                <th data-field="name" data-editable="true">Item Name</th>
                                                <th data-field="price" data-editable="true">Price</th>
                                                <th data-field="date" data-editable="true">Item Date</th>
                                                <th data-field="quantity" data-editable="true">Item Quantity</th>
                                                <?php if($this->session->userdata('user_type') == 'admin'):?>
                                                    <th data-field="action">Action</th>
                                                <?php endif;?>
                                            </tr>
                                        </thead>
                                         <tbody>
                                            <?php foreach ($items as $row) {  ?>
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row->iditems;?></td>
                                                <td><?php echo $row->itemName;?></td>
                                                <td><?php echo $row->price;?></td>
                                                <td><?php echo $row->itemDate;?></td>
                                                <td><?php echo $row->itemquantity;?></td>
                                                <?php if($this->session->userdata('user_type') == 'admin'):?>
                                                    <td>
                                                        <a href="<?php echo base_url();?>forms/items/edit/<?php echo $row->iditems;?>"><i class="fa fa-pencil-square-o btn btn-success pd-setting-ed" aria-hidden="true"></i> </a>
                                                        <a href="<?php echo base_url();?>forms/items/delete/<?php echo $row->iditems; ?>"><i class="fa fa-trash btn btn-danger pd-setting-ed" aria-hidden="true"></i> </a>
                                                    </td>
                                                <?php endif;?>
                                            </tr> 
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>