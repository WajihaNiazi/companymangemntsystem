<div>
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1 style="text-align: center;"> Update Department Form</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style='width:90%;margin:auto'>
                                            <div class="all-form-element-inner">
                                                <!-- Make style later -->
                                                <?php echo validation_errors("<p class='bg-danger'>")?>
                                                <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'create_form');?>
                                                <?php echo form_open('forms/department/update/'.$department_data->id.'',$attributes);?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <?php echo form_label('Department');?>

                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'dp_name',
                                                                        'placeholder'=>'Name',
                                                                        'value'=>$department_data->dp_name
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
                                                                        <a style="font-weight: bold;background-color:black;border-color:black;color:white" href="<?php echo base_url();?>forms/department/ShowAllDepartment" class='btn btn-primary login-submit-cs'>Cancel</a>
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