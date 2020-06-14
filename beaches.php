<?php
$con = mysqli_connect("localhost","root","","tk");
$query = "SELECT * FROM table3 where type='4'";  
$result = mysqli_query($con, $query);  

while($res = mysqli_fetch_array($result))  
                {	
                  echo ' <div class="most" id="most">';
                    echo '<div class="w3-half w3-container w3-margin-bottom w3-margin-top"style="width:50%">';
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res['images'] ).'" height="250" width="500" class="img-thumnail" /> ';
                    echo '</div>' ;
                    echo '<div class="w3-container w3-white w3-margin-bottom w3-margin-top w3-margin-right" style="width:100%" style="background-color:black;">';
                    echo '<br><b><span style="color:#000000;font-family:Lucida Bright;font-size:20px;text-transform:uppercase">'.$res['name'].'</span></b>';
                    echo '<div class="w3-container w3-white w3-margin-bottom w3-margin-top w3-margin-right"><br>';
                    echo '<span style="color:#2B2D2F">'.$res['review'].'</span>';
                    echo ' </div>';
                    echo '</div>'; 
                    echo '</div>';
              
     }
     
   
     echo '<br><br>';  
?>


<html>
<head>
  <title>display img</title>
  <link href="display.css" rel="stylesheet">
       <meta charset="UTF-8">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
</body>
</html>
