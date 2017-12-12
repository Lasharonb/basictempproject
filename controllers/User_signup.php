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
         $data = [
                "code" => 200, 
                "message" => "success",
                "data" => $jsonArray
                ];//change to code 200
        //header('Location: /?page=/views/successful_signup');
    } else {
        $data = [
                "code" => 800, 
                "message" => "error",
                "data" => "No results"
                ];//change to code 800
        //header('Location: /?page=/views/error_signup');
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