<?php
session_start();
session_unset();
header('location:login.php');


?>
<html>
    <body>
Check In Date : <input type="date" name="date">
</body>
</html>