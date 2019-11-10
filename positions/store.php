<?php
    require('../core/functions.php');
    checkIfUserIsAuthenticated();
    //connect to the database
    $conn = connectToDB();
    //check if form is submitted
    if(isset($_POST['submit'])) {
        $statement = $conn->prepare('INSERT INTO positions (name) VALUES (:name)');
        $statement->execute([
            'name' => trim($_POST['name'])
        ]);
        header("Location: ../positions/index.php");
    }
    //create the record
?>
