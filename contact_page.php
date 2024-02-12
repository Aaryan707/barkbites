<?php
include("myconnection.php");

$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];

$q=mysql_query("insert into user_info values('$a','$b','$c')");

echo 'Your Information is Saved, Our executive will contact You Soon';
include("index.html");

?>