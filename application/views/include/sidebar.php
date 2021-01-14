<?php 
  $home="";
  $user="";
  $Finance="";
  $Item="";
  $Staff="";
  $deleted="";
  if($this->uri->segment(2)=='index'){
      $home="active";
  }elseif($this->uri->segment(3)=='register' || $this->uri->segment(3)=='index'){
    $user="active";
  }elseif($this->uri->segment(2)=='income' || $this->uri->segment(2)=='outcome' || $this->uri->segment(3)=='income_report' || $this->uri->segment(3)=='outcome_report' || $this->uri->segment(3)=='expence_report' || $this->uri->segment(2)=='expence') {
    $Finance="active";
  }elseif($this->uri->segment(2)=='items' || $this->uri->segment(3)=='item_table'){
      $Item="active";
  }elseif($this->uri->segment(2)=='department' || $this->uri->segment(2)=='staff' || $this->uri->segment(3)=='ShowAllStaff' || $this->uri->segment(3)=='ShowAllDepartment') {
    $Staff="active";
  }elseif($this->uri->segment(2)=='recycleBin'){
    $deleted="active"; 
  }
?>
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url();?>assets/img/logo/200.png" alt="" /></a>
                <strong><a href="index.html"><img src="<?php echo base_url();?>assets/img/logo/Joystick.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar" style='color:#009999'>
                <nav class="sidebar-nav left-sidebar-menu-pro" style='background-color:#009999'>
                    <ul class="metismenu" id="menu1" >
                        <li class="<?php echo $home;?>">
                            <a class="" href="<?php echo base_url();?>home/index">
								   <span class="fas fa-home"></span>
								   <span class="mini-click-non"> Home</span>
							</a>
         
                        </li>
                        <?php if($this->session->userdata('user_type') == 'admin' || $this->session->userdata('user_type') == 'copartner'):?>
                        <li class="<?php echo $user;?>">
                            <?php if($this->session->userdata('user_type') == 'admin'):?>
                                <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="fas fa-user-friends"></span> <span class="mini-click-non">User</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/users/register"><span class="mini-sub-pro">Register</span></a></li>
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/users/index"><span class="mini-sub-pro">All Users</span></a></li>
                                </ul>
                            <?php endif;?>
                        </li>
                        <li class="<?php echo $Finance;?>">
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="fa fa-coins"></span> <span class="mini-click-non ">Finance</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <?php if($this->session->userdata('user_type') == 'admin'):?>
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/income"><span class="mini-sub-pro">Income</span></a></li>
                                    <li><a title="Add Professor" href="<?php echo base_url();?>forms/outcome"><span class="mini-sub-pro">Outcome</span></a></li>
                                    <li><a title="Add Professor" href="<?php echo base_url();?>forms/expence"><span class="mini-sub-pro">Expense</span></a></li>
                                <?php endif;?>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/income/income_report"><span class="mini-sub-pro">Income Report</span></a></li>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/outcome/outcome_report"><span class="mini-sub-pro">Outcome Report</span></a></li>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/expence/expence_report"><span class="mini-sub-pro">Expense Report</span></a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $Item;?>">
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="fa fa-file-archive"></span> <span class="mini-click-non">Items</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <?php if($this->session->userdata('user_type') == 'admin'):?>
                                    <li><a title="Add Professor" href="<?php echo base_url();?>forms/items"><span class="mini-sub-pro">Register</span></a></li>
                            <?php endif;?>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/items/item_table"><span class="mini-sub-pro">List of Items</span></a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $Staff;?>">
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="fa fa-users"></span> <span class="mini-click-non">Staff</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <?php if($this->session->userdata('user_type') == 'admin'):?> 
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/department"><span class="mini-sub-pro">Department</span></a></li>
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/staff"><span class="mini-sub-pro">Staff Register</span></a></li>
                                <?php endif;?>
                                <li><a title="All Professors" href="<?php echo base_url();?>forms/staff/ShowAllStaff"><span class="mini-sub-pro">Staff Report </span></a></li>
                                <li><a title="All Professors" href="<?php echo base_url();?>forms/department/ShowAllDepartment"><span class="mini-sub-pro">Department Report </span></a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $deleted;?>">
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="fa fa-recycle"></span> <span class="mini-click-non"> Recycle Bin</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <?php if($this->session->userdata('user_type') == 'admin'):?> 
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/recycleBin"><span class="mini-sub-pro">Deleted</span></a></li>
                                <?php endif;?>
                            </ul>
                        </li>
                        <?php endif;?>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>