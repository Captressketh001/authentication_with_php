<?php
if(isset($_POST['submit'])){
    // collect user input
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // store the user input into an array
    $array_data = [
        'first_name' => $firstname,
        'last_name' => $lastname,
        'email' => $email,
        'password' => $password
    ];
    
    // save the array into a json file
    file_put_contents('files/'. 'form'. ".json" , json_encode($array_data));
    
    echo ('<p>You are registered, kindly <a href="login.php">login</a> here</p>');
}
?>