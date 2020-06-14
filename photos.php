<?php
$con = mysqli_connect("localhost","root","","tk");
session_start();
$uploaded_by = $_SESSION['email'];
$query = "SELECT name,images,review FROM table3 where uploaded_by='$uploaded_by'";  
$result = mysqli_query($con, $query);
echo '
                     <table style="display:inline-flex;" border = 1>
                     <tr>
                     <th>Name</th>
                     <th>Image</th>
                     <th>Description</th>
                     </tr>';     
while($res = mysqli_fetch_array($result))  
                {	 
                     echo '<tr>';
                     echo "<td>
                     $res[name]</td>";
                     echo '<td><img src="data:image/jpeg;base64,'.base64_encode($res['images'] ).'" height="200" width="200" class="img-thumnail" /> 
    </td>';
    echo "<td>
    $res[review]
    </td>";
    echo '</tr>
    </table>';       
   	}
?>

<html>
<head>
<title>ADD PLACE</title>
<meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="flaticon.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.top-bar{
    background: #ffffff;
    padding:5px;

}
.dropbtn {
    opacity: 0.75;
    background-color: white;
    padding: 5px;
    font-size: 15px;
    border: none;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color:#ff545a;}
  
  .dropdown:hover .dropdown-content {display: block; background-color: rgb(255, 254, 255);}
  
  .dropdown:hover .dropbtn {background-color: #ffffff;}

</style> 
</head>

<body>

<div class="w3-top">
        <div class="top-bar">
         <a href="home2.php" class="w3-bar-item w3-button"><b>t<span style="color:#ff545a">K</span></b> travel<span style="color:#ff545a">KARNATAKA</span></a>
         <div class="w3-right w3-hide-small">

		
        <a href="home2.php" class="w3-bar-item w3-button"><i class="fa fa-home" style="font-size:15px; color:#ff545a"></i><span style="color:#ff545a;font-size:15px;">HOME</span></a>
		<a href="home2.php#most" class="w3-bar-item w3-button"><i class="fa fa-eye" style="font-size:15px; color:#ff545a"></i><span style="color:#ff545a;font-size:15px;">MOST VISITED</span></a>
        <a href="home2.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope" style="font-size:15px;  color:#ff545a"></i><span style="color:#ff545a;font-size:15px;">CONTACT</span></a>
        <div class="dropdown">
  <button class="dropbtn"><i class="fa fa-user" style="font-size:15px; color:#ff545a"></i><span style="color:#ff545a;font-size:15px;"><?php echo $_SESSION['email'];?> </button></span></a>
  <div class="dropdown-content">
    <a href="#">Account Settings</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
           </div>
        </div>
         
    </div>
    </body>
    </html>