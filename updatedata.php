<?php
$var0=$_POST['sid'];
$var1=$_POST["sname"];
$var2=$_POST["saddress"];
$var3=$_POST["sclass"];
$var4=$_POST["sphone"];
$connection=mysqli_connect("localhost","root","","php _and_mysql");
$command="UPDATE table1 SET name='{$var1}',address='{$var2}',class='{$var3}',phone='{$var4}' WHERE id={$var0}";
$main=mysqli_query($connection,$command) ;
header("Location: http://localhost/CRUD_HTML/crud_html/index.php");
mysqli_close($connection);

?>