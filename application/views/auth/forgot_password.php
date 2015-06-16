
    <h1><?php echo lang('forgot_password_heading');?></h1>
    <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <?php echo form_open("auth/forgot_password", array('class' => 'form-horizontal'));?>

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label>
        <div class="col-sm-3"><?php echo form_input($email, NULL, 'class="form-control"');?></div>

        <?php echo form_submit(array('class' => 'btn btn-primary', 'name' => 'send', 'value' => lang('forgot_password_submit_btn')));?>
    </div>


<?php echo form_close();?>