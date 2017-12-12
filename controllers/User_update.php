<?php
if(!empty($newUsername)){

    $query = "UPDATE User SET username = '$newUsername' WHERE id = '".$this->id."'";
    
    if($conn->query($query)){
        $this->username = $newUsername;
        return true;
    }else{
        return false;
    }
    
}

?>