<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PotWiz - Join The Magic</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Font untuk fallback text --}}
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- Font Awesome untuk icon medsos --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/css/custom.css','resources/js/app.js'])

</head>
<body>

<header class="header">
    <div class="container">
        <nav class="navbar">
            <a href="#" class="logo">
                <img src="{{ asset('images/begin/Potwiz-01.png') }}" alt="PotWiz Logo">
            </a>
            <div class="nav-icons">
                <a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" aria-label="Telegram"><i class="fa-brands fa-telegram"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </nav>
    </div>
</header>

<main>
    <!-- Hero Section -->
   <section class="hero-cover">
     <img src="{{ asset('images/begin/cover2.png') }}" alt="PotWiz Character" class="hero-background">
   </section>

    <section class="hero">
        <!-- Background dekor garis -->
        <img src="{{ asset('images/begin/garis.png') }}" alt="PotWiz Garis" class="hero-decor">

        <!-- Overlay text -->
        <div class="hero-overlay">
            <img src="{{ asset('images/begin/join.png') }}" alt="Join PotWiz and Being a Galeonaires" class="hero-text">
            <img src="{{ asset('images/begin/dont.png') }}" alt="Don't miss out..." class="hero-subtext">
            <img src="{{ asset('images/begin/button.png') }}" alt="I'm ready being a Galeonaires" class="hero-button">
        </div>
    </section>



  <!-- About Potwiz Section -->

<section class="about-section" style="background-image: url('{{ asset('images/body/bg-castle.png') }}')">
  <div class="container about-content">
      <!-- Emblem -->
      <div class="about-logo">
          <img src="{{ asset('images/body/Emblem.png') }}" alt="Potwiz Emblem">
      </div>

      <!-- About Text -->
      <div class="about-text">
          <img src="{{ asset('images/body/about.png') }}" alt="About Potwiz Text" class="about-text-img">
      </div>
  </div>


<!-- Divider How to Get Galeon -->
<div class="divider-section">
  <img src="{{ asset('images/body/how.png') }}" alt="How to Get $Galeon" class="divider-img">
</div>

<!-- Community Section -->
<section class="community-section" style="background-image:url('{{ asset('images/community/bg-comunity.png') }}')">
  <div class="community-content">
    <!-- Poster = gambar teks; semua overlay (wizard & tombol) ditempel di sini -->
    <div class="poster">
      <!-- Wizard (boleh 1 sprite PNG berisi 3 karakter, atau 3 img terpisah) -->
      <div class="wizards">
        <!-- Jika kamu punya 1 file sprite -->
        <img src="{{ asset('images/community/wizard.png') }}" alt="Wizards">
      </div>

      <!-- Gambar teks (judul + paragraf sudah jadi PNG) -->
      <img class="poster-img" src="{{ asset(path: 'images/community/comunity.png') }}" alt="The Magic Echoes">

      <!-- Tombol di atas gambar -->
      <div class="btn-row">
        <a href="#" class="btn-enter">ENTER THE GATE</a>
        <a href="#" class="btn-chart">SEE CHART</a>
      </div>
    </div>
  </div>
</section>


</main>
<footer class="footer">
      <img class="poster-img" src="{{ asset(path: 'images/footer/foot.png') }}" alt="footer">
</footer>

</body>
</html>
