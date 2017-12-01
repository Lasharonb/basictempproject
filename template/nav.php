
<nav class="navbar navbar-expand-lg navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/?page=home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/?page=portfolio">Portfolio</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- Modal from bootstrap / Button trigger modal -->

        <button id="loginModalButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
          Login
        </button>

      <!-- Modal from bootstrap / Button trigger modal -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <span id="loggedUserEmail">
          <?php
            if( isset($_SESSION["weird_session_name"]) ){
              echo $_SESSION["weird_session_name"];
              }
          ?>
          </span>
        </li>
      </ul>
      <a id="logoutButton" class="btn btn-primary" href="/views/logout.php">
        Logout
      </a>
      <?php
        echo "<script type=\"text/javascript\">$(\"#logoutButton\").show();</script>"
      ?>
      
    </form>
  </div>
</nav>