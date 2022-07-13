<?php

$var1=$_POST["sname"];
$var2=$_POST["saddress"];
$var3=$_POST["class"];
$var4=$_POST["sphone"];
$connection=mysqli_connect("localhost","root","","php _and_mysql");
$command="INSERT INTO table1(name,address,class,phone) VALUES ('{$var1}','{$var2}','{$var3}','{$var4}') ";
$main=mysqli_query($connection,$command);
header("Location: http://localhost/CRUD_HTML/crud_html/index.php");
mysqli_closw($connection);

?>