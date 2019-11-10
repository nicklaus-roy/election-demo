<?php
    require('../core/functions.php');
    checkIfUserIsAuthenticated();
    //connect to the database
    $conn = connectToDB();
    //get all the positions
    $statement = $conn->prepare('SELECT * FROM positions');
    $statement->execute();
    $positions = $statement->fetchAll(PDO::FETCH_OBJ);
    //display in table
    $breadcrumbs = [
        ['link' => '../positions/index.php', 'text' => 'Position', 'active' => 'active']
    ];
    require('index.view.php');
?>
