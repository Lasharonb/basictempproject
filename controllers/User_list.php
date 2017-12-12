<?php
    require_once("db_connect.php");
    session_start();
    
    if( isset($_GET["current_user"]) && $_GET["current_user"] && isset($_SESSION["weird_session_name"]["username"]) ){
        
        $singleUserQuery = "SELECT username, first_name, last_name, Role.name as rolename, City.name as cityname ";
        $singleUserQuery .= "FROM User, Role, City ";
        $singleUserQuery.= "WHERE User.role_id = Role.id AND User.city_id = City.id AND User.username = '".$_SESSION["weird_session_name"]["username"]."';";
        
        $result = $conn->query($singleUserQuery);
        
        if( $result->num_rows > 0){
            $currentUserRow = $result->fetch_assoc();
            
            $data = [
                "code" => 200, 
                "message" => "success",
                "data" => $currentUserRow
                ];
        }else{
            $data = [
                "code" => 800, 
                "message" => "error",
                "data" => "No results"
                ];
        }
        //echo $singleUserQuery;
    }else{
        //ALL USERS
        $anotherQuery = "SELECT username, first_name, last_name, Role.name as rolename, City.name as cityname FROM User, Role, City WHERE User.role_id = Role.id AND User.city_id = City.id;";
        
        $result = $conn->query($anotherQuery);
        
        if( $result->num_rows > 0 ){
    
            $jsonArray = [];
            while($row = $result->fetch_assoc()){
                array_push($jsonArray, $row);
            }
            
            $data = [
                "code" => 200, 
                "message" => "success",
                "data" => $jsonArray
                ];
            
        }else{
            $data = [
                "code" => 800, 
                "message" => "error",
                "data" => "No results"
                ];
        }
    
    }
    
    $json_response = json_encode($data);
    $conn->close();
    echo $json_response;
    
?>