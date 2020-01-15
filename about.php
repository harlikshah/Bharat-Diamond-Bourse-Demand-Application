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
  <nav style="color:black;font-size:470%;position:absolute; top:30%; left:40%;">INDUSTRY</nav>
  
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
          <li class="active"><a href="about.php">Industry</a></li>
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
<style>
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;

}
hr {
    width: 50px;
    height: 3px;
    background: #6699CC;
    display: inline-block;
    margin-top: 0;
    }
p{
  font-size: 120%;
}
</style>

  <div class="container">
    <h2>World's Largest Diamond Market</h2>
    <hr>
    <p>Bharat Diamond Bourse(BDB) is one of the largest and most sophisticated diamond centers of the world. Our Journey started at Bandra-Kurla Complex in Mumbai from 2010, now with over 4,000 members engaged in import and export, manufacturing and marketing of rough and polished diamonds, BDB has created a business framework to conduct their transactions in maximum convenience and security</p>
    <h2>Contribution to India's Economic Development</h2>
    <hr>
    <p>World over, Indian polished diamonds are in great demand both for dealers and final customers. No wonder the industry contributes significantly to the gross domestic product of India. 
The Indian diamond industry contributes indirectly to other branches of the economy such as tourism, banking, aviation, hospitality, communications and security, and is responsible for creating many more employment opportunities.</p>
    
    <h2>Diamond Trading is the Backbone of the Diamond Industry</h2>
    <hr>
    <p>Diamonds trading is a profession that demands much knowledge, experience and expertise. Most of the diamond trading business is done in just a few spots on the planet. Today, roughly 90% of is done in Surat, a city in India that serves a center of diamond trading and manufacturing. However, some more locations where trading and cutting is done are Tel Aviv, Amsterdam, London, New York City and Antwerp. The main diamond company ruling the market is the De Beets diamond company, the major centers of which are located in London and Johannesburg.

</p>
<h2>Promoting Diamond Trade</h2>
    <hr>
    <p>BDB was set up for the primary objective of establishing necessary infrastructural facilities for promotion of export of diamonds including diamond jewellery from India and to provide for this purposes all support and service facilities so as to eventually make India an International Trading Centre for Gems & Jewellery. 
BDB Complex spread across 20 acres with a constructed area of 2 million square feet, is designed in the shape of a diamond with interconnected high-rise buildings housing more than 2500 offices, Trading Halls, Diamond Trading Centres, safe vaults. It includes two basements of additional 1 million square feet for car parking and utility services with 24x7 state-of-the-art security and surveillance system and has a dedicated, well-equipped quick response team for tackling crisis.</p>

    <h2>International Presence</h2>
    <hr>
    <p>Given the strategic advantage for the trade, almost all global diamond companies and pricing firms like Rapaport and IDEX operate their offices in Bharat Diamond Bourse. 
Bharat Diamond Bourse represents prominently in the international industry associations such as World Federation of Diamond Bourses, the International Diamond Manufacturers' Association, World Diamond Council, the Kimberley Process and World Diamond Mark.</p>
   
    <div class="row">
      <div class="col-lg-6">
        <div class="text-center">
        
          
        </div>
      </div>
    </div>
  </div>


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
