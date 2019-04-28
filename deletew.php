<?php 
include('db1.php');
$a=$_GET["id"];
$query=mysql_query("DELETE FROM waiter WHERE id='$a'");
if(query)
{
    header("location:waiters.php");
}
?>