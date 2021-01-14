<div class="error-pagewrap">
	<div class="error-page-int">
		<div class="text-center m-b-md custom-login">
            <h3>Reset Password</h3>
		</div>
		<div class="content-error">
			<div class="hpanel">
                <div class="panel-body">
                    <?php $attributes = array('method'=>'post', 'enctype'=>'multipart/form-data','id' => 'reset_form');?>
                    <?php echo form_open('forms/users/resetlink',$attributes);?>
                        <p style="color:black; font-weight:bold; font-size:15px;">Enter your email that you make your account</p>
                        <p style="color:red; font-weight:bold; font-size:15px;"> 
                            <?php if($this->session->flashdata('massage')):?> 
                                <?php echo $this->session->flashdata('massage')?>
                            <?php endif;?>
                        </p>
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                                <?php
                                    $data = array(
                                        'class' => 'form-control',
                                        'name' =>'email',
                                        'id'=>'email',
                                        'value'=>set_value('email'),
                                        'type'=>'email'
                                    );
                                ?>
                                <?php echo form_input($data);?>
                        </div>
                        <?php
                            $data = array(
                                'class' => 'btn btn-success btn-block loginbtn',
                                'name' =>'submit',
                                'value'=>'ResetLink',
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
