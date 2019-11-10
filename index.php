<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: ../admin/dashboard.php');
        die();
    }
    require('index.view.php');
?>
