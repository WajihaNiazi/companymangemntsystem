<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <p class="bg-danger">
              <?php if($this->session->flashdata('delete')):?>
                <?php  echo $this->session->flashdata('delete');?>
              <?php endif;?>
            </p>
            <?php foreach($result as $user):?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="student-inner-std res-mg-b-30">
                        <div class="student-img" >
                            <?php if($user->photo):?>
                                <img src="<?php echo base_url();?>profile_img/<?php echo $user->photo;?>" style="width:300px;height:300px;" alt="" />
                            <?php else:?>
                                <span class="admin-name"></span>
                                <img src="<?php echo base_url();?>profile_img/55168-200.png" style="width:300px;height:300px;" alt="" />
                            <?php endif;?>
                        </div>
                        <div class="student-dtl">
                            <h2><?php echo $user->userName;?></h2>
                            <a class=" btn btn-success pd-setting-ed" aria-hidden="true" data-toggle="tooltip" title="Edit" href="<?php echo base_url();?>forms/users/update/<?php echo $user->idusers;?>"><i class='fa fa-pencil-square-o'></i></a>
                            <a class=" btn btn-danger pd-setting-ed" href="<?php echo base_url();?>forms/users/delete/<?php echo $user->idusers;?>"><i class='fa fa-trash'></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

