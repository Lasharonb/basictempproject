<?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/controllers/db_connect.php'); 
?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputFirstName">First Name</label>
    <input type="text" class="form-control" id="exampleInputFirstName" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputLastName">Last Name</label>
    <input type="text" class="form-control" id="exampleInputLastName" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="citySelect">City</label>
    <select class="form-control" id="citySelect">
        <option value="1">Miami</option>
        <option value="2">Houston</option>
        <option value="3">Chicago</option>
        <option value="4">San Antonio</option>
        <option value="5">Detroit</option>
        <option value="6">Boston</option>
        <option value="7">Washington</option>
        <option value="8">Tampa</option>
        <option value="9">Orlando</option>
        <option value="10">Tuscon</option>
<?php
    //GET THE LIST OF CITIES;
    $query = "SELECT * FROM City;"; 
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option>".$row["name"]."</option>";
        }
        
    } else {
        echo "0 results";
    }

?>
      
    </select>
  </div>
  <div class="form-group">
    <label for="roleSelect">Role</label>
    <select class="form-control" id="roleSelect">
        <option value="1">Subscriber</option>
        <option value="2">Moderator</option>
        <option value="3">Influencer</option>
        <option value="4">Editor</option>
     <?php
    //GET THE LIST OF CITIES;
    $query = "SELECT * FROM Role;";

    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option>".$row["name"]."</option>";
        }
        
    } else {
        echo "0 results";
    }

?> 
    </select>
  </div>
  
  <button type="Submit" class="btn btn-success">Submit</button>
</form>

<?php
    $conn->close();
?>