<?php session_start(); ?>
<style type="text/css">
    #my2Div{
        display: none;
    }
</style>

<div id="myDiv">
    Not logged IN
</div>

<div id="my2Div">
    Logged in
</div>

<button id="interactionLogin" onClick="showDiv()">Login!</button>
<button id="interactionLogout" onClick="hideDiv()">Logout!</button>

<script type="text/javascript" >
    function showDiv(event){
        
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "login.php", true);
        xhttp.send();
        
        document.getElementById("myDiv").style.display = "none";
        document.getElementById("my2Div").style.display = "block";
        
        document.getElementById("interactionLogin").style.display = "none";
        document.getElementById("interactionLogout").style.display = "block";
    }
    
    function hideDiv(event){
        
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "logout.php", true);
        xhttp.send();
        
        document.getElementById("myDiv").style.display = "block";
        document.getElementById("my2Div").style.display = "none";
        
        document.getElementById("interactionLogin").style.display = "block";
        document.getElementById("interactionLogout").style.display = "none";
    }
    
</script>
<script type="text/javascript"> 

<?php 
    if(isset($_SESSION["weird_session_name"])){//LOGGED IN
?>
        document.getElementById("my2Div").style.display = "block"; 
        document.getElementById("myDiv").style.display = "none";
        document.getElementById("interactionLogin").style.display = "none";
        document.getElementById("interactionLogout").style.display = "block";
 <?php }else{ //NOT LOGGED IN ?>
        document.getElementById("myDiv").style.display = "block"; 
        document.getElementById("interactionLogin").style.display = "block";
        document.getElementById("interactionLogout").style.display = "none";

<?php    
    }
?>
</script>