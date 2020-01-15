   

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
<body >



<div style="position:relative; left:0; top:0;">
  
  <img src="BDB_BLUE.jpg" style="position:absolute; width:100%; height:100%; top:0; left:0; right:0;"/>
  <img src="background1.png" style="position:relative; width:85%; height:100%; top:0; left:15%;"/>
   <img src="logo_bdb.png" style="position:absolute; width:10%; height:23%; top:35%; left:12%;"/>
  <nav style="color:black;font-weight:105;font-size:125%;position:absolute;top:57%;left:13%;width:10%"><h3 style="font-family:sans-serif">BHARAT DIAMOND BOURSE</h3></nav>
  <nav style="color:black;font-size:460%;position:absolute; top:30%; left:38%;">NEWSFEED</nav>
</div>


<div id="header" style="width:85%; height:15%">
    <div id="header-content">

<header>
  <section>
  <div>
    <div class="container">
    
      <div class="collapse navbar-collapse pull-leftXX">
        <ul class="nav navbar-nav">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
          <li><a href="home.php">Home</a></li>
          <li class="active"><a href="Newsfeed.php">NewsFeed</a></li>
          <li><a href="bs.php">Buy/Sell</a></li>
          <li><a href="list.php">List of Companies/Brokers</a></li>
          <li><a href="about.php">Industry</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
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
<br>


<div class="col-xs-6" style="margin:30px;">
 <form  method="post"   id="searchform"> 
  <table>
  <tr>
      <td>  <h4>Shape:</h4></td><td><select name='sname'><option>Choose</option><option>Emerald</option><option>Radiant</option><option>Asscher</option><option>Cushion</option><option>Round</option><option>Princess</option><option>Marquise</option><option>Pear</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Color:</h4></td><td><select name='colorname'><option>Choose</option><option>D</option><option>E</option><option>F</option><option>G</option><option>H</option><option>I</option><option>J</option><option>K</option><option>L</option><option>M</option><option>N</option><option>O</option><option>P</option><option>Q</option><option>R</option><option>S</option><option>T</option><option>U</option><option>V</option><option>W</option><option>X</option><option>Y</option><option>Z</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Clarity:</h4></td><td><select name='clarityname'><option>Choose</option><option>FL</option><option>IF</option><option>VVS1</option><option>VVS2</option><option>VS1</option><option>VS2</option><option>SI1</option><option>SI2</option><option>I1</option><option>I2</option><option>I3</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Certification:</h4></td><td><select name='certifyname'><option>Choose</option><option>AGS Lab</option><option>EGL USA</option><option>EGL Intl</option><option>GIA Lab</option><option>HRD Lab</option><option>IGI Lab</option></select></td>
       <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Fluorescence:</h4></td><td><select name='flname'><option>Choose</option><option>Faint</option><option>Medium</option><option>Strong</option><option>Slight</option></select></td>
        <td> <h4>&nbsp;&nbsp;&nbsp;&nbsp;Buy/Sell:</h4></td><td><select name='bsname'><option>Choose</option><option>Buy</option><option>Sell</option><op</select></td>
  </tr>
  </table>

       <center> 
       <br><input class="btn btn-info" type="submit" name="submit" value="APPLY">
        </center>
      </form> 
    </div>

<div class="col-md-8" style="position:relative;left:-100px">






<?php 
    if(isset($_POST['submit']))
{ 
    if(isset($_GET['go']))
  { 
    if(preg_match("/^[  a-zA-Z]+/", $_POST['sname']) ||  preg_match("/^[  a-zA-Z]+/", $_POST['colorname'] ) ||  preg_match("/^[  a-zA-Z]+/", $_POST['clarityname'] ) ||  preg_match("/^[  a-zA-Z]+/", $_POST['certifyname'] ) ||  preg_match("/^[  a-zA-Z]+/", $_POST['flname'] ) ||  preg_match("/^[  a-zA-Z]+/", $_POST['bsname'] ))
   { 
       
      mysql_connect("localhost", "root", "");

      mysql_select_db("diamond");
     //-query  the database table 
        $sql="SELECT * FROM newsfeed WHERE shape ='$_POST[sname]' AND  colorscale = '$_POST[colorname]' AND  clarityscale = '$_POST[clarityname]' AND  Certify = '$_POST[certifyname]' AND  fl = '$_POST[flname]' AND  bs = '$_POST[bsname]' order by id desc"; 
        //-run  the query against the mysql query function 
        $result=mysql_query($sql); 
      
     while($row=mysql_fetch_array($result))
    { 
            ?>
          <div class="container" style="width:0%; left:-100px " >
      
         <table class="table" style="vertical-align:top">
         <caption><?php echo $row['usname'];echo "    Posted this";?></caption>
          <thead>
            <tr>
             <th>ID</th>
              <th>Shape</th>
              <th>CaratWeight</th>
              <th>Color</th>
              <th>Clarity</th>
              <th>Certification</th>
              <th>Fluoresence</th>
              <th>Username</th>
              <th>Contact</th>
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
              <td><?php echo $row['usname'];?></td>
              <td><?php echo $row['cont'];?></td>
              <td><?php echo $row['bs'];?></td>
             

            
          </tbody>
        </table>
      </div>

          <?php
       }
       } 
    else{ 
    echo  "<p>Please enter a search query</p>"; 
    }

   } 
} 
  
  ?>

</div>
  <table style="margin:20px auto; width:3500px ; height:900px">
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




<div id="footer" style="width:1580px ; height:80px ; left:0px">&nbsp;&nbsp;&nbsp;&nbsp;
    <center>Copyright &copy; 2015. All Rights Reserved<br>
    Developed by Harlik Shah & Sanat Shah</center>
</div>

</body>

</html>
