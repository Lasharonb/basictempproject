<?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/controllers/db_connect.php'); 
?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<form id="signupForm" class="cmxform" method="POST" action="../controllers/User_signup.php">
    
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" name="inputEmail" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Password" required minlength="7">
  </div>
  
  <div class="form-group">
    <label for="inputFirstName">First Name</label>
    <input type="text" name="inputFirstName" class="form-control" id="inputFirstName" placeholder="First Name" required>
  </div>
  
  <div class="form-group">
    <label for="inputLastName">Last Name</label>
    <input type="text" name="inputLastName" class="form-control" id="inputLastName" placeholder="Last Name" required>
  </div>
  <div class="form-group">
      
    <label for="citySelect">City</label>
    <select class="form-control" id="citySelect" name="citySelect" required>
        <option value="">Select City</option>
       
<?php
    //GET THE LIST OF CITIES;
    $query = "SELECT * FROM City;"; 
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row["id"]."'>".$row["city_name"]."</option>";
        }
        
    } else {
        echo "<option>Please reload the form</option>";
    }

?>
      
    </select>
  </div>
  <div class="form-group">
    <label for="roleSelect">Role</label>
    <select class="form-control" id="roleSelect" name="roleSelect" required> 
         <option value="">Select Role</option>
       

     <?php
    //GET THE LIST OF CITIES;
    $query = "SELECT * FROM Role;";

    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row["id"]."'>".$row["role_name"]."</option>";
        }
        
    } else {
        echo "0 results";
    }

?> 
    </select>
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comment</label>
    <textarea class="form-control" id="comment" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>

<?php
    $conn->close();
?>