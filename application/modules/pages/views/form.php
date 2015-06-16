<p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth/pages'); ?>"><?php echo lang('index_back_button'); ?></a></p>
<h1><?php echo lang('create_page_heading');?></h1>
<p><?php echo lang('create_page_subheading');?></p>

<?php echo validation_errors(); ?>
<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<?php echo form_open("auth/".$add_edit_path, array('class' => 'form-horizontal'));?>

<div class="form-group">
    <?php echo form_label(lang('create_page_title_label', 'title'), 'title', array('class' => 'col-sm-2 control-label'));?>
    <div class="col-sm-3"><?php echo form_input($pagetitle, NULL, 'class="form-control"');?></div>
</div>

<div class="form-group">
    <?php echo form_label(lang('create_page_content_label', 'pagecontent'), 'pagecontent', array('class' => 'col-sm-2 control-label'));?>
    <div class="col-sm-3"><?php echo $this->ckeditor->editor('pagecontent',$pagecontent['value']);?></div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('name' => 'submit', 'value' => lang('create_page_submit'), 'class' => 'btn btn-primary btn-large'));?></div>
</div>

<?php echo form_close();?>

