<div>
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1 style="text-align: center;">Update Form</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style='width:90%;margin:auto'>
                                        <div class="all-form-element-inner">
                                                <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'update_form');?>
                                                <?php echo form_open('forms/items/edit/'. $items->iditems . '',$attributes);?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="itemName" class="login2 pull-right pull-right-pro">Item Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'itemName',
                                                                        'id'=>'itemName',
                                                                        'value' =>$items->itemName
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="price" class="login2 pull-right pull-right-pro">Price</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'price',
                                                                        'placeholder'=>'Enter the amount of money',
                                                                        'id'=>'price',
                                                                        'type'=>'number',
                                                                        'value' =>$items->price
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="itemDate" class="login2 pull-right pull-right-pro">Item Date</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'itemDate',
                                                                        'placeholder'=>'Enter the amount of money',
                                                                        'id'=>'itemDate',
                                                                        'type'=>'date',
                                                                        'value' =>$items->itemDate  
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="itemquantity" class="login2 pull-right pull-right-pro">Item Quantity</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'itemquantity',
                                                                        'placeholder'=>'Enter the amount of money',
                                                                        'id'=>'itemquantity',
                                                                        'type'=>'number',
                                                                        'value' =>$items->itemquantity
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <?php
                                                                            $data = array(
                                                                                'class' => 'btn btn-primary login-submit-cs',
                                                                                'name' =>'submit',
                                                                                'value'=>'Update',
                                                                                'style'=>'background-color:black;border-color:black;',
                                                                                'color'=>'white'
                                                                            );
                                                                        ?>
                                                                        <?php echo form_submit($data);?>
                                                                        <a style="font-weight: bold;background-color:black;border-color:black;color:white" href="<?php echo base_url();?>forms/items/item_table" class='btn btn-primary login-submit-cs'>Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php echo form_close();?> 
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
