<?php 
include('db1.php');
$a=$_GET["id"];
$query=mysql_query("DELETE FROM registration WHERE id='$a'");
if(query)
{
    header("location:users.php");
}
?>