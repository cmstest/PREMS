<p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth'); ?>"><?php echo lang('index_back_button'); ?></a></p>

<h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <p><?php echo anchor('auth/create_user', lang('index_create_user_link'), array('class' => 'btn btn-default')); ?></p>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th><?php echo lang('index_username_th');?></th>
            <th><?php echo lang('index_email_th');?></th>
            <th><?php echo lang('index_apikey_th');?></th>
            <th><?php echo lang('index_groups_th');?></th>
            <th><?php echo lang('index_status_th');?></th>
            <th><?php echo lang('index_action_th');?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user):?>
            <tr>
                <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->apikey,ENT_QUOTES,'UTF-8');?></td>
                <td>
                    <?php foreach ($user->groups as $group):?>
                        <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                    <?php endforeach?>
                </td>
                <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'), array('class' => 'btn btn-success')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'), array('class' => 'btn btn-danger'));?></td>
                <td><?php echo anchor("auth/edit_user/".$user->id, lang('edit_user_heading'), array('class' => 'btn btn-primary')) ;?>&nbsp;<?php echo anchor("auth/recreate_key/".$user->id, lang('edit_user_key'), array('class' => 'btn btn-warning')) ;?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'), array('class' => 'btn btn-default')); ?></p>
