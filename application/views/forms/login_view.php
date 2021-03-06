<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
      <?php
        if ($title){ 
          echo 'Afgamestan | '.$title; 
        }else{ 
          echo 'Default Title'; 
        }
      ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logoo.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style1.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
  <div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
        <h3>LOGIN TO APP</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
          <div class="panel-body">
            <div>
              <p>
                <?php if($this->session->flashdata('errors')):?>
                  <?php echo $this->session->flashdata('errors');?>
                <?php endif;?>
                <?php if($this->session->flashdata('login_filed')):?> 
                  <?php echo $this->session->flashdata('login_filed')?>
                <?php endif;?>
                <?php if($this->session->flashdata('no_access')):?>
                    <?php echo $this->session->flashdata('no_access')?>
                <?php endif;?>
              </p>
            </div>
            <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'create_form');?>
            <?php echo form_open('forms/users/login',$attributes);?>
                <div class="form-group">
                  <label class="control-label" for="userName">Username</label>
                    <?php
                      $data = array(
                              'class' => 'form-control',
                              'name' =>'username',
                              'id'=>'userName',
                              'value'=>set_value('userName')
                          );
                    ?>
                    <?php echo form_input($data);?>
                </div>
                <div class="form-group">
                  <label class="control-label" for="password">Password</label>
                  <?php
                      $data = array(
                              'class' => 'form-control',
                              'name' =>'password',
                              'placeholder'=>'******',
                              'id'=>'password',
                              'type'=>'password',
                              'value'=>set_value('password')
                          );
                  ?>
                  <?php echo form_input($data);?>
                </div>
                <div class="form-group text-center" >
                    <?php
                      $data = array(
                            'class' => 'btn btn-success',
                            'name' =>'submit',
                            'value'=>'Login',
                            'style'=>'width:115px;height:43px;font-weight:bold;color:white;background-color:black;border-color:black;'
                      );
                    ?>
                    <?php echo form_submit($data);?>
                    <a class="btn btn-default " style="font-weight: bold;background-color:black;border-color:black;color:white;" href="<?php echo base_url();?>/forms/users/register">Register</a>
                </div>                                        
            <?php echo form_close();?>      
          </div>
        </div>
			</div>
			<div class="text-center login-footer">
				<p><a href="<?php echo base_url()?>forms/users/display_doforget" style="">forgot password???</a></p>
			</div>
		</div>   
</div>
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/tawk-chat.js"></script>
</body>

</html>