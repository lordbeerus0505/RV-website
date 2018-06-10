<?php
$server="localhost";
$uname="Aishwarya"
$password="welcome";

$contact=mysql_connect($server,$uname,$password) or die (mysql_error());
mysql_select_db("contact",$contact);

$sql="CREATE TABLE user
{
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
Username varchar(20), //datatype(length)
Email varchar(50),
Phone integer(15),
Message varchar(100)
}";

mysql_query($sql,$contact);

?>