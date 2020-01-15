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
  <link rel="stylesheet" type="text/css" href="slideshow.css">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

  
  
  <script src="js/bootstrap.min.js"></script>
 
</head>
<body>



<div style="position:relative; left:0; top:0;">
  
  <img src="BDB_BLUE.jpg" style="position:absolute; width:100%; height:100%; top:0; left:0; right:0;"/>
  <img src="background1.png" style="position:relative; width:85%; height:100%; top:0; left:15%;"/>
   <img src="logo_bdb.png" style="position:absolute; width:10%; height:23%; top:35%; left:12%;"/>
  <nav style="color:black;font-weight:105;font-size:125%;position:absolute;top:57%;left:13%;width:10%"><h3 style="font-family:sans-serif">BHARAT DIAMOND BOURSE</h3></nav>
  <nav style="color:black;font-size:480%;position:absolute; top:30%; left:39%;">GALLERY</nav>
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
          <li><a href="list.php">List of Companies/Brokers</a></li>
          <li><a href="about.php">Industry</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li class="active"><a href="gallery.php">Gallery</a></li>
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


<ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
    <div class="slide">
      <img src="gallery.jpg" />
        </div>
    <div class="nav">
      <label for="img-6" class="prev">&#x2039;</label>
      <label for="img-2" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="gallery6.jpg" />
        </div>
    <div class="nav">
      <label for="img-1" class="prev">&#x2039;</label>
      <label for="img-3" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="gallery9.jpg" />
        </div>
    <div class="nav">
      <label for="img-2" class="prev">&#x2039;</label>
      <label for="img-4" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="gallery3.jpg" />
        </div>
    <div class="nav">
      <label for="img-3" class="prev">&#x2039;</label>
      <label for="img-5" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="gallery5.jpg" />
        </div>
    <div class="nav">
      <label for="img-4" class="prev">&#x2039;</label>
      <label for="img-6" class="next">&#x203a;</label>
    </div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="gallery8.jpg" />
        </div>
    <div class="nav">
      <label for="img-5" class="prev">&#x2039;</label>
      <label for="img-1" class="next">&#x203a;</label>
    </div>
    </li>

    <li class="nav-dots" style="height:0px">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>


<br>
    <br>      


  <table style="margin:20px auto">
   <tr>
    <td>
    <div style="height:150px">
        <div id="softlinks" width="189px">          
        <a href="https://www.facebook.com/harlikshah" target="_blank"><img src="fblogo.gif" width="40px" height="40px" /></a>
          <a href="https://twitter.com/sanat_1902" target="_blank"><img id="twitter" src="twitterlogo.gif" width="40px" height="40px"/></a> 
      </div>
    </div>
    </td>
     </tr>
    </table>



<div id="footer">&nbsp;&nbsp;&nbsp;&nbsp;
    <center>Copyright &copy; 2015. All Rights Reserved<br>
    Developed by Harlik Shah & Sanat Shah</center>
</div>

</body>

</html>
