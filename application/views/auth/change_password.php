<h1><?php echo lang('change_password_heading');?></h1>

<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<?php echo form_open("auth/change_password", array('class' => 'form-horizontal'));?>

      <div class="form-group">
            <?php echo lang('change_password_old_password_label', 'old_password');?>
          <div class="col-sm-10"><?php echo form_input($old_password);?></div>
      </div>

      <div class="form-group">
            <label class="col-sm-2 control-label" for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> 
            <div class="col-sm-10"><?php echo form_input($new_password);?></div>
      </div>

      <div class="form-group">
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?>
            <div class="col-sm-10"><?php echo form_input($new_password_confirm);?></div>
      </div>
    
    
     <?php echo form_input($user_id);?>

      
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit('submit', lang('change_password_submit_btn'));?></div>
      </div>

<?php echo form_close();?>
