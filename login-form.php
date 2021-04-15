<?php
// start the session
session_start();
if(isset($_POST['submit'])){
    // collect user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if the database file exist
    if(file_exists("files/form.json")){
        // get the file from its folder
        $data = file_get_contents("files/form.json");

        // decode it with json_decode
        $decode = json_decode($data, true);

        $email_add=$decode["email"];
        $pass=$decode["password"];
        $user = $decode["first_name"];

        // validating user input
        if($email == $email_add && $password == $pass){
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $user;

            echo 'Welcome ' . $_SESSION['username'] . '!'. '<p>Login successful! You can <a href="reset.php">reset </a>your password here or <a href="logout.php">logout</a>.</p>';
        }
        if($email !== $email_add && $password !== $pass){
            echo '<p> Incorrect Email and password, try logging in again <a href="login.php">login </a></p>';
        }
        if($email !== $email_add || $password !== $pass){
            echo '<p> Incorrect Email and password, try logging in again <a href="login.php">login </a></p>';
        }
    }
    else{
        echo "file not found"; 
    }
}
   

?>