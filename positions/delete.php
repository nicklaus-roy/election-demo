<?php
    require('../core/functions.php');
    checkIfUserIsAuthenticated();
    $conn = connectToDB();
    $statement = $conn->prepare("DELETE FROM positions WHERE id  = :id");
    $statement->execute([
        'id' => trim($_GET['id'])
    ]);
    header('Location: ../positions/index.php');
    exit();
?>
