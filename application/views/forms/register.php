<div>
  <div class="basic-form-area mg-b-15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="sparkline12-list">
            <div class="sparkline12-hd">
              <div class="main-sparkline12-hd">
                <h3 style="text-align: center;">
                  Registration
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
                      <?php echo form_open('forms/users/register',$attributes);?>
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
                                  'value'=>set_value('FirstName')
                                );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>lastName	</label>
                              <?php
                                $data = array(
                                  'class' => 'form-control',
                                  'name' =>'lastName',
                                  'placeholder'=>'Enter your lastName',
                                  'id'=>'lastName',
                                  'value'=>set_value('lastName')
                                );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>userName	</label>
                              <?php $data = array(
                                  'class' => 'form-control',
                                  'name' =>'userName',
                                  'placeholder'=>'Enter your userName',
                                  'id'=>'userName',
                                  'value'=>set_value('userName')
                                );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>password	</label>
                              <?php $data = array(
                                  'class' => 'form-control',
                                  'name' =>'password',
                                  'placeholder'=>'Enter your password',
                                  'id'=>'password',
                                  'type'=>'password',
                                  'value'=>set_value('password')
                                );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>ConfirmPassword</label>
                              <?php $data = array(
                                  'class' => 'form-control',
                                  'name' =>'ConfirmPassword',
                                  'placeholder'=>'ConfirmPassword',
                                  'id'=>'ConfirmPassword',
                                  'type'=>'password',
                                  'value'=>set_value('ConfirmPassword')
                                );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>email</label>
                              <?php $data = array(
                                  'class' => 'form-control',
                                  'name' =>'email',
                                  'placeholder'=>'Email',
                                  'id'=>'email',
                                  'type'=>'email'
                                );
                              ?>
                              <?php echo form_input($data);?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>type</label>
                              <?php
                              $options = array(
                                'copartner'=> 'copartner',
                                'staff'=> 'staff',
                              );
                                $data= array(
                                'class' => 'form-control'
                                );
                              ?>
                              <?php echo form_dropdown( 'type',$options,0,$data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="text-center">
                              <?php
                              $data = array(
                                  'class' => 'btn btn-default btn-success loginbtn',
                                  'name' =>'submit',
                                  'value'=>'Register',
                                  'style'=>'background-color:black;border-color:black;',
                                  'color'=>'white'
                              );
                          ?>
                          <?php echo form_submit($data);?>
                          <a href="<?php base_url()?>login" class="btn btn-default" style=" color:#fff;font-weight: bold; background-color:black;border-color:black;">Cancel</a>
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