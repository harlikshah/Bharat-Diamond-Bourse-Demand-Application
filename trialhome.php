
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
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
  <script
src="googlemap.js">
</script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(19.065170, 72.864820),
    zoom:16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  <title>BDB Demand</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="files.css">
  
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
  <nav style="color:black;font-size:470%;position:absolute; top:30%; left:43%;">HOME</nav>
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
<div id="header">
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
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="Newsfeed.php">NewsFeed</a></li>
          <li><a href="bs.html">Buy/Sell</a></li>
          <li><a href="list.php">List of Companies/Brokers</a></li>
          <li><a href="about.html">Industry</a></li>
          <li><a href="contact.html">Contact us</a></li>
          <li><a href="gallery.html">Gallery</a></li>&nbsp;&nbsp;
          
        </ul>
        Hey, <?php echo $_POST['uname'];?><a href="#">Sign Out</a>
        <img src="logopro.png" style="position:relative; width:8.5%; height:100%; top:-20px; left:10%;"/>
        <img src="logotext.png" style="position:relative; width:8.5%; height:100%; top:10px; left:1.2%;"/>
      </div>
      <!--/.nav-collapse -->

    </div>

  </div>

    
</section>

</header> 

</div>

  </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<style type="text/css">
.pricing_boxes {
    padding: 60px 0;
    display: block;
    overflow: hidden;
    position: relative;
}
.pricing_detail {
    background-color: #4198c4;
    border: 1px solid #e3e3e3;
    color: #fff;
    padding: 10px 10px;
    text-align: center;
    height: 400px;
    width:100%;
}
.pricing_detail header {
    border-bottom: 1px solid #e3e3e3;
    margin-top: 10px;
    margin-bottom: 10px;
}
.pricing_info ul li {
    list-style: none;
    text-align: left;
    padding-left: 20px;
    line-height: 20px;
    font-family: sans-serif;
}
.pricing_info ul {
    padding-left: 0;
}
.pricing_info ul {
    padding-left: 0;
}

ul, ol {
    margin-top: 0;
    margin-bottom: 10px;
}

</style>
<div class="general-title" style="text-align:center">
  <h2>Notifications & Events</h2>
  <hr>
</div>
<div class="pricing_boxes" style="position:relative;left:170px;">
  
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 first">
    <div class="pricing_detail">
      <header>
        <h3 style="font-size:30px;font-family:sans serif;color:black">EVENTS</h3>
      </header>
      <div class="pricing_info">
        <ul>
          <li>RJC celebrates success of 2015 AGM in Mumbai</li><br>
          <li>Diamond deals to add sparkle to India-Russian ties</li><br>
          <li>Mr Anoop Mehta, President of BDB receives JNA Awards</li><br>
          <li>GII inaugurates Automated Melee Screening(AMS) at BDB for detecting synthetic stones</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 first">
    <div class="pricing_detail">
      <header>
        <h3 style="font-size:30px;font-family:sans serif;color:black">BULLION RATES</h3>
      </header>
      <div class="pricing_info">
        <ul>
          <br>
          <li>GOLD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2,694.00</li>
          <li>GOLD PETAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;37,387.00</li>
          <li>CRUDEOIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3,039.00</li>
          <li>SILVER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;37,387.00</li>
          <li>LEAD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;116.70</li>
          <li>NICKEL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;685.10</li>
          <li>ALUMINIUM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;103.20</li>
          <li>ZINC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;117.55</li>

        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 first">
    <div class="pricing_detail">
      <header>
        <h3 style="font-size:30px;font-family:sans serif;color:black">CURRIENCIES</h3>
      </header>
      <div class="pricing_info">
        <ul>
          <li style="font-weight:bold;font-family:times;font-size:20px">SYMBOL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RATE</li><br>
          <li>USD/INR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64.87</li>
          <li>EUR/INR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;73.69</li>
          <li>GBP/INR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100.18</li>
          <li>HKD/INR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.37</li>
          <li>JPY/INR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.54</li>
        </ul>
      </div>
    </div>
  </div>
</div>


 <center><div id="googleMap" style="width:700px;height:450px;"></div></center>     


  <table style="margin:20px auto">
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



<div id="footer">&nbsp;&nbsp;&nbsp;&nbsp;
    <center>Copyright &copy; 2015. All Rights Reserved<br>
    Developed by Harlik Shah & Sanat Shah</center>
</div>

</body>

</html> 


<?php
}
else
{
session_unset();
session_destroy();
echo "<script type='text/javascript'>window.location.href='home.php';alert('Login Unsuccessfull');</script>";
}	

?>