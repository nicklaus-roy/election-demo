<?php
    require('../core/functions.php');
    checkIfUserIsAuthenticated();
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../index.php');
    exit();
?>
