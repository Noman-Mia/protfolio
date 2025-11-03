<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('asset/frontend/favicon.png') }}" rel="icon">

  <link href="{{ asset('asset/frontend/favicon.png') }}>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="style

  <!-- =======================================================
  * Template Name: Lonely - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>



  <header id="header" class="bg-light py-3 shadow-sm ">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- 🔹 Left: Logo -->
    <div class="logo">
      <h1 class="m-0">
        <a href="#" class="text-decoration-none text-dark">Portfolio</a>
      </h1>
    </div>

    <!-- 🔹 Right: Navbar (Row-Wise) -->
    <nav id="navbar">
      <ul class="d-flex align-items-center list-unstyled mb-0">
        <li><a class="nav-link px-3 text-dark" href="#hero">Home</a></li>
        <li><a class="nav-link px-3 text-dark" href="#about">About</a></li>
        <li><a class="nav-link px-3 text-dark" href="#resume">Resume</a></li>
        <li><a class="nav-link px-3 text-dark" href="#services">Services</a></li>
        <li><a class="nav-link px-3 text-dark" href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link px-3 text-dark" href="#contact">Contact</a></li>
      </ul>
    </nav>

  </div>
</header>

<div class="container my-5">
  <div class="card text-white border-0 mx-auto" style="max-width: 1000px;">

    <div class="position-relative">
      <img src="{{ asset('frontend/asset/img/hero-bg.jpg') }}" 
           class="card-img" 
           alt="Portfolio Image" 
           style="height: 400px; object-fit: cover;">
      <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center" 
           style="background: rgba(0, 0, 0, 0.4);">
        <h2 class="card-title text-center">Welcome to My Portfolio</h2>
        <p class="card-text text-center">I’m a full-stack developer.</p>
        
      </div>
    </div>

  </div>
</div>


  <main id="main">

   

    <!-- ======= All Section ======= -->
     @extends('frontend.footer')
    
    @extends('frontend.contact')
    @extends('frontend.testimonial')
    @extends('frontend.portfolio') 
    @extends('frontend.service')
    @extends('frontend.resume') 
    @extends('frontend.skill')
    @extends('frontend.about') 
  <
  
  {{-- <br>
  @extends('frontend.services') 
  <br>
  @extends('frontend.portfolio') 
  <br>
  @extends('frontend.contact') 
  <br>
  @extends('frontend.footer') --}}
   
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // ✅ Initialize Swiper
  var swiper = new Swiper(".testimonials-slider", {
    loop: true,
    grabCursor: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 },
    },
  });
</script>

</body>

</html>