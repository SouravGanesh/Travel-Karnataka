<?php

$connect = mysqli_connect("localhost","root","","tk");
session_start();

if(isset($_POST['insert']))
{
     //$fl_name = basename($_FILES["image"]["name"]);
     $tmp_file = $_FILES["image"]["tmp_name"];

  $file = addslashes(file_get_contents($tmp_file));

  $dist=$_POST['dist'];
  $type=$_POST['type'];
  $name=$_POST['name'];
  $review=$_POST['review'];
  $uploaded_by = $_SESSION['email'];

  $query="INSERT INTO table3 (`dist`,`type`,`name`,`images`,`review`,`uploaded_by`) VALUES ('$dist','$type','$name','$file','$review','$uploaded_by')";

  if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }
      else 
      {
          echo "Error description: " . mysqli_error($connect);
      }
}

mysqli_close($connect);

?>
<html>
<head>
<title>ADD PLACE</title>
<link rel="stylesheet" href="add.css">
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
    <a href="#">My Photos</a>
    <a href="#">Account Settings</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
           </div>
        </div>
         
    </div>


    <div class="sign">
                <form method="post" enctype="multipart/form-data">
                <input  type="file" name="image" id="image" /><br>
                 
                    <input type="text" class="input-box" name="dist" id = "dist" placeholder="District" /><br>

                    <select class="input-box" name="type"  id = "type">
                      <option value="" disabled selected><strong>Type of Place</strong></option>
                      <option value="1">TEMPLES</option>
                      <option value="2">WATERFALLS</option>
                      <option value="3">MONUMENTS</option>
                      <option value="4">BEACHES</option>
                      <option value="5">SANCTURIES</option>
                      <option value="6">GARDENS</option>
                      <option value="7">LAKES</option>
                      <option value="8">HILL STATIONS</option>
                    </select><br>

                     <input type="text" class="input-box" name="name" id = "name" placeholder="Place Name" /> <br>

                    
             
                     <input type="text" class="input-box" name="review" id = "review" placeholder="Write few sentence about the place" /><br>
                 
                      <input type="submit" name="insert" id="insert" class="but1" value="Submit" />
                 
                  </form>
     </div>
</body>
</html>

<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 


