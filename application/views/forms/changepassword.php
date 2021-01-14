<div>
  <div class="basic-form-area mg-b-15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="sparkline12-list">
            <div class="sparkline12-hd">
              <div class="main-sparkline12-hd">
                <h3 style="text-align: center;"> Change Password</h3>
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
                                <label class="control-label" for="oldpassword">Old Password</label>
                                <?php
                                    $data = array(
                                        'class' => 'form-control',
                                        'name' =>'oldpassword',
                                        'id'=>'oldpassword',
                                        'type'=>'password',
                                        'value'=>set_value('oldpassword')
                                    );
                                ?>
                                <?php echo form_input($data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label" for="newpassword">New Password</label>
                                <?php
                                    $data = array(
                                        'class' => 'form-control',
                                        'name' =>'newpassword',
                                        'id'=>'newpassword',
                                        'type'=>'password',
                                        'value'=>set_value('newpassword')
                                    );
                                ?>
                                <?php echo form_input($data);?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="text-center">
                                    <?php
                                        $data = array(
                                            'class' => 'btn btn-success  loginbtn',
                                            'name' =>'submit',
                                            'value'=>'Change',
                                            'style'=>'font-weight: bold;background-color:black;border-color:black;color:white'
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