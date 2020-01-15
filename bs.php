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
  <link rel="stylesheet" type="text/css" href="calc.css">
  
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
  <nav style="color:black;font-size:450%;position:absolute; top:30%; left:40%;">BUY/SELL</nav>
  
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
          <li class="active"><a href="bs.php">Buy/Sell</a></li>
          <li><a href="list.php">List of Companies/Brokers</a></li>
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

<div class="row">
  <div class="col-md-6 col-md-offset-3">


<div class="calcDescription"></div>

<form action="nc.php" method="post" >

        <table class="appForm" cellspacing="0">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
              <img src="Shapes1.png" style="height:85px;width:270px">
              &nbsp;&nbsp;
              <img src="Shapes2.png" style="height:85px;width:270px;position:relative;top:6px">
              <br>
            <tbody><tr> 
                <th><h4>Shape:</h4></th>
                <td> 

                    <select name="shape">
                        <option value=""> Choose </option>
                        
                        <option value="Emerald">Emerald</option>
                        <option value="Radiant">Radiant</option>
                        <option value="Asscher">Asscher</option>
                        <option value="Cushion">Cushion</option>
                        <option value="Round">Round</option>
                        <option value="Princess">Princess</option>
                        <option value="Marquise">Marquise</option>
                        <option value="Pear">Pear</option> 
                    </select>
                    
                </td>
            </tr>
            <tr> 

                <th><h4>Carat Weight:</h4></th>
                <td> 
                    <input type="text" name="carat" value="" size="5" maxlength="4">
                    <span class="small" style="font-size:0.6em;">example: 0.98 or 1.73 or 3.95</span>
                </td>
            </tr>
            <tr> 
                <th class="gray">Color Scale&nbsp;&nbsp;&nbsp;
                </th><td><img src="colorgrading.jpg" width="440" height="120" border="0" alt="Color Scale">  </td>

            </tr>
            <br>
            <tr> 
                <th><h4>Color:</h4></th>
                <td> 
                    <select name="color">
                        <option value=""> Choose </option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                        <option value="O">O</option>
                        <option value="P">P</option>
                        <option value="Q">Q</option>
                        <option value="R">R</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                        <option value="U">U</option>
                        <option value="V">V</option>
                        <option value="W">W</option>
                        <option value="X">X</option>
                        <option value="Y">Y</option>
                        <option value="Z">Z</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <th class="gray">Clarity Scale&nbsp;&nbsp;&nbsp;</th>
                <td><img src="clarity.jpg" width="440" height="120" border="0" alt="Clarity Scale"> </td>
            </tr>
            <tr> 
                <th><h4>Clarity:</h4></th>
                <td> 
                    <select name="clarity">
                        <option value=""> Choose </option>
                        <option value="Fl">FL</option>
                        <option value="IF">IF</option>
                        <option value="VVS1">VVS1</option>
                        <option value="VVS2">VVS2</option>
                        <option value="VS1">VS1</option>
                        <option value="VS2">VS2</option>
                        <option value="SI1">SI1</option>
                        <option value="SI2">SI2</option>
                        <option value="I1">I1</option>
                        <option value="I2">I2</option>
                        <option value="I3">I3</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <th><h4>Certification:</h4></th>
                <td> 
                    <select name="certificate">
                        <option value=""> Choose </option>
                        <option value="AGS Lab">AGS Lab</option>
                        <option value="EGL USA">EGL USA</option>
                        <option value="EGL Intl">EGL Intl</option>
                        <option value="GIA Lab">GIA Lab</option>
                        <option value="HRD Lab">HRD Lab</option>
                        <option value="IGI Lab">IGI Lab</option>
                        

                    </select>
                    </td>
            </tr>
            <tr> 
                <th><h4>Fluorescence:</h4></th>
                <td> 
                    <select name="fluorescence">
                        <option value=""> Choose </option>
                        <option value="Faint">Faint</option>
                        <option value="Medium">Medium</option>
                        <option value="Strong">Strong</option>
                        <option value="Slight">Slight</option>
                       

                    </select>
                     </td>
            </tr>
            <tr> 

                <th><h4>Username:</h4></th>
                <td> 
                    <input type="text" name="newuser" size="10" maxlength="20">
                   
                </td>
            </tr>
             <tr> 

                <th><h4>Contact Info:</h4></th>
                <td> 
                    <input type="text" name="newcont" value="" size="12" maxlength="20">
                   
                </td>
            </tr>
            <tr>
                <th><h4>Select Buy/Sell: </h4></th>
                <td> 
                    <select name="buysell">
                        <option value=""> Choose </option>
                        <option value="Buy">Buy</option>
                        <option value="Sell">Sell</option>
                       

                    </select>
                    <span class="big error">*</span><br> </td>
            </tr>
            
            <tr> 
                <td>&nbsp;</td>
                <td> 
                  <center>  <input type="submit" class="btn btn-info" name="go" value="POST"></center>
                   
                     <br>
                    
                </td>
            </tr>
        </tbody></table>



    </form>
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
