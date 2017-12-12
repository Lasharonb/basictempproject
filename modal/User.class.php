<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/controllers/db_connect.php'); 

/**
 * User object
 */
class User
{
   
   private $id;
   private $username;
   public $first_name;
   public $last_name;
   private $city_id;
   private $role_id;
   private $comment;
    
    /**
     * Instanciate an User.
     */
    public function __construct($id, $username, $first_name, $last_name, $city_id, $role_id)
    {
       $this->id=$id;
       $this->username->$username;
       $this->firstname->$first_name;
       $this->lastname->$last_name;
       $this->city->$city_id;
       $this->role->$role_id;
  
    }
    
    function getId(){
        return $this-> id;}
    
    function getUsername(){
        return $this-> username;
        
            }
        
     }



?>