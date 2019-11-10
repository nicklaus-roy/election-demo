<?php
    require('../core/functions.php');
    checkIfUserIsAuthenticated();
    $conn = connectToDB();
    $statement = $conn->prepare('SELECT * FROM positions WHERE id = :id');
    $statement->execute([
        'id' => $_GET['id']
    ]);
    $position = $statement->fetch(PDO::FETCH_OBJ);
    $breadcrumbs = [
        ['link' => '../positions/index.php', 'text' => 'Position', 'active' => ''],
        ['link' => '#', 'text' => 'Edit Position', 'active' => 'active']
    ];
    require('edit.view.php');
?>
