<?php
    require('../core/functions.php');
    checkIfUserIsAuthenticated();
    $title='Position';
    $breadcrumbs = [
        ['link' => '../positions/index.php', 'text' => 'Position', 'active' => ''],
        ['link' => '#', 'text' => 'Create Position', 'active' => 'active']
    ];
    require('create.view.php');
?>
