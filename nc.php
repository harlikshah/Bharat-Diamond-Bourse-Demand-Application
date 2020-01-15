	 

   <?php

  mysql_connect("localhost", "root", "");

  mysql_select_db("diamond");
/*
$carat=$_POST["carat"];
$colorscale=$_POST["color"];
$clarityscale=$_POST["clarity"];
*/
$strSQL = "INSERT INTO newsfeed(id,shape,cweight,colorscale,clarityscale,Certify,fl,usname,cont,bs) VALUES('','" . $_POST["shape"] . "','" . $_POST["carat"] . "','" . $_POST["color"] . "','" . $_POST["clarity"] . "','".$_POST["certificate"]."','".$_POST["fluorescence"]."','" . $_POST["newuser"] . "','" . $_POST["newcont"] . "','" . $_POST["buysell"] . "')"; 
mysql_query($strSQL);

include_once 'Newsfeed.php';


mysql_close();
?>