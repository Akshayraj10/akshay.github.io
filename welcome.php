<?php
include("connection.php");
error_reporting(0);
?>
<style>
body {
  background-image: url("hback4.jpg");
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  
  width: 100%;
}

#customers td, #customers th {
  border: 5px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ffdfbf ;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<html>
<body> 
<center>
<h1 style="text-align: center"> REGISTRATION FORM </h1>          
 
<form name="RegForm" action="" onsubmit="" method="POST">  
      
<table id="customers" style="width:30%" border="10">
  <th colspan="4"><b><h2>Enter your Detail </h2></b></th>
  <tr>
    <td align="center">Name: :</td>
    <td align="center"> <input type="text"  size=65 name="name" required></td> 
  </tr>
  <tr>
    <td align="center">E-mail Address:</td>
    <td align="center"> <input type="text" size=65 name="email" required></td> 
  </tr>
  <tr>
    <td align="center">Password :</td>
    <td align="center"> <input type="text" size=65 name="password" required></td> 
  </tr>
  <tr>
    <td align="center">Telephone: </td>
    <td align="center"> <input type="text" size=65 name="phone" required></td> 
  </tr>
 

  <tr>
      <td align="center"> </td>
      <td align="center"><input type="submit"  style="margin:5px  value="submit" name="submit"><input type="reset"  value="reset" name="Reset"><button><a href="login.php">Login</a></button></td>
     
  </tr>
  
</table> 
</form> 

<?php
if( $_POST['submit']  )
{
$un=$_POST['name'];
$pass=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];

     if($un!="" && $pass!="" && $phone!="" && $email!="")
     {  

        $query="Insert into register values('$un','$email','$phone','$pass')";
        $data=mysqli_query($con,$query);
        if($data)
        {
            header('location:login.php');
        }


     }else{echo"All fields are Required...";}
}

?>
</center>
</body>
</html>

