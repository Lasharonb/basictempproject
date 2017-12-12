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
 
      
    </select>
  </div>
  <div class="form-group">
    <label for="roleSelect">Role</label>
    <select class="form-control" id="roleSelect" name="roleSelect" required> 
         <option value="">Select Role</option>
    </select>
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comment</label>
    <textarea class="form-control" id="comment" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
