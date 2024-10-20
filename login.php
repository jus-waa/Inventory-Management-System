<?php
    session_start();

    //Database connection
    include('connection.php');
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Preparing a statement to avoid SQL injection
    $query = 'SELECT * FROM user WHERE user.username = :u AND user.password = :p';
    $stmt = $conn->prepare($query);
    $stmt->execute(array(":u" => $username, "p" => $password));

    //Check if user exists
    if($stmt->rowCount() > 0) {
        // capture user data
        $_SESSION['user'] = $stmt->fetch();
        $_SESSION['login_message'] = 'User exists.';

        // redirect to file
        header('location: dashboard.php');
    } else {
        // return to index page
        // display message  
        $_SESSION['login_message'] = 'User does not exists!';
        header('location: loginpage.php');
    }
    
?>