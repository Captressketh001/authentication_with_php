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
        $email_add = $decode["email"];
        // check if the email of the user correspond with the one on the file
        if($email == $email_add){
                // set the new password into the json file
                $decode["password"] = $password;
                $data = json_encode($decode);
                // save the data in the file
                file_put_contents("files/form.json", $data);
                echo '<p>You have succesfully reset your password, you can <a href="login.php">login </a>with the new one here here, you can <a href="logout.php">logout </a></p>';
            }
    }
    else{
        echo "file not found"; 
    }
}
?>