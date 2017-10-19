<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Faculties</title>
    
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
    
    
	<!-- base style st -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/dpt.css"> 
    <link rel="stylesheet" type="text/css" href="css/mobile.css"> 
</head>
<body class="departments">
	<!-- <div class="wrapper">
		<div class="header2">
			<a href="index.html"><h1>Departments</h1></a>
		</div>

		<div class="body-panel2">
			<div class="room">
				<h3>CSE</h3>
				<a href="room.html"  target="_blank"><img src="image/cse.jpg"></a>
			</div>

			<div class="room">
				<h3>EEE</h3>
				<a href="room.html"  target="_blank"><img src="image/EEE.jpg"></a>
			</div>

			<div class="room">
				<h3>BBS</h3>
				<a href="room.html"  target="_blank"><img src="image/bba.jpg"></a>
			</div>

			<div class="room">
				<h3>MNS</h3>
				<a href="room.html"  target="_blank"><img src="image/ns.jpg"></a>
			</div>
		</div>
	</div>
	<br>
	<a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a> -->


	<div class="container-fluid">

		<div class="header-panel" id="header-panel">

			<!-- <div class="logo-panel" id="logo-panel">
				<div class="logo">
					<h1 class="little-to-big">Totlo</h1>
				</div>
			</div> -->

			<div class="menus">
				<a href="index.php">Home</a>
				<a href="#">Notices</a>
				<a href="#">Addmision</a>
				<a href="faculty.php">Facilites</a>
				<a href="aboutUs.php">About us</a>
			    <a href="contact.php">Contact</a>
				<a href="#">Resourse</a>
			</div>
		</div>
		<br>
		<div class="container content center wpadding-64" style="max-width: 1980px;" id="band">
    <div class="slideshow-container">
     <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
        <img src="image/frontview.jpg" style="width:100%">
      <div class="text">Front View</div>
     </div>

     <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
          <img src="image/mit6.jpg" style="width:100%">
        <div class="text">View from UP</div>
     </div>

     <div class="mySlides fade">
       <div class="numbertext">3 / 3</div>
         <img src="image/MITchetthaBot.jpg" style="width:100%">
       <div class="text">Space and Bot</div>
     </div>

     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

		<div class="body-panel" id="body_panel">
			<div><h3>Computer Science and Enginnering</h3></div>
			<div><p>The Stanford Computer Science Department was founded in 1965.  A half-century on, the department is a force for innovation, scientific discovery and world-wide impact.  We are particularly proud of the graduates of our programs, many of whom are leaders in academia, industry and government.

                 -Prof. Alex Aiken, Chair</p></div>
			<div><h3>Electric and Electroncs Engineering</h3></div>
			<div><p></p></div>
			<div><h3>Mathematics and Nutrition Science</h3></div>
			<div><p></p></div>
			<div><h3>Pharmacy</h3></div>
			<div><p></p></div>
			<div><h3>Architecture</h3></div>
			<div><p>The School of Architecture and Planning (SA+P) has supported MIT's mission of meeting the world's greatest challenges since its start in 1865. 
				While advocating the forward-looking, technologically driven optimism of MIT, the School also invests in critically reflecting on technological innovation—its social impact and confrontation with cultural values.

                SA+P is made up of six main divisions—the Department of Architecture, the Department of Urban Studies and Planning, the Media Lab, the MIT Center for Real Estate, the Program in Art, Culture, and Technology, and the Leventhal Center for Advanced Urbanism. 
                Over the years, the School has embraced a broader range of fields that address and improve human environments.

                What binds these fields together is a strong commitment to the deployment of technology toward social good. 
                What also binds them is the use of design and deliberation approaches toward action that are distinct from but complementary to the engineering approach to problem solving.

                Design is a main unifying approach of SA+P activities. 
                We believe that design and policy interventions should be grounded in a commitment to improving individual human lives, equity and social justice, cultural enrichment, and the responsible use of resources through creative problem solving and project execution. 
                Our curriculum empowers students with skills that enable them to design physical spaces, policies, and technologies that will shape how those spaces are used, with the goal of sustaining and enhancing the quality of the human environment at all scales, from the personal to the global.</p></div>		
			<div><h3>English and Humanities</h3></div>
			<div><p></p></div>
			<div><h3>Bachelor of Business Administration</h3></div>	
			<div><p>The Robert H. Smith School of Business is an internationally recognized leader in management education and research. 
				One of 12 colleges and schools at the University of Maryland, College Park, the Smith School offers undergraduate; full-time, part-time, online, and executive MBA; specialty masters; PhD; and executive education programs, as well as outreach services to the corporate community.</p></div>
		</div>

		<div class="footer-panel" id="footer_panel">
			
		</div>

</body>
 <script>
   	

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
  }
   </script> 
</html>