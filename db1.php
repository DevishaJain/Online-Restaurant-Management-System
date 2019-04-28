<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("projectsubmit");
if(!$con)
{
	echo "connection failed";
}
?>
