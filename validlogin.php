
<?php

session_start(); 
$_SESSION["user"] =$_POST['uname'];
/*
$hostname="localhost";
$user="account";
$password="qwerty20";
$db =  mysql_connect($hostname, $user, $password) or die("Unable to connect");
$database="dbtest"; 
mysql_select_db($database,$db);
*/
 mysql_connect("localhost", "root", "");

  mysql_select_db("diamond");

    $query="Select * from vregister where username='$_POST[uname]' and password='$_POST[pwd]'";
    $result=mysql_query($query);
  $count = mysql_num_rows($result);
mysql_close();
if($count==1)
{
	header("Location: home.php");
}
else
{

echo "<script type='text/javascript'>window.location.href='flogin.php';alert('Login Unsuccessfull');</script>";
} 


?>

