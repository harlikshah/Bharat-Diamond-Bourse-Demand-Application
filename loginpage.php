
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Registration System</title>

<link rel="stylesheet" type="text/css" href="form__valid.css">
</head>

<body >
<center>

<div >


<form  action="validlogin.php" method="post" id="register-form" novalidate="novalidate">
 
    <h4>Login Registration</h4>
 
    <div id="form-content">
        <fieldset>
 
	     <div class="fieldgroup">
                <label for="username">Username</label>
                <input type="text" name="uname">
            </div>

            <div class="fieldgroup">
                <label for="password">Password</label>
                <input type="password" name="pwd">
            </div>

            <div class="fieldgroup">
                
                <input type="submit" style="width:48%; " value="Log In" class="submit">
            </div>
 
        </fieldset>
    </div>
 
        <div class="fieldgroup">
            <p>Not registered yet? <a href="registration.php">Sign up</a>.</p>
        </div>

   
	

</form>

</div>

</center>



</body>

</html>