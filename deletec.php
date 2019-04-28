<?php 
include('db1.php');
$a=$_GET["id"];
$query=mysql_query("DELETE FROM chef WHERE id='$a'");
if(query)
{
    header("location:chef.php");
}
?>