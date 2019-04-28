<?php 
include('db1.php');
$a=$_GET["id"];
$query=mysql_query("DELETE FROM booktable WHERE id='$a'");
if(query)
{
    header("location:bookt.php");
}
?>