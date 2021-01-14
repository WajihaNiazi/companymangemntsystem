<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <?php if($staff_data->photo == ''):?>
                            <img src="<?php echo base_url();?>staff_photo/770826-200.png" alt="" style="width:100%; height:200px" />
                        <?php else:?>
                            <img src="<?php echo base_url();?>staff_photo/<?php echo $staff_data->photo;?>" alt="" style="width:100%; height:200px" />
                        <?php endif;?>
                    </div>
                        <div class="profile-details-hr">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Name</b><br /> <?php echo $staff_data->FirstName;?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>LastName</b><br /> <?php echo $staff_data->LastName;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>FatherName</b><br /> <?php echo $staff_data->FatherName;?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>salary</b><br /> <?php echo $staff_data->salary;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>position</b><br /> <?php echo $staff_data->position;?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>ssn</b><br /> <?php echo $staff_data->ssn;?></p>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Department</b><br /> <?php echo $dp_name->dp_name;?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Phone Number</b><br /> <?php echo $staff_data->phone;?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Age</b><br />
                                            <?php 
                                                function Age($Year){
                                                    $getYear=substr($Year,0,4);
                                                    $date = date("Y-m-d");
                                                    $getAge=substr($date,0,4);
                                                    $age =$getAge-$getYear;
                                                    return $age;
                                                }
                                                echo Age( $staff_data->date_of_brith);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Address</b><br /> <?php echo $staff_data->city."/"; echo $staff_data->district."/";echo $staff_data->address;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <h1>National Card</h1>
                        <?php if($staff_data->tazcareh == ''):?>
                            <img src="<?php echo base_url();?>staff_nationalcards/wp2537078.jpg" alt=""  style="width:100%; height:538px" />
                        <?php else:?>
                            <img src="<?php echo base_url();?>staff_nationalcards/<?php echo $staff_data->tazcareh;?>" alt=""  style="width:100%; height:538px" />
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>