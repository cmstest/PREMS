
    <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth/user'); ?>"><?php echo lang('index_back_button'); ?></a></p>
    <h1><?php echo lang('edit_group_heading');?></h1>
    <p><?php echo lang('edit_group_subheading');?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <?php echo form_open(current_url(), array('class' => 'form-horizontal'));?>

    <div class="form-group">
        <?php echo form_label(lang('edit_group_name_label', 'group_name'), 'group_name', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($group_name, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <?php echo form_label(lang('edit_group_desc_label', 'description'), 'description', array('class' => 'col-sm-2 control-label'));?>
        <div class="col-sm-3"><?php echo form_input($group_description, NULL, 'class="form-control"');?></div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit(array('class' => 'btn btn-primary btn-large', 'name' => 'submit', 'value' => lang('edit_group_submit_btn')));?>
        </div>
    </div>

<?php echo form_close();?>

