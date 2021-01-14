<div>
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1 style="text-align: center;">Staff Update Form</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style='width:90%;margin:auto'>
                                            <div class="all-form-element-inner">
                                                <!-- Make style later -->
                                                <?php echo validation_errors("<p class='bg-danger'>")?>
                                                <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'create_form');?>
                                                <?php echo form_open('forms/staff/update/'.$staff_data->id.'',$attributes);?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="FirstName" class="login2 pull-right pull-right-pro">FirstName</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'FirstName',
                                                                        'placeholder'=>'FirstName',
                                                                        'value'=>$staff_data->FirstName
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="LastName" class="login2 pull-right pull-right-pro">LastName</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'LastName',
                                                                        'placeholder'=>'LastName',
                                                                        'value'=>$staff_data->LastName
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="FatherName" class="login2 pull-right pull-right-pro">FatherName</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'FatherName',
                                                                        'placeholder'=>'FatherName',
                                                                        'value'=>$staff_data->FatherName
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="phone" class="login2 pull-right pull-right-pro">Phone Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'phone',
                                                                        'placeholder'=>'phone',
                                                                        'value'=>$staff_data->phone
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="salary" class="login2 pull-right pull-right-pro">salary</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'salary',
                                                                        'placeholder'=>'salary',
                                                                        'type'=>'number',
                                                                        'value'=>$staff_data->salary
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="position" class="login2 pull-right pull-right-pro">position</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'position',
                                                                        'placeholder'=>'position',
                                                                        'value'=>$staff_data->position
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="ssn" class="login2 pull-right pull-right-pro">ssn</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'ssn',
                                                                        'placeholder'=>'ssn',
                                                                        'type'=>'number',
                                                                        'value'=>$staff_data->ssn
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="department" class="login2 pull-right pull-right-pro">Department</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select class="form-control" name="department" id="department">
                                                                    <option value="<?php echo $staff_data->dp_id;?>" checked ><?php echo $dp_name->dp_name?></option>
                                                                    <?php foreach($result as $dp):?>
                                                                        <?php if($staff_data->dp_id !== $dp->id):?>
                                                                            <option value="<?php echo $dp->id; ?>"><?php echo $dp->dp_name;?></option> 
                                                                        <?php endif;?>  
                                                                    <?php  endforeach;?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="city" class="login2 pull-right pull-right-pro">City</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'city',
                                                                        'placeholder'=>'city',
                                                                        'value'=>$staff_data->city
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="district" class="login2 pull-right pull-right-pro">District</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'district',
                                                                        'placeholder'=>'district',
                                                                        'value'=>$staff_data->district
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="address" class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'address',
                                                                        'placeholder'=>'address',
                                                                        'value'=>$staff_data->address
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="date_of_brith" class="login2 pull-right pull-right-pro">Date Of Brith</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'date_of_brith',
                                                                        'placeholder'=>'Enter the amount of money',
                                                                        'id'=>'date_of_brith',
                                                                        'type'=>'text',
                                                                        'value'=>$staff_data->date_of_brith
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="tazcareh" class="login2 pull-right pull-right-pro">Tazcareh</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'tazcareh',
                                                                        'placeholder'=>'tazcareh',
                                                                        'type'=>'file',
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?><input name="old_tazcareh" value="<?php echo $staff_data->tazcareh; ?>" type="hidden">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label for="photo" class="login2 pull-right pull-right-pro">photo</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'photo',
                                                                        'placeholder'=>'photo',
                                                                        'type'=>'file'
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?><input name="old_photo" value="<?php echo $staff_data->photo; ?>" type="hidden">
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
                                                                                'value'=>'register',
                                                                                'style'=>'background-color:black;border-color:black;',
                                                                                'color'=>'white'
                                                                            );
                                                                        ?>
                                                                        <?php echo form_submit($data);?>
                                                                        <a style="font-weight: bold;background-color:black;border-color:black;color:white" href="<?php echo base_url();?>forms/staff/ShowAllStaff" class='btn btn-primary login-submit-cs'>Cancel</a>
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