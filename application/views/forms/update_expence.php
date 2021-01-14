
        
        <div >
            <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1 style="text-align: center;">Update Expence</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style='width:90%;margin:auto'>
                                        <div class="all-form-element-inner">
                                                <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'create_form');?>
                                                <?php echo form_open('forms/expence/edit/'.$expence->id.'',$attributes);?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="FullName" class="login2 pull-right pull-right-pro">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'fullName',
                                                                        'placeholder'=>'Enter your Full Name',
                                                                        'id'=>'FullName',
                                                                        'value'=>$expence->fullName
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="Description" class="login2 pull-right pull-right-pro">Description</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'description',
                                                                        'placeholder'=>'Enter your Full Name',
                                                                        'id'=>'Description',
                                                                        'value'=>$expence->description
                                                                    );
                                                                ?>
                                                                <?php echo form_textarea($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                <label for="Amount" class="login2 pull-right pull-right-pro">Amount</label>
                                                            </div>
                                                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control ',
                                                                        'name' =>'amount',
                                                                        'placeholder'=>'Enter the amount of money',
                                                                        'id'=>'Amount',
                                                                        'type'=>'number',
                                                                        'value'=>$expence->amount

                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                              
                                                              
                
                                                                <!-- <a class="btn btn-primary" href="<?php echo base_url();?>forms/currency/index" >change</a> -->
                                                              
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 ">
                                                             <select  onchange="display()" name="" class="form-control " id="mySelect" >
                                                                    <option value="afghani">Afghani</option>
                                                                    <option value="dollar" onclick="display()">Change Rate</option>
                                                                    
                                                                </select>
                                                             </div>   
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner" id='input1' style="display:none">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="Date" class="login2 pull-right pull-right-pro">A</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'a',
                                                                        'placeholder'=>'Enter the amount of money',
                                                                        'type'=>'text',
                                                                        'id'=>'input_1'
                                                                    );
                                                                ?>
                                                                <?php echo form_input($data);?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner" id='input2' style="display:none">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="Date" class="login2 pull-right pull-right-pro">B</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            
                                                                <input type="text" id='input_2' class='form-control' name='b' onkeyup="changeRate()" >
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label for="Date" class="login2 pull-right pull-right-pro">Date</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php
                                                                $data = array(
                                                                        'class' => 'form-control',
                                                                        'name' =>'date',
                                                                        'placeholder'=>'Enter the amount of money',
                                                                        'id'=>'Date',
                                                                        'value'=>$expence->expenceDate

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
                                                                        <a style="font-weight: bold;background-color:black;border-color:black;color:white" href="<?php echo base_url();?>forms/income/income_report" class='btn btn-primary login-submit-cs'>Cancel</a>

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
      