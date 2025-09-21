<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spongebob Movie</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome untuk icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
     @vite(['resources/css/app.css','resources/js/app.js']) 

 
</head>
<body>

<audio autoplay loop muted>
  <source src="{{ asset('images/spongebob-movie/bestDay.mp3') }}" type="audio/mpeg">
</audio>
<button id="unmute-button" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">🔈</button>
<!-- HEADER -->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/spongebob-movie/logo.png') }}" alt="Logo" height="150">
      </a>
      <div class="d-flex gap-2">
        <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-telegram"></i></a>
        <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-facebook-f"></i></a>
      </div>
    </div>
  </nav>
</header>

<!-- HERO SECTION -->
<section class="position-relative text-white">
  <!-- Background -->
  <img src="{{ asset('images/spongebob-movie/spons.jpg') }}" class="w-100" alt="Hero Image">

  <!-- Overlay Text -->
  <div  id="hero-text" class="position-absolute top-50 start-0 translate-middle-y ms-5">
    <h1 class="display-1 fw-bold">
      Last chance<br>to BUY<br>$BOB
    </h1>
    <p class="lead">before exchange listings</p>
    <h4 >
      $BOB
      <p class="small bg-dark px-2 py-1 rounded d-inline-block">
        DedcA5984780Bafc599bD69ADd087D56
      </p>
    </h4>
  </div>
 

</section>


<!--  SECTION 2 -->
<section class="section2" style="position: relative; width:100%;">
  <img src="{{ asset('images/spongebob-movie/nanas.jpg') }}" 
       alt="Last chance to buy $BOB"
       style="width:100%; display:block;">
  <!-- Buy -->
  <div class="buy" style="position:absolute; top:10px; right:20px; z-index:2;">
    <img src="{{ asset('images/spongebob-movie/buy.png') }}" alt="Get Buy" style="max-width:50vh;">
  </div>

  <!-- Slider -->
  <div class="slider" style="position:absolute; top:20%; left:10%; width:70vh; z-index:2;">
    <div class="swiper my-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('images/spongebob-movie/slider1.png') }}" alt="Slider 1">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('images/spongebob-movie/slider2.png') }}" alt="Slider 2">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('images/spongebob-movie/slider3.png') }}" alt="Slider 3">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('images/spongebob-movie/slider4.png') }}" alt="Slider 4">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

</section>

<!-- JUMP -->
<img class = "jump-image" src="{{ asset('images/spongebob-movie/jump2.png') }}" 
     alt="Jump">


<!-- SECTION 3 -->
<section class="section3" style="position: relative; width:100%; background:yellow;">
  <!-- Jump image ditempel di atas Section 3 -->

  <img src="{{ asset('images/spongebob-movie/pat-spons.jpg') }}" 
       class="w-100" alt="Background">
  <div style="position:absolute; top:30%; left:0; right:0; padding:1rem;">
    <img src="{{ asset('images/spongebob-movie/text-about.png') }}" 
         class="img-fluid" alt="Story">
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-primary text-white py-4 text-center">
  <p class="mb-2">©2025 SPONGEBOB. ALL rights reserved.</p>
  <div class="d-flex justify-content-center gap-2">
    <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-telegram"></i></a>
    <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-instagram"></i></a>
    <a href="#" class="btn btn-outline-light btn-circle"><i class="fa-brands fa-facebook-f"></i></a>
  </div>
</footer>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".my-slider", {
    loop: true,
    autoplay: { delay: 3000 }
  });
   const music = document.getElementById('background-music');
    const unmuteButton = document.getElementById('unmute-button');

    unmuteButton.addEventListener('click', function() {
        if (music.muted) {
            music.muted = false;
            unmuteButton.textContent = '🔇';
        } else {
            music.muted = true;
            unmuteButton.textContent = '🔈';
        }
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
