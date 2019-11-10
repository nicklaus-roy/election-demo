<?php
    require('../core/functions.php');
    checkIfUserIsAuthenticated();
    //connect to the database
    $conn = connectToDB();
    //check if form is submitted
    if(isset($_POST['submit'])) {
        $statement = $conn->prepare('UPDATE positions SET name = :name WHERE id = :id');
        $statement->execute([
            'name' => trim($_POST['name']),
            'id' => trim($_POST['id'])
        ]);
        header("Location: ../positions/index.php");
    }
?>
