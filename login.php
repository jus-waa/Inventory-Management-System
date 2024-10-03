<?php
    session_start();
    // Include connection file
    include('connection.php');
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Select row / check if user is inside the database 
    $query = 'SELECT * FROM user WHERE user.username="' . $username . '" AND user.password="' . $password . '"';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        // redirect to file
        // capture user data
        $_SESSION['user'] = $stmt->fetch();
        $_SESSION['login_message'] = 'User exists.';
        header('location: dashboard.php');
    } else {
        // return to index page
        // display message  
        $_SESSION['login_message'] = 'User does not exists!';
        header('location: loginpage.php');
    }
    
?>