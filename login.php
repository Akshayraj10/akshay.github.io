<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" name="submit">Login</button>
    <a href="welcome.php"><h2>Register here..</h2></a>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</html>

<?php
session_start();
include("connection.php");
if(isset($_REQUEST["submit"]))
{
    $un=$_REQUEST["name"];
    $pass=$_REQUEST["pass"];
  
    $query="select * from register where email='$un' && pass='$pass'";
    $data=mysqli_query($con,$query);
    $rowcount=mysqli_num_rows($data);
    if($rowcount)
    {
        $_SESSION["username"]=$un;
        header('location:Main.php');
    }
    else{
        echo"Username or Password is incorrect...";
    }
}


?>