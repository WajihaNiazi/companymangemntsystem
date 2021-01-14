<div class="error-pagewrap">
	<div class="error-page-int">
		<div class="text-center m-b-md custom-login">
            <h3>Reset Password</h3>
		</div>
		<div class="content-error">
			<div class="hpanel">
                <div class="panel-body">
                    <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'reset_form');?>
                    <?php echo form_open('forms/users/updatepass',$attributes);?>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                                <?php
                                    $data = array(
                                        'class' => 'form-control',
                                        'name' =>'password',
                                        'id'=>'password',
                                        'value'=>set_value('password'),
                                        'type'=>'password',
                                        'placeholder'=>'**********'
                                    );
                                ?>
                                <?php echo form_input($data);?>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="ConfirmPassword">ConfirmPassword</label>
                                <?php
                                    $data = array(
                                        'class' => 'form-control',
                                        'name' =>'ConfirmPassword',
                                        'id'=>'ConfirmPassword',
                                        'value'=>set_value('ConfirmPassword'),
                                        'type'=>'password',
                                        'placeholder'=>'Confirm the password'
                                    );
                                ?>
                                <?php echo form_input($data);?>
                        </div>
                        <?php
                            $data = array(
                                'class' => 'btn btn-success btn-block loginbtn',
                                'name' =>'submit',
                                'value'=>'Reset',
                                'style'=>'background-color:black;border-color:black;',
                                'color'=>'white'
                            );
                        ?>
                        <?php echo form_submit($data);?>                                       
                    <?php echo form_close();?>      
                </div>
            </div>
		</div>
	</div>   
</div>
