
    <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth/user'); ?>"><?php echo lang('index_back_button'); ?></a></p>
    <h1><?php echo lang('edit_user_heading');?></h1>
    <p><?php echo lang('edit_user_subheading');?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <?php echo form_open(uri_string(), array('class' => 'form-horizontal'));?>

    <div class="form-group">
        <?php echo form_label(lang('edit_user_fname_label', 'first_name'), 'first_name', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($first_name, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('edit_user_lname_label', 'last_name'), 'last_name', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($last_name, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('edit_user_company_label', 'company'), 'company', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($company, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('edit_user_phone_label', 'phone'), 'phone', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($phone, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('edit_user_password_label', 'password'), 'password', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($password, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('edit_user_password_confirm_label', 'password_confirm'), 'password_confirm', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($password_confirm, NULL, 'class="form-control"');?></div>
    </div>

    <?php if ($this->ion_auth->is_admin()): ?>

    <h3><?php echo lang('edit_user_groups_heading');?></h3>
    <?php foreach ($groups as $group):?>
        <div class="checkbox">
            <?php
            $gID=$group['id'];
            $checked = null;
            $item = null;
            foreach($currentGroups as $grp) {
                if ($gID == $grp->id) {
                    $checked= ' checked="checked"';
                    break;
                }
            }
            ?><label>
                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
        </div>
    <?php endforeach?>

    <?php endif ?>

    <?php echo form_hidden('id', $user->id);?>
    <?php echo form_hidden($csrf); ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('name' => 'submit', 'value' => lang('edit_user_submit_btn'), 'class' => 'btn btn-primary btn-large'));?></div>
    </div>

    <?php echo form_close();?>
