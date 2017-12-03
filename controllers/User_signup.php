<?php

 
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/controllers/db_connect.php'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["inputEmail"]);
    $password = test_input($_POST["inputPassword"]);
    $firstname = test_input($_POST["inputFirstName"]);
    $lastname = test_input($_POST["inputLastName"]);
    $city_id = test_input($_POST["citySelect"]);
    $role_id = test_input($_POST["roleSelect"]);
    $comment = test_input($_POST["comment"]);
    
    if( empty($email) || empty($password) || empty($firstname) || empty($lastname) || empty($city_id) || empty($role_id)){
        echo "Missing information. please fix and try again";
        die();
    }
    if( strlen($password) < 7 ) {
        echo "Invalid password, please fix and try again";
        die();
    }
  
    $sql = "INSERT INTO User (username, password, first_name, last_name, role_id, city_id, comment) VALUES ('$email', '$password', '$firstname', '$lastname', $role_id, $city_id, '$comment')";

    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
        header('Location: /views/successful_signup.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: /views/error_signup.php');
    }
    
    $conn->close();
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>