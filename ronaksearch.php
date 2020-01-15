   

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
  
  
  <script src="ajax.js"></script> 

  <script src="js/bootstrap.min.js"></script>

</head>
<style>
  #section1
  {
    background:#ffffff;
    display:block;
    width:200px;
    height:800px;
    text-decoration:none;
    float:left;
  }
  .pages
  {
    text-decoration:none;
    list-style-type:none;
    font:cursive;
    font-size:18px;
    color:black;
  }
  #form
  {
    background:#ffffff;
    color:white;
    float:left;
    width:82%;
  }
   
</style>

<body >



<div style="position:relative; left:0; top:0;">
  
  <img src="BDB_BLUE.jpg" style="position:absolute; width:100%; height:100%; top:0; left:0; right:0;"/>
  <img src="background1.png" style="position:relative; width:85%; height:100%; top:0; left:15%;"/>
   <img src="logo_bdb.png" style="position:absolute; width:10%; height:23%; top:35%; left:12%;"/>
  <nav style="color:black;font-weight:105;font-size:125%;position:absolute;top:57%;left:13%;width:10%"><h3 style="font-family:sans-serif">BHARAT DIAMOND BOURSE</h3></nav>
  <nav style="color:black;font-size:460%;position:absolute; top:30%; left:38%;">NEWSFEED</nav>
</div>

<!--
  <div id="header">
    <div id="header-content">
      <center>
        <nav>&nbsp;&nbsp;&nbsp;
          <a href="#">Home</a>&nbsp;&nbsp;&nbsp;
          <a href="#">About</a>&nbsp;&nbsp;&nbsp;
          <a href="#">Newsfeed</a>

        </nav>
      </center>
      
    </div>
  </div>

-->
<div id="header" style="width:85%; height:15%">
    <div id="header-content">

<header>
  <section>
  <div>
    <div class="container">
    <!--
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href=""><img src="images/logo2.png"></a>
      </div>
-->
      <div class="collapse navbar-collapse pull-leftXX">
        <ul class="nav navbar-nav">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
          <li><a href="Home.html">Home</a></li>
          <li class="active"><a href="Newsfeed.php">NewsFeed</a></li>
          <li><a href="bs.html">Buy/Sell</a></li>
          <li><a href="list.php">List of Companies/Brokers</a></li>
          <li><a href="about.html">Industry</a></li>
          <li><a href="contact.html">Contact us</a></li>
          <li><a href="gallery.html">Gallery</a></li>
        </ul>
        <img src="logopro.png" style="position:relative; width:8.5%; height:100%; top:-20px; left:27%;"/>
        <img src="logotext.png" style="position:relative; width:8.5%; height:100%; top:10px; left:18.2%;"/>
      </div>
      <!--/.nav-collapse -->

    </div>
  </div>
  </section>

</header>

</div>
  </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>

<?php
mysql_connect("localhost", "root", "");

      mysql_select_db("diamond");


echo "<form action='ronaksearch.php?shape=selectshape&fl=selectfl'>
            <table>
            <tr>
            
            <td>Shape : </td>
            <td><select name='selectshape'><option>All</option><option>Round</option><option>Princess</option><option>Cushion</option><option>Emerald</option></td>
            <td>Fluorescence : </td>
            <td><select name='selectfl'><option>All</option><option>Faint</option><option>Medium</option><option>Slight</option><option>Strong</option></td>
            
            <td><input type='submit' value='GO' /></td>
            </tr>
            </table>
            </form>";

     //-query  the database table 
        $sql="SELECT * FROM newsfeed WHERE shape ='$_POST[selectshape]' OR fl = '$_POST[selectfl]'"; 
        //-run  the query against the mysql query function 
        $result=mysql_query($sql); 
        //-create  while loop and loop through result set 
      //  echo "<table border=1>";
    
     while($row=mysql_fetch_array($result))
    { 
            ?>
          <div class="container" style="width:0%; left:0px " >
      <!--
      <style>
      table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
      }

      </style>
      -->
         <table class="table" style="vertical-align:top">
         <caption><?php echo $row['id'];echo "    Posted this";?></caption>
          <thead>
            <tr>
             <th>ID</th>
              <th>Shape</th>
              <th>CaratWeight</th>
              <th>Color</th>
              <th>Clarity</th>
              <th>Certification</th>
              <th>Fluoresence</th>
               <th>Buy/Sell</th>
              
            </tr>
          </thead>
          <tbody>
            <tr class="success" >
            

             
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['shape'];?></td>
              <td><?php echo $row['cweight'];?></td>
              <td><?php echo $row['colorscale'];?></td>
              <td><?php echo $row['clarityscale'];?></td>
              <td><?php echo $row['Certify'];?></td>
              <td><?php echo $row['fl'];?></td>
              <td><?php echo $row['bs'];?></td>
             

            
          </tbody>
        </table>
      </div>

          <?php
       }

     mysql_close();


?>











  <table style="margin:20px auto; width:3500px ; height:900px">
   <tr>
    <td>
    <div style="height:150px">
        <div id="softlinks" width="189px">          
        <a href="https://www.facebook.com/sanat.shah.779" target="_blank"><img src="fblogo.gif" width="40px" height="40px" /></a>
          <a href="https://twitter.com/sanat_1902" target="_blank"><img id="twitter" src="twitterlogo.gif" width="40px" height="40px"/></a> 
      </div>
    </div>
    </td>
     </tr>
    </table>




<div id="footer" style="width:1580px ; height:80px ; left:0px">&nbsp;&nbsp;&nbsp;&nbsp;
    <center>Copyright &copy; 2015. All Rights Reserved<br>
    Developed by Harlik Shah & Sanat Shah</center>
</div>

</body>

</html>
