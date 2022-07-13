<?php
$variable=$_GET['id'];
$connection=mysqli_connect("localhost","root","","php _and_mysql");
$command="DELETE FROM table1 WHERE id='$variable'";
$main=mysqli_query($connection,$command);
header("Location: http://localhost/CRUD_HTML/crud_html/index.php");
mysqli_close($connnection);
?>