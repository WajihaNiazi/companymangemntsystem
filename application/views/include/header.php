<div class="header-advance-area" >
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro" >
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
											</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="<?php echo base_url();?>forms/users/admin" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <?php if($this->session->userdata('logged_in')):?>
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <?php if($this->session->userdata('photo') == null):?>
                                                                <img src="<?php echo base_url();?>profile_img/55168-200.png" alt="" />
                                                            <?php else:?>
                                                                <span class="admin-name"></span>
                                                                <img src="<?php echo base_url();?>profile_img/<?php echo $this->session->userdata('photo');?>" alt="" />
                                                            <?php endif;?>
                                                            <span class="admin-name"><?php echo $this->session->userdata('username');?></span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            </li>
                                                            <li><a href="<?php echo base_url();?>forms/users/update/<?php echo $this->session->userdata('user_id');?>"><span class=""></span>My Profile</a>
                                                            </li>
                                                            <li><a href="<?php echo base_url();?>forms/users/changepassword/<?php echo $this->session->userdata('user_id');?>"><span class=""></span>Change Password</a>
                                                            </li>
                                                            </li>
                                                            <li><a href="<?php echo base_url();?>forms/users/logout"><span class=""></span>Log Out</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                <?php endif;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="<?php echo base_url();?>home/index">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                
                                            </ul>
                                            <?php if($this->session->userdata('user_type') == 'admin' || $this->session->userdata('user_type') == 'copartner'):?>
                                            <li >
                            <?php if($this->session->userdata('user_type') == 'admin'):?>
                                <a class="has-arrow" href="all-professors.html" aria-expanded="false"> <span class="mini-click-non">User</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/users/register"><span class="mini-sub-pro">Register</span></a></li>
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/users/index"><span class="mini-sub-pro">ListOfUser</span></a></li>
                                </ul>
                            <?php endif;?>
                        </li>
                        <li >
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"> <span class="mini-click-non ">Finance</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <?php if($this->session->userdata('user_type') == 'admin'):?>
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/income"><span class="mini-sub-pro">Income</span></a></li>
                                    <li><a title="Add Professor" href="<?php echo base_url();?>forms/outcome"><span class="mini-sub-pro">Outcome</span></a></li>
                                    <li><a title="Add Professor" href="<?php echo base_url();?>forms/expence"><span class="mini-sub-pro">Expence</span></a></li>
                                <?php endif;?>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/income/income_report"><span class="mini-sub-pro">Income Report</span></a></li>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/outcome/outcome_report"><span class="mini-sub-pro">Outcome Report</span></a></li>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/expence/expence_report"><span class="mini-sub-pro">Expence Report</span></a></li>
                            </ul>
                        </li>
                        <li >
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"> <span class="mini-click-non">Items</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <?php if($this->session->userdata('user_type') == 'admin'):?>
                                    <li><a title="Add Professor" href="<?php echo base_url();?>forms/items"><span class="mini-sub-pro">Items Register</span></a></li>
                            <?php endif;?>
                                <li><a title="Add Professor" href="<?php echo base_url();?>forms/items/item_table"><span class="mini-sub-pro">Items Report</span></a></li>
                            </ul>
                        </li>
                        <li >
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"> <span class="mini-click-non">Staff</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <?php if($this->session->userdata('user_type') == 'admin'):?> 
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/department"><span class="mini-sub-pro">Department</span></a></li>
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/staff"><span class="mini-sub-pro">Staff Register</span></a></li>
                                <?php endif;?>
                                <li><a title="All Professors" href="<?php echo base_url();?>forms/staff/ShowAllStaff"><span class="mini-sub-pro">Staff Report </span></a></li>
                                <li><a title="All Professors" href="<?php echo base_url();?>forms/department/ShowAllDepartment"><span class="mini-sub-pro">Department Report </span></a></li>
                            </ul>
                        </li>
                        <li >
                            <a class="has-arrow" href="#" aria-expanded="false"> <span class="mini-click-non"> Recycle Bin</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <?php if($this->session->userdata('user_type') == 'admin'):?> 
                                    <li><a title="All Professors" href="<?php echo base_url();?>forms/recycleBin"><span class="mini-sub-pro">Deleted</span></a></li>
                                <?php endif;?>
                            </ul>
                        </li>
                        <?php endif;?>
                                        </li>

                           
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        