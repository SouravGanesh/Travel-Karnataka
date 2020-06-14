<?php

$con = mysqli_connect("localhost","root","","tk"); 
$output  ='';
if(isset($_POST['submit'])){
	$searchq =$_POST['query'];
	$query = "SELECT name,images,dist,review FROM table3 where name like '%$searchq%' or dist like '%$searchq%'";
	$result = mysqli_query($con,$query);
	$count= mysqli_num_rows($result);
	if($count==0){
		echo '<script>alert("There is no such place.. Want to Add a new place?")</script>';
	}
	else{
		while($row = mysqli_fetch_array($result)){
			$name = $row['name'];
			$file = '<img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" height="200" width="200"/>';
			$dist = $row['dist'];
			$desc = $row['review'];

			$output .= '<table style="display:inline-flex" border = 1><tr><td>'.$name.'</td><td>'.$file.'</td><td>'.$dist.'</td><td>'.$desc.'</td></tr></table>';
		}
	}
}
?>
<html>
 <head>
   <title>travel karnataka</title>
       <link href="home.css" rel="stylesheet">
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="flaticon.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
  </head>

    <body>

    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
         <a href="#home" class="w3-bar-item w3-button"><b>t<span style="color:#ff545a">K</span></b> travel<span style="color:#ff545a">KARNATAKA</span></a>
            <div class="w3-right w3-hide-small">
		
		<a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home" style="font-size:12px; color:#ff545a"></i><span style="color:#ff545a;font-size:12px;">HOME</span></a>
        <a href="#most" class="w3-bar-item w3-button"><i class="fa fa-eye" style="font-size:12px; color:#ff545a"></i><span style="color:#ff545a;font-size:12px;">MOST VISITED</span></a>
        <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-camera-retro" style="font-size:12px; color:#ff545a"></i><span style="color:#ff545a;font-size:12px;">ADD PLACE</span></a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope" style="font-size:12px;  color:#ff545a"></i><span style="color:#ff545a;font-size:12px;">CONTACT</span></a>
	    <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user" style="font-size:12px; color:#ff545a "></i><span style="color:#ff545a;font-size:12px;">LOGIN</span></a>
	 
           </div>
        </div>
    </div>


    <div class="header" id="home">
	<form action = "home.php" method = "POST">
            <h1><span style="font-style: oblique; font-size:200%;"  >Find a Place to Visit<span style="color:#ff545a">!...</span></h1><br />
             <div class="form-box">
		    <input type="text" name = "query" class="search-field b"
			 placeholder="Enter Name of Place to Search" >
			<input type="submit" class="search-btn"  value = "Search" name = "submit" style="font-size:20px"/>
            </div>
          </form>
		</div> 
	


    <section id="list-topics" class="list-topics">
			<div class="container" >
				<div class="list-topics-content">
				<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fa fa-gopuram" style="font-size:30px;"></i>
								</div>
								<h4><a href="temples.php" style="text-decoration: none">TEMPLES</a></h4>
								<p>150 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fa fa-monument" style="font-size:30px;"></i>
								</div>
								<h4><a href="monuments.php" style="text-decoration: none">MONUMENTS</a></h4>
								<p>150 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fas fa-water" style="font-size:30px;"></i>
								</div>
								<h4><a href="waterfalls.php" style="text-decoration: none">WATERFALLS</a></h4>
								<p>214 listings</p>
							</div>
						</li>
						
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fas fa-mountain" style="font-size:30px;" ></i>
								</div>
								<h4><a href="hills.php" style="text-decoration: none">HILL STATION</a></h4>
								<p>185 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fas fa-paw" style="font-size:30px;"></i>
								</div>
								<h4><a href="sanctury.php" style="text-decoration: none">SANCTURIES</a></h4>
								<p>200 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fas fa-dove" style="font-size:30px;"></i>
								</div>
								<h4><a href="gardens.php" style="text-decoration: none">GARDENS</a></h4>
								<p>120 listings</p>
							</div>
						</li>

                            <li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class='fas fa-swimmer' style='font-size:30px;'></i>
								</div>
								<a href="lakes.php" style="text-decoration: none"><h4>LAKES</a></h4></a>
								<p>120 listings</p>
							</div>

						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="fas fa-umbrella-beach " style="font-size:30px;" ></i>
								</div>
								<h4><a href="beaches.php" style="text-decoration: none">BEACHES</a></h4>
								<p>185 listings</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<div class="print">
		<?php echo $output; ?>

		</div>
  
		<h1 class="w3-center" style="color:#ff545a"><b>MOST VISITED PLACES</b></h1>	

 
 
  <div class="most" id="most">
	<hr  class="line">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="hamp.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity" height="280" width="300">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">HAMPI</span></b></p>
        <p>Chariot was built in the period of King Krishnadevaraya of Tulu Dynasty.It was Built in a single Monolithic stone.It is one of the beautiful place in Karnataka.</p>
	  <p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>5.5 lakh+</span></p>
	</div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="mypal.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"  height="280" width="300">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">MYSORE PALACE</span></b></p>
		<p>Palace is one of the attractive places in Mysore.The chief Engineer who built Palace was Lord Irwin.The Palace was Built in 1912.</p>
		<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>60 lakh+</span></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="ZOO.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"  height="280" width="300">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">MYSORE ZOO</span></b></p>
		<p>Mysore Zoo is one of the oldest and most popular in India.Mysore Zoo was created in 1892.Most rare animals can be found in this zoo.One must visit this.</p>
		<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>31 lakh+</span></p>
      </div>
	</div>
  </div>

  <div class="most">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="jog.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity" height="280" width="280">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">JOG FALLS</span></b></p>
        <p>Jog Falls is located near Jog Village in Sagara, Karnataka which is a part of Shimoga district.
	        It is the second highest plunge waterfalls in India.</p>
			<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>10 lakh+</span></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="gol.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"  height="280" width="280">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">GOL GUMBAZ</span></b></p>
		<p>Gol Gumbaz at Bijapur is the mausoleum of king Muhammad Adil Shah. Even a slight whisper by someone in this gallery can be heard everywhere in the gallery.</p>
		<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>8 lakh+</span></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="lal.png" alt="Norway" style="width:100%" class="w3-hover-opacity"  height="280" width="280">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">LAL BAGH</span></b></p>
		<p>Lalbagh is an old botanical garden in Bengaluru, India. First planned and laid out during the rule of Hyder Ali.More than 1000 species of plants are here.</p>
		<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>15 lakh+</span></p>
      </div>
	</div>
  </div>
 
  <div class="most">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dharma.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity" height="280" width="280">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">DHARMASTHALA</span></b></p>
        <p>Shri Kshetra Dharmasthala, the land of righteousness and piety, is one of south India’s most renowned religious landmarks with a history as old as 800 years.</p>
			<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>37 lakh+</span></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="ranga.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"  height="280" width="280">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">RANGANATHITTU BIRD SANCTUARY</span></b></p>
		<p>Ranganathittu Bird Sanctuary is located in the Mandya District. It's the largest bird sanctuary in the state and comprises six islets on the banks of the Kaveri river</p>
		<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>3.5 lakh+</span></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="hil.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"  height="280" width="280">
      <div class="w3-container w3-white">
        <p><b><span style="color:#ff545a">CHAMUNDI HILL</span></b></p>
		<p>The average elevation is 1,000 metres.The Chamundeshwari Temple is located atop the Chamundi Hills.We can also find a Nandi Statue at the Hill</p>
		<p>Visitors: <span style="color:#ff545a"><i class="fa fa-eye"></i>21 lakh+</span></p>
      </div>
	</div>
  </div>
 
  <br>
  <div class="contact" id="contact">
       
	   </div> <div class="w3-container w3-light-grey" style="padding:128px 16px ; background-image: url('img.jpg'); id="contact" >
					<h3 class="w3-center">CONTACT</h3>
					<p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
					<div style="margin-top:48px">
				  <p><i class="fa fa-map-marker-alt  w3-margin-right"></i>Mysuru, INDIA</p>
					 <p><i class="fa fa-phone  w3-margin-right"></i> Phone: +91 6361924355</p>
				  <p><i class="fa fa-envelope  w3-margin-right"> </i> Email: travelkarnataka17@gmail.com</p>
				  <br>
				  <form action="/action_page.php" target="_blank">
					<p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" style="width:750px;"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email" style="width:750px;"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject" style="width:750px;"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message" style="width:750px;"></p>
					<p>
				  <button class="w3-button w3-black" type="submit">
					<i class="fa fa-paper-plane"></i> SEND MESSAGE
				  </button>
					</p>
				  </form>
				   </div>
			</div>
	  </div>

	  <footer class="w3-center  w3-padding-30" style="background:#ff545a;">
		<p><span style="color:black; font-family:Copperplate;">FIND US ON SOCIAL MEDIA & FOLLOW US.</span></p>
 				<a href="#"><i class="fab fa-facebook-f w3-hover-opacity" style="font-size:24px"></i></a>
				<a href="#"><i class="fab fa-instagram w3-hover-opacity" style="font-size:24px"></i></a>
				<p  style="color: black; font-family:Arial; font-size: small; ">
		 		&copy;COPYRIGHT <a href="#"></a>
	  			</p>
				<P><span style="color:black; font-family:Verdana;">SHREYAS KULKARN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SHRIESHA NASIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SOURAV G &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VISHWANATH C B</span></P>
	 </footer>
	
  </body>
</html>



