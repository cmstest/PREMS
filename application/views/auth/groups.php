<p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth'); ?>"><?php echo lang('index_back_button'); ?></a></p>

<h1><?php echo lang('index_group_heading');?></h1>
<p><?php echo lang('index_group_subheading');?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <p><?php echo anchor('auth/create_group', lang('index_create_group_link'), array('class' => 'btn btn-default')); ?></p>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th><?php echo lang('index_group_th');?></th>
            <th><?php echo lang('index_description_th');?></th>
            <th><?php echo lang('index_action_th');?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($groups as $group):?>
            <tr>
                <td><?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo anchor("auth/edit_group/".$group->id, lang('edit_group_heading'), array('class' => 'btn btn-primary')) ;?>&nbsp;&nbsp;<?php echo anchor("auth/delete_group/".$group->id, lang('delete_group_heading'), array('class' => 'btn btn-danger')) ;?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>

<p><?php echo anchor('auth/create_group', lang('index_create_group_link'), array('class' => 'btn btn-default')); ?></p>
