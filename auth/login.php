<?php
    //connect to the database
    session_start();
    require('../core/functions.php');
    $conn = connectToDB();
    //check first if the form was submitted
    if(isset($_POST['submit'])) {
        //retrieve the user inputs
        //get the user account from users
        $statement = $conn->prepare('SELECT * FROM users WHERE username = :username');
        $statement->execute([
            'username' => $_POST['username']
        ]);
        $user = $statement->fetch(PDO::FETCH_OBJ);
        //check for the password
        if($user->password == $_POST['password']) {
            unset($user->password);
            $_SESSION['user'] = $user;
            header('Location: ../admin/dashboard.php');
            die();
        }else {
            header('Location: ../index.php');
            die();
        }
        //if the password is ok then redirect to the dashboard        
    }
?>
