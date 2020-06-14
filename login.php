<?php
session_start();
$res = mysqli_connect('localhost','root','');
mysqli_select_db($res,'tk');
if($_SERVER['REQUEST_METHOD']=="POST"){
$email = $_POST['email'];
$pass = $_POST['pass'];
$s = "select * from users where email = '$email' && pass = '$pass'";
$result = mysqli_query($res,$s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['email'] = $email;
    header('location:home2.php');
}
else
{
   $_SESSION['ERROR_MESSAGE'] = "Invalid Credentials";
}
}
?>


<html>
<head>
<title>Sign In</title>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>

    <div class="top">
      <h1><p><b>t<span style="color:#ff545a">K </span></b> travel<span style="color:#ff545a">KARNATAKA</span></p></h1>
  </div>
  <?php
  if(!empty($_SESSION['ERROR_MESSAGE'])){
    echo '<script>alert("' .$_SESSION['ERROR_MESSAGE'].'")</script>';
  } 

  ?>
    <div class="sign">
     <img src="hi.png">
      <h1>SIGN IN</h1>
        <form action="login.php" method="POST">
     <div class=input-box">
         <i class="fa fa-envelope-o"></i>
         <Input type="email" class="input-box" name = "email" placeholder="Email id" required>
     </div>
     <div class=input-box">
       <i class="fa fa-key"></i>
         <Input type="password" class="input-box"  name = "pass" placeholder="Password" required>
        </div>
          
        <button type="submit" name = "insert" class="sibtn">Sign in</button>
        <div class="pass">
        <a href=##><h5>Forget Password?</h6></a>
  </div>
     <hr>
     <p class="or">OR</p>
       <button type="button" onClick="location.href='signup.php'" class="sibtn">Sign up</button>
      </form>
     </div>
   </body>
</html>