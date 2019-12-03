<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style>  
</head>  
<body>  
     <center><h1>CUSTOMER LOGIN</h1></center>  
   <center><p><a href="register.php">Register</a> | <a href="loginCustomer.php">Login</a></p></center>  
<h3><center>Login Form</center></h3>  
<form action="" method="POST"><center>
CUSTOMER ID: <input type="text" name="cust_id"><br />  
PASSWORD: <input type="password" name="cust_pass"><br />   
<input type="submit" value="Login" name="submit" /></center> 
</form>  
<?php
require('dbcon.php');
session_start();

 
// $password =  $_POST['password'];
// $username =$_POST['admin_id'];
// If form submitted, insert values into the database.
 
if (isset($_REQUEST['submit'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['cust_id']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($mysqli,$username);
  $password = stripslashes($_REQUEST['cust_pass']);
  $password = mysqli_real_escape_string($mysqli,$password);
  // Checking is user existing in the database or not
 
        $sql = "SELECT * FROM `customer` WHERE cust_id='$username'
and cust_pass='$password'";
  $result = mysqli_query($mysqli,$sql) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['cust_id'] = $username;
            // Redirect user to index.php
         header("Location: success.php");
        $_SESSION['cust_id'] = $_POST['username'];
         }
         else
         {
  echo  '<script>
  var txt;
    if (confirm("USERNAME/PASSWORD NOT FOUND \n Sign In again?"))
     {
        Location: loginCustomer.php;
    }
     else
      {
        Location: home.html;
    }
    </script>';
  }
}
   
?>

</body>  
</html>   