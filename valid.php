 <html>
 <head>
 </head>
 <body>


<?php

mysql_connect("localhost", "root", "");
mysql_select_db("diamond");

$strSQL = "INSERT INTO register(id,fname,lname,email,contact,username,password) VALUES('','" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["email"] . "','" . $_POST["contact"] . "','" . $_POST["username"] . "','" . $_POST["password"] . "')"; 
mysql_query($strSQL);

mysql_close();
	?>

		<h1>The database is updated!</h1>

</body>
</html>