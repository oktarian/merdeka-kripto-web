<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Huskynaut - Join Meme Coin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @vite(['resources/css/app.css','resources/css/custom.css','resources/js/app.js'])
</head>
<body style="background-image: url('{{ asset('images/main-bg.jpg') }}')">

<header class="header">
    <div class="container">
        <nav class="navbar">
            <a href="#" class="logo">
                <img src="{{ asset('images/begin/logo.png') }}" alt="husky Logo">
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
    <section class="hero" style="background-image: url('{{ asset('images/begin/background.png') }}');">
        <div class="container">
            <img src="{{ asset('images/begin/title.png') }}" alt="Husky" class="hero-image hero-title">
            <img src="{{ asset('images/begin/moon.png') }}" alt="moon" class="hero-image hero-subtitle">
        <div class="token-container">
            <img src="{{ asset('images/begin/husky.png') }}" alt="husky" class="hero-image hero-character">
            <a href="#">
                <img src="{{ asset('images/begin/token.png') }}" alt="begin" class="hero-image hero-button">
            </a>
        </div>

        </div>
    </section>

    <section class="about" style="background-image: url('{{ asset('images/about/background.png') }}')">
        <div class="container about-container">
            <div class="about-character about-character-left">
            </div>

            <div class="about-content">
                <div class="about-heading">
                        <h3 class="about-subtitle">ABOUT</h3>
                        <h2 class="about-title">HUSKYNAUT</h2>
                </div>
                <img src="{{ asset('images/about/paragraph1.png') }}" alt="About Paragraph 1">
                <img src="{{ asset('images/about/paragraph2.png') }}" alt="About Paragraph 2">
            </div>
            <div class="about-character about-character-right">
            </div>
        </div>
    </section>

 

    <section class="guide" style="background-image: url('{{ asset('images/guide/background.png') }}')">
       <div class="container guide-container">
            <div class="guide-content">
                <img src="{{ asset('images/guide/how.png') }}" alt="How to get husky">
            </div>
            <div class="guide-characters">
            </div>
       </div>
    </section>

 

    <section class="community" style="background-image: url('{{ asset('images/community/background.png') }}')">
        <div class="container community-container">
            <img src="{{ asset('images/community/comunity.png') }}" alt="COMMUNITY" class="community-title">
            <img src="{{ asset('images/community/moon.png') }}" alt="Community Text" class="community-moon">
            <img src="{{ asset('images/community/paragraph1.png') }}" alt="paragraph 1" class="community-text">
            <img src="{{ asset('images/community/paragraph2.png') }}" alt="paragraph 2" class="community-text">
            
            <div class="community-buttons">
                <a href="#"><img src="{{ asset('images/community/join.png') }}" alt="Join" class="button-image"></a>
                <a href="#"><img src="{{ asset('images/community/chart.png') }}" alt="See Chart" class="button-image"></a>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; 2025 HUSKYNAUT. All rights reserved.</p>
    </div>
</footer>

</body>
</html>

