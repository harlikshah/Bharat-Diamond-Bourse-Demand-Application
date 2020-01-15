<?php
session_start();
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="form__valid.css">

<title> Form Validation </title>
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js">
</script>

<script>
(function($,W,D)
{
    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    fname: "required",
                    lname: "required",
                    email: {
                        required: true,
                        email: true
                    },
            ct: {
            minlength: 10,
            maxlength: 10,
            required: true,
            digits: true
            },
            uname: {
            minlength: 5,
            maxlength:5,
            required: true
            },
                    pwd: {
                        required: true,
                        minlength: 5
                    },
                    agree: "required"
                },
                messages: {
                    fname: "Please enter your firstname",
                    lname: "Please enter your lastname",
                    pwd: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
            ct: {
            minlength: "Please enter your Mobile No.",
            maxlength: "Please enter your Mobile No.",
            required: "Please enter your Mobile No. ",
            digits: "This field can only contain numbers."
            },
            uname: {
            minlength: "Your USERNAME must be at least 5 characters long",
            required: "Please enter Username"
            },
                    agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);
</script>

<center>
<form  method="post" id="register-form" novalidate="novalidate">
 
    <h4>User Registration</h4>
 
    <div id="form-content">
        <fieldset>
 
            <div class="fieldgroup">
                <label for="fname">First Name</label>
                <input type="text" name="fname" required >
            </div>
 
            <div class="fieldgroup">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" required >
            </div>
 
            <div class="fieldgroup">
                <label for="email">Email</label>
                <input type="text" name="email"required >
            </div>

            <div class="fieldgroup">
                <label for="contact">Contact No.</label>
                <input type="text" name="ct" required >
            </div>		
 
	     <div class="fieldgroup">
                <label for="username">Username</label>
                <input type="text" name="uname" required >
            </div>

            <div class="fieldgroup">
                <label for="password">Password</label>
                <input type="password" name="pwd" required >
            </div>



            <div >
                 <label for="selection">Select</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <select name="cb">
                        <option value=""> Choose </option>
                        
                        <option value="Company">Company</option>
                        <option value="Broker">Broker</option>
                        

                    </select>
            </div>

            <div class="fieldgroup">
                <label for="company">Name of Company</label>
                <input type="text" name="company">
            </div>

            <div class="fieldgroup">
                <p class="right">By clicking register you agree to our policy.</p>
                <input type="submit" name="btnsignup" value="Register" class="submit" >
            </div>
 
        </fieldset>
    </div>
 
        <div class="fieldgroup">
            <p>Already registered? <a href="flogin.php">Sign in</a>.</p>
        </div>

   
	

</form>
</center>
</body>
</html>	


<?php



if(isset($_SESSION['user'])!="")
{
// header("Location: home.php");
}
mysql_connect("localhost", "root", "");

  mysql_select_db("diamond");
        $un=$_POST['uname'];
$check_email= "SELECT *from vregister where username='$un'";
    $run=mysql_query($check_email);
        if(mysql_num_rows($run)>0)
            {
                echo "<script> alert('Username $un already Exist. Try another one .')</script>";
                exit();
            }

if(isset($_POST['btnsignup']))
{
    if(mysql_query("INSERT INTO vregister(id,fname,lname,email,contact,username,password,sel,ncompany) VALUES('','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["ct"]."','".$_POST["uname"]."','".$_POST["pwd"]."','".$_POST["cb"]."','".$_POST["company"]."')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>