<!DOCTYPE html>
<html>
<head>
	  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
    
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
    
    
  <!-- base style st -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/about.css"> 
    <link rel="stylesheet" type="text/css" href="css/mobile.css"> 
</head>
<body>
  
    <div class="container-fluid">
    <div class="header-panel" id="header-panel">

      <div class="menus">
        <a href="index.php">Home</a>
        <a href="aboutUs.php">About us</a>
        <a href="departments.php">Departments</a>
        <a href="#">Addmision</a>
        <a href="#">Notices</a>
        <a href="contact.php">Contact</a>
        <a href="#">Resourse</a>
      </div>
    </div>
    </div
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
  <h2 class="wide">Know About Totlo University</h2>
    <!-- <p class="opacity"><i>We love music</i></p> -->
    <p class="ustify" hspace="100000">The University of Chicago is an urban research university that has driven new ways of thinking since 1890. Our commitment to free and open inquiry draws inspired scholars to our global campuses, where ideas are born that challenge and change the world.</p>

    <p class="ustify">We empower individuals to challenge conventional thinking in pursuit of original ideas. Students in the College develop critical, analytic, and writing skills in our rigorous, interdisciplinary core curriculum. Through graduate programs, students test their ideas with UChicago scholars, and become the next generation of leaders in academia, industry, nonprofits, and government.</p>

   <p class="ustify">Chicago research has led to such breakthroughs as discovering the link between cancer and genetics, establishing revolutionary theories of economics, and developing tools to produce reliably excellent urban schooling. We generate new insights for the benefit of present and future generations with our national and affiliated laboratories: Argonne National Laboratory, Fermi National Accelerator Laboratory, and the Marine Biological Laboratory in Woods Hole, Massachusetts.</p>

   <p class="ustify">The University of Chicago is enriched by the city we call home. In partnership with our neighbors, we invest in Chicago's mid-South Side across such areas as health, education, economic growth, and the arts. Together with our medical center, we are the largest private employer on the South Side.</p>

   <p class="ustify">In all we do, we are driven to dig deeper, push further, and ask bigger questions—and to leverage our knowledge to enrich all human life. Our diverse and creative students and alumni drive innovation, lead international conversations, and make masterpieces. Alumni and faculty, lecturers and postdocs go on to become Nobel laureates, CEOs, university presidents, attorneys general, literary giants, and astronauts. </p>
  
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