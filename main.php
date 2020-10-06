<?php
include("connection.php");
error_reporting(0);
session_start();
$user=$_SESSION["username"];
if($user)
{   
}
else{header('location:login.php');}

$query="select * from register where email='$user' ";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    ?>
    <h3 align="center">
<?php echo"Welcome ".$result['name']." "; ?>
<img src="img_avatar2.png" height="20" class="avatar" width="35"/>
</h3>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 
  width: 100%;
}

#customers td, #customers th {
  border: 2px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
body {
  background-image: url("hback6.jpg");
}
   img.avatar {
 
  border-radius: 50%;
}
    </style>
 
 



<html>
    <head>
        <script>
         
           function checkdate()
           {
               var d1=new Date(document.getElementById('d1').value);
               var d2=new Date(document.getElementById('d2').value);
               var res;
               if(d1>d2)
               {
                   alert("Please Enter Proper date ,checkin date is greater than checkout...");
               }   
           }
           

        </script>

          </head>
<body>
    <center>
<br>
<form  action="" method="POST">
    
<table id="customers" style="width:30%" border="10">
  <th  colspan="4"><b><h2 align="center">Reserve Your Room Now</h2></b></th>
  <tr>
    <td align="center">Room By Name :</td>
    <td align="center"><input type="text"  size=50 value="<?php echo"  ".$result['name']; ?>" name="name"></td> 
  </tr>
 <th >Standard 2,000rs/Day</th>
 <th >Deluxe 3,500rs/Day</th>
 <th >Luxury 5,000rs/Day</th>
 <tr>
     <td><img src="standard.jpg" height="200" width="300"></td>
     <td><img src="luxury.jpg" height="200" width="400"></td>
     <td><img src="delux.jpg" height="200" width="300"></td>
   </tr>
   <tr>
     <td><p>The Standard Room comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair.</p></td>
     <td><p>Comfortable with Thai interior design, Deluxe rooms at Loei Palace Hotel features a TV and free WiFi.</p></td>
     <td><p></p>The hotel has 9 well-maintained and comfortable rooms, spread across 3 floors. Each room is equipped with conveniences like air-conditioner, fan, LCD television.</td>
   </tr>
   
  <tr>
    <td align="center">Room Type :</td>
    <td align="center"><select  name="type" width="30" required>
  <option >Standard</option>
  <option >Deluxe</option>
  <option >Luxury</option>

</select></td> 
  </tr>
  <tr>
    <td align="center">Check In Date :</td>
    <td align="center"><input type="date" id="d1" name="date1" required></td> 
  </tr>
  <tr>
    <td align="center">Check Out Date :</td>
    <td align="center"><input type="date" id="d2" name="date2" required></td> 
  </tr>
  <tr>
    <td align="center">ID Proof : </td>
    <td align="center"><input type="text" size=50 value="" name="id" required></td> 
  </tr>
 

  <tr>
      <td align="center"><button type="submit" onclick="checkdate(),submitfun()" name="submit">Submit</button></td>
      <td align="center"><button type="reset"  name="submit">Reset</button></td>
      <td align="center"><button><a href="logout.php">Logout</a></button></td>
  </tr>
  
</table>

</form>
        </center>
</body>
</html>
<?php
echo"working.11..";
if( $_POST['submit']  )
{echo"working.2..";
$un=$_POST['name'];
$type=$_POST['type'];
$id=$_POST['id'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
echo"working.3..";
echo$name.$type.$id.$date1.$date2;

     if($un!="" && $type!="" && $id!="" && $date1!="" && $date2!="")
     {  
      echo"working.4..";
        $query="Insert into customer values('$un','$type','$date1','$date2','$id')";
        $data=mysqli_query($con,$query);
        if($data)
        {
           # header('location:login.php');
           echo"Booking Request in process...";
        }


     }else{echo"All fields are Required...";}
}
echo"working.l..";
?>