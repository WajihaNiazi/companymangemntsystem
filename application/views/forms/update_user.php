<div>
  <div class="basic-form-area mg-b-15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="sparkline12-list">
            <div class="sparkline12-hd">
              <div class="main-sparkline12-hd">
                <h3 style="text-align: center;">
                  <?php
                    echo $user_data->FirstName." "; 
                    echo " ".$user_data->lastName;
                  ?>
                </h3>
              </div>
            </div>
            <div class="sparkline12-graph">
              <div class="basic-login-form-ad">
                <div class="row" style=" width:90%;margin:auto;">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  " style="width:100%; ">
                    <div class="all-form-element-inner">
                      <p class="bg-danger"><?php echo validation_errors("<p class='bg-danger'>")?></p>
                      <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'create_form');?>
                      <?php echo form_open('forms/users/update/'.$user_data->idusers.'',$attributes);?>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label>FirstName</label>
                              <?php
                                $data = array(
                                        'class' => 'form-control',
                                        'name' =>'FirstName',
                                        'placeholder'=>'Enter your FirstName',
                                        'id'=>'FirstName',
                                        'value'=>$user_data->FirstName
                                    );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>LastName	</label>
                              <?php
                                $data = array(
                                        'class' => 'form-control',
                                        'name' =>'lastName',
                                        'placeholder'=>'Enter your lastName',
                                        'id'=>'lastName',
                                        'value'=>$user_data->lastName
                                    );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>UserName	</label>
                              <?php $data = array(
                                  'class' => 'form-control',
                                  'name' =>'userName',
                                  'placeholder'=>'Enter your userName',
                                  'id'=>'userName',
                                  'value'=>$user_data->userName
                                );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Email</label>
                              <?php $data = array(
                                  'class' => 'form-control',
                                  'name' =>'email',
                                  'placeholder'=>'Email',
                                  'id'=>'email',
                                  'type'=>'email',
                                  'value'=>$user_data->email
                                );
                              ?>
                              <?php echo form_input($data);?> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>type</label>
                              <select name="type" id="type" class="form-control" >
                                <option value="copartner">copartner</option>
                                <option value="staff">staff</option>
                                <?php if($this->session->userdata('user_type') == 'admin'):?>
                                  <option value="admin">admin</option>
                                <?php endif;?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Password	</label>
                              <?php 
                                $data = array(
                                  'class' => 'form-control',
                                  'name' =>'password',
                                  'id'=>'password',
                                  'type'=>'password',
                                  'value'=>'pass'
                                );
                              ?>
                              <?php 
                                echo form_input($data);
                              ?>
                              <input type="hidden" name="oldpass" value="<?php echo $user_data->password;?>">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>ConfirmPassword</label>
                              <?php 
                              $data = array(
                                  'class' => 'form-control',
                                  'name' =>'ConfirmPassword',
                                  'id'=>'ConfirmPassword',
                                  'type'=>'password',
                                  'value'=>'pass'
                                );
                              ?>
                              <?php 
                                echo form_input($data);
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label>Photo</label>
                              <?php $data = array(
                                  'class' => 'form-control',
                                  'name' =>'propic',
                                  'id'=>'propic',
                                  'type'=>'file'
                                );
                              ?>
                              <?php echo form_input($data);?><input name="old_photo" value="<?php echo $user_data->photo; ?>" type="hidden">
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="text-center">
                                <?php
                                    $data = array(
                                        'class' => 'btn btn-success loginbtn',
                                        'name' =>'submit',
                                        'value'=>'Register',
                                        'style'=>'font-weight: bold; background-color:black;border-color:black;',
                                        'color'=>'white'
                                    );
                                ?>
                                <?php echo form_submit($data);?>
                                <a href="<?php echo base_url()?>home/index" class="btn btn-default" style=" color:#fff;font-weight: bold; background-color:black;border-color:black;">Cancel</a>
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