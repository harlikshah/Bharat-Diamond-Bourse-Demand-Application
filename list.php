<?php
session_start();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>

  <title>BDB Demand</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="files.css">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>



<div style="position:relative; left:0; top:0;">
  
  <img src="BDB_BLUE.jpg" style="position:absolute; width:100%; height:100%; top:0; left:0; right:0;"/>
  <img src="background1.png" style="position:relative; width:85%; height:100%; top:0; left:15%;"/>
   <img src="logo_bdb.png" style="position:absolute; width:10%; height:23%; top:35%; left:12%;"/>
  <nav style="color:black;font-weight:105;font-size:125%;position:absolute;top:57%;left:13%;width:10%"><h3 style="font-family:sans-serif">BHARAT DIAMOND BOURSE</h3></nav>
  <nav style="color:black;font-size:350%;position:absolute; top:30%;width:40%; left:34%;">LIST OF COMPANIES</nav>
  <nav style="color:black;font-size:350%;position:absolute; top:40%;width:40%; left:38%;">AND BROKERS</nav>
  
</div>

<div id="header">
    <div id="header-content">

<header>
  <section>
  <div>
    <div class="container">
    
      <div class="collapse navbar-collapse pull-leftXX">
        <ul class="nav navbar-nav">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
          <li><a href="home.php">Home</a></li>
          <li><a href="Newsfeed.php">NewsFeed</a></li>
          <li><a href="bs.php">Buy/Sell</a></li>
          <li class="active"><a href="list.php">List of Companies/Brokers</a></li>
          <li><a href="about.php">Industry</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
        </ul>

           <?php
      if(isset($_SESSION['user'])!="")
      {
        
         mysql_connect("localhost", "root", "");

        mysql_select_db("diamond");

        $query="Select username from vregister where username='$_SESSION[user]'";
        $retrive=mysql_query($query);
       
        while($row = mysql_fetch_array($retrive))
        {
          ?> <strong> <?php
          echo "<span>Welcome ".$row['username'].","  ," </span>";
          ?> </strong> <?php
        }
         echo "<a href='logout.php?logout'><span>LogOut</span></a>";
        mysql_close();
      }
      else
      {
        echo "<li><a href='registration.php'><span>Register</span></a></li>";            
      }  
    ?>

        <img src="logopro.png" style="position:relative; width:8.5%; height:100%; top:-20px; left:10%;"/>
        <img src="logotext.png" style="position:relative; width:8.5%; height:100%; top:10px; left:1.15%;"/>
      </div>
     
      
    </div>
  </div>
  </section>

</header>

</div>
  </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="col-xs-6" style="margin:30px;">
<h4><b>Search By Name</b></h4>
<form  method="post" action="lists.php?go"  id="searchform"> 
        <input  type="text" name="name"> 
        <input  type="submit" name="submit" value="Search"> 
     </form> 
  </div>




<?php 
    if(isset($_POST['submit']))
  { 
    if(isset($_GET['go']))
  { 
    if(preg_match("/^[  a-zA-Z]+/", $_POST['name']))
  { 
    $name=$_POST['name']; 
    //connect  to the database 
    mysql_connect("localhost", "root", "");

      mysql_select_db("diamond");
          //-query  the database table 
    $sql="SELECT  * FROM vregister WHERE username LIKE '%" . $name .  "%'"; 
    //-run  the query against the mysql query function 
    $result=mysql_query($sql); 
    //-create  while loop and loop through result set 
    while($row=mysql_fetch_array($result))
    { 

      ?>

    
    <div class="container" style="width:0%; left:0px " >

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

</style>

   <table class="table" style="vertical-align:top";>
   <caption><?php echo $row['ncompany'];echo "    Info";?></caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Comapany/Broker</th>
        <th>NameOfCompany</th>
        
        <th>Name</th>
        <th>Email</th>
        <th>ConatactNO</th>  
      </tr>
    </thead>
    <tbody>
      <tr class="success" >
      

        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['sel'];?></td>
        <td><?php echo $row['ncompany'];?></td>
        
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['email'];?></td>
       <td><?php echo $row['contact'];?></td>
      </tr>
      
    </tbody>
  </table>
</div>


    <?php
    }
  
  // Close the database connection
  
  mysql_close();
  ?>

      <?php
    } 
     
    else{ 
    echo  "<p>Please enter a search query</p>"; 
    } 
    } 
    } 
  ?> 



 
    <div class="row">
      <div class="col-md-8">
        <div class="text-center">
          

   <?php

  mysql_connect("localhost", "root", "");

  mysql_select_db("diamond");



  $strSQL = "SELECT * FROM vregister order by `id` desc";
 
  $rs = mysql_query($strSQL);

  while($row = mysql_fetch_array($rs)) {
    ?>

    
    <div class="container" style="width:0%; left:0px " >

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

</style>

   <table class="table" style="vertical-align:top">
   <caption><?php echo $row['ncompany'];echo "    Info";?></caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Company/Broker</th>
        <th>NameOfCompany</th>
        
        <th>Name</th>
        <th>Email</th>
        <th>ConatactNO</th>  
      </tr>
    </thead>
    <tbody>
      <tr class="success" >
      

        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['sel'];?></td>
        <td><?php echo $row['ncompany'];?></td>
        
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['email'];?></td>
       <td><?php echo $row['contact'];?></td>
      </tr>
      
    </tbody>
  </table>
</div>


    <?php
    }
  
  // Close the database connection
  
  mysql_close();
  ?>





        </div>
      </div>
    </div>
 


    <div style="height:150px" align="center">
        <div id="softlinks" width="189px">          
        <a href="https://www.facebook.com/harlikshah" target="_blank"><img src="fblogo.gif" width="40px" height="40px" /></a>
          <a href="https://twitter.com/sanat_1902" target="_blank"><img id="twitter" src="twitterlogo.gif" width="40px" height="40px"/></a> 
      </div>
    </div>
  


<div id="footer">&nbsp;&nbsp;&nbsp;&nbsp;
    <center>Copyright &copy; 2015. All Rights Reserved<br>
    Developed by Harlik Shah & Sanat Shah</center>
</div>

</body>

</html>

  