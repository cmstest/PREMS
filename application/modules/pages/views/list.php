<p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth'); ?>"><?php echo lang('index_back_button'); ?></a></p>

<h1><?php echo lang('pages_heading');?></h1>
<p><?php echo lang('pages_subheading');?></p>

<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<p><?php echo anchor('auth/create_page', lang('index_create_page_link'), array('class' => 'btn btn-default')); ?></p>

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th><?php echo lang('index_id_th');?></th>
        <th><?php echo lang('index_pagename_th');?></th>
        <th><?php echo lang('index_pagealias_th');?></th>
        <th><?php echo lang('index_action_th');?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $page):?>
        <tr>
            <td><?php echo htmlspecialchars($page->id,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($page->title,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($page->alias,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo anchor("auth/edit_page/".$page->id, lang('page_list_edit'), array('class' => 'btn btn-primary')) ;?>&nbsp;&nbsp;<?php echo anchor("auth/delete_page/".$page->id, lang('page_list_delete'), array('class' => 'btn btn-danger')) ;?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<p><?php echo anchor('auth/create_page', lang('index_create_page_link'), array('class' => 'btn btn-default')); ?></p>
