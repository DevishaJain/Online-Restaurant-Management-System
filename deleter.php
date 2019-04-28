<?php 
include('db1.php');
$a=$_GET["id"];
$query=mysql_query("DELETE FROM receptionist WHERE id='$a'");
if(query)
{
    header("location:lrecep.php");
}
?>