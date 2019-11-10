<?php
    require('../core/functions.php');
    //check if user is logged in
    //if not then redirect to login page
    checkIfUserIsAuthenticated();
    $title = 'Dashboard';
    require('dashboard.view.php');
?>
