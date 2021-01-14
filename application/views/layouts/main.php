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
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fontawesome/css/all.min.css">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logoo.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
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
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/educate-custon-icon.css">
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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/editor/select2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/editor/x-editor-style.css">
    <!-- normalize CSS============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/data-table/bootstrap-editable.css">




    <!-- notifications CSS 	============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/notifications/notifications.css">
</head>

<body>
   
<?php if($this->session->userdata('logged_in')):?>
    <?php  $this->load->view('include/sidebar');?>
  <?php endif;?>
    <div class="all-content-wrapper">
      <?php if($this->session->userdata('logged_in')):?>
          <?php  $this->load->view('include/header');?>
      <?php endif;?>
          <?php $this->load->view($main);?>
      <?php if($this->session->userdata('logged_in')):?>      
          <?php $this->load->view('include/footer')?>
      <?php endif;?>
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
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/calendar/fullcalendar-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/form-validation/jquery.form.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/form-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/form-validation/form-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/tawk-chat.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/icheck/icheck-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/chart/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/peity/peity-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/editable/jquery.mockjax.js"></script>
    <script src="<?php echo base_url();?>assets/js/editable/mock-active.js"></script>
    <script src="<?php echo base_url();?>assets/js/editable/select2.js"></script>
    <script src="<?php echo base_url();?>assets/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url();?>assets/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url();?>assets/js/editable/xediable-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url();?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/js/morrisjs/morris.js"></script>
    <script src="<?php echo base_url();?>assets/js/morrisjs/morris-active.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/counterup/counterup-active.js"></script>


    <!-- notification JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/js/notifications/Lobibox.js"></script>
    <script src="<?php echo base_url();?>assets/js/notifications/notification-active.js"></script>


    <script>
     function display(){
            var x = document.getElementById('mySelect').value;
        
            if(x == "dollar"){

             document.getElementById('input1').style.display="block";
             document.getElementById('input2').style.display="block";
            //   document.getElementById('input').style.backgroundColor='blue';
            }
            else{
             document.getElementById('input1').style.display="none";
             document.getElementById('input2').style.display="none";

            }
     }
     function changeRate(){
            
           var input1= document.getElementById('input_1').value;
            var input2= document.getElementById('input_2').value;
            var result= input1*input2;
            console.log(input1);
            document.getElementById('Amount').value=result;
     }
    </script>
</body>

</html>