    <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth/user'); ?>"><?php echo lang('index_back_button'); ?></a></p>
    <h1><?php echo lang('create_user_heading');?></h1>
    <p><?php echo lang('create_user_subheading');?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <?php echo form_open("auth/create_user", array('class' => 'form-horizontal'));?>

    <div class="form-group">
        <?php echo form_label(lang('create_user_fname_label', 'first_name'), 'first_name', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($first_name, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('create_user_lname_label', 'last_name'), 'first_name', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($last_name, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('create_user_company_label', 'company'), 'company', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($company, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('create_user_email_label', 'email'), 'email', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($email, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('create_user_phone_label', 'phone'), 'phone', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($phone, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('create_user_password_label', 'password'), 'password', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($password, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('create_user_password_confirm_label', 'password_confirm'), 'password_confirm', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($password_confirm, NULL, 'class="form-control"');?></div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('name' => 'submit', 'value' => lang('create_user_submit_btn'), 'class' => 'btn btn-primary btn-large'));?></div>
    </div>

<?php echo form_close();?>

