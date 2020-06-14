<?php
session_start();
$res = mysqli_connect('localhost','root','');
mysqli_select_db($res,'tk');
if($_SERVER['REQUEST_METHOD']=="POST"){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$s = "select * from users where email = '$email'";
$result = mysqli_query($res,$s);
$num = mysqli_num_rows($result);
if($num==1){
    echo '<script>alert("Username Already Taken")</script>';
    header('location:signup.php');
}
else{
    $reg = "insert into users(name,email,pass) values('$name','$email','$pass')";
    mysqli_query($res,$reg);
    header('location:login.php');
}
}
?>

<html>
<head>
<title>Sign In</title>
<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>

    <div class="top">
      <h1><p><b>t<span style="color:#ff545a">K </span></b> travel<span style="color:#ff545a">KARNATAKA</span></p></h1>
  </div>

    <div class="sign">
     <img src="hi.png">
      <h1>SIGN UP</h1>
        <form action="signup.php" method="POST">
<div class=input-box">
         <i class="fa fa-user-o"></i>
         <Input type="name" class="input-box" name="name" placeholder="Name">
     </div>
     <div class=input-box">
         <i class="fa fa-envelope-o"></i>
         <Input type="email" name="email" class="input-box" placeholder="Email id">
     </div>
     <div class=input-box">
       <i class="fa fa-key"></i>
         <Input type="password" name="pass" class="input-box"  placeholder="Password">
        </div>
       <button type="submit" class="sibtn">Sign up</button>
      </form>
    </div>
   </body>
</html>