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
  <nav style="color:black;font-size:460%;position:absolute; top:30%; left:35%;">CONTACT US</nav>
  
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
          <li class="active"><a href="contact.php">Contact us</a></li>
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
<style>
.team{
  text-align: center;
  margin-top: 46px;
}
.col-md-6{
  width: 50%;
  left: 100px;
}
.img-circle
{
  border-radius: :50%;
  z-index: -1;

}
.img-responsive{
  display: block;
  z-index: -1;
  max-width: 100%;
}
.h4 {
    margin-top: 24px;
    font-size: 20px;
    color: black;
    
}
.cont .fa {
    color: #2f2f2f;
    padding-right: 14px;
}
.fa {
    display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    }
    .fa-phone:before {
    content: "\1f4de";
}
.fa-envelope:before {
    content: "\2709";

}
</style>
<br><br><br><br>
  <div class="container">
    <div class="row team">
      <div class="col-md-6">
        <img class="img-responsive img-circle" src="Sanat.jpg" style="height:300px;width:300px"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <h4 style="position:absolute;left:110px;color:#6699CC;font-family:sans-serif;font-size:20px">Sanat Shah</h4> 
        <h4 style="position:absolute;top:345px;left:128px;color:#6699CC;font-family:sans-serif;font-size:13px">Co-Founder</h4> 
      </div>
        
      <div class="col-md-6">
        <img class="img-responsive img-circle" src="harlik.jpg" style="height:300px;width:300px"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <h4 style="position:absolute;left:110px;color:#6699CC;font-family:sans-serif;font-size:20px">Harlik Shah</h4> 
        <h4 style="position:absolute;top:345px;left:128px;color:#6699CC;font-family:sans-serif;font-size:13px">Co-Founder</h4> 
      </div>
    </div>
  </div>
<br>
<div class="container">
    <div class="row team">
      <div class="col-xs-12 cont">
        <ua id="contact us">
          <h style="font-size:130%;color:grey">Want to send us a note? We don't have a swanky office just yet - get in touch and we can figure it out.</h>
          <br>
          <br>
          <l style="color:grey">
            <i class="fa fa-phone">
            </i>
            +91-9819207413
          </l>
          <br>
          <l style="color:grey">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-envelope" style="font-size:180%;height:10px">
            </i>
            harlikshah7@gmail.com
          </l>
          <br>
          
          <br>
        </ua>
      </div>
    </div>
  </div>
</div>


  <table style="margin:20px auto">
   <tr>
    <td>
    <div style="height:104px">
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
