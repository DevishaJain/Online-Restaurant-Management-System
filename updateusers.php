<?php
include("db1.php");
if(isset($_POST["submit"]))
{
    $id=$_POST["id"];
    $a=$_POST["name"];
    $b=$_POST["email"];
    $c=$_POST["password"];
    $d=$_POST["number"];
   
$update=mysql_query("UPDATE registration set name='$a',email='$b',password='$c',number='$d' WHERE id='$id'");

if($update)
{
    header("location:users.php");
    }
}

?>
