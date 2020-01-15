 <?php

mysql_connect("localhost", "root", "");
mysql_select_db("diamond");
/*
$carat=$_POST["carat"];
$colorscale=$_POST["color"];
$clarityscale=$_POST["clarity"];
*/
/*
$strSQL = "INSERT INTO vregister(id,fname,lname,email,contact,username,password,sel,ncampany) VALUES('','" . $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["ct"] . "','" . $_POST["uname"] . "','" . $_POST["pwd"] . "','" . $_POST["cb"] . "','" . $_POST["company"] . "')"; 
*/
$strSQL = "INSERT INTO vregister(id,fname,lname,email,contact,username,password,sel,ncompany) VALUES('','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["ct"]."','".$_POST["uname"]."','".$_POST["pwd"]."','".$_POST["cb"]."','".$_POST["company"]."')"; 
mysql_query($strSQL);

mysql_close();
  ?>
