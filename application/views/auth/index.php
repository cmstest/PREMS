
<h1>Administrationsbereich</h1>
<p>Hier können Releases eingesehen und Pages sowie Gruppen und Benutzer verwaltet werden.</p>

<p><?php echo anchor('auth/releases', 'Releases', array('class' => 'btn btn-default')); ?>
    &nbsp; <?php echo anchor('auth/pages', 'Pages', array('class' => 'btn btn-default')); ?>
    &nbsp; <?php echo anchor('auth/user', 'Benutzerverwaltung', array('class' => 'btn btn-default')); ?>
    &nbsp; <?php echo anchor('auth/groups', 'Gruppenverwaltung', array('class' => 'btn btn-default')); ?>
    &nbsp; <?php echo anchor('auth/logout', 'Abmelden', array('class' => 'btn btn-danger')); ?></p>
