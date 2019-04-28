<?php
include("db1.php");
if(isset($_POST["submit"]))
{
    
    $a=$_POST["name"];
    $b=$_POST["email"];
    $c=$_POST["password"];
    $d=$_POST["number"];
    
$update=mysql_query("UPDATE admin set name='$a',email='$b',password='$c',number='$d' ");

if($update)
{
    header("location:showdetails.php");
    }
}

?>
