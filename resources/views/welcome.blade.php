<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKAZA - The Dawn of Sakaz</title>
    
    {{-- Font Awesome untuk Ikon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    {{-- Vite (CSS & JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="header">
        
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">THE AKAZA RETURN</a>
                <div class="nav-icons">
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" aria-label="Telegram"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        {{-- ====================================================================== --}}
        {{-- HERO SECTION --}}
        {{-- ====================================================================== --}}
        <section class="section hero">
            <video autoplay loop muted playsinline class="video-background">
                <source src="{{ asset('videos/vidvs.mp4') }}" type="video/mp4">
            </video>
            <div class="container">
                <h1 class="section-title text-glow">THE BEAUTY OF AKAZA</h1>
                <p class="section-text">
                    One of the last of his kind, akaza doesn't whisper, it roars. A battle cry against the centralized shadows, a call for the pack to rise.
                </p>
                <button class="copy-button">COPY CA $AKZ</button>
            </div>
        </section>

        <div class="section-divider">
            <div class="divider-line"></div>
            <img src="{{ asset('images/salju.png') }}" alt="Divider" class="divider-icon">
        </div>

        {{-- ====================================================================== --}}
        {{-- SPIRIT SECTION --}}
        {{-- ====================================================================== --}}
        <section class="section section-video section-spirit">
             <video autoplay loop muted playsinline class="video-background">
                <source src="{{ asset('videos/vid4.mp4') }}" type="video/mp4">
            </video>
            <div class="container">
                <h2 class="section-title text-glow">THE SPIRIT BEHIND THE BLADE</h2>
                <p class="section-text">
                    This isn't just a digital token; it carries a sharpened edge. A symbol of resilience for the outcasts, the lone wolves. Join the chaos and cut through it. Holders aren't just investors; they are hunters. And the hunt never ends.
                </p>
            </div>
        </section>
        
        <!-- <div class="section-divider">
            <div class="divider-line"></div>
            <img src="{{ asset('images/salju.png') }}" alt="Divider" class="divider-icon">
        </div> -->

        {{-- ====================================================================== --}}
        {{-- PATH SECTION --}}
        {{-- ====================================================================== --}}
        <section class="section section-video section-path">
            <video autoplay loop muted playsinline class="video-background">
                <source src="{{ asset('videos/vid3.mp4') }}" type="video/mp4">
            </video>
            <div class="container">
                <div class="info-box">
                    <h3 class="section-title" style="font-size: 1.5rem;">HOW THE PATH UNFOLDS</h3>
                    <p style="color: var(--text-dark);">
                        The journey is a hunt. We don't bow to corporate chains. It's a maelstrom. akaza strikes from the shadows. The horde gathers. The dance begins. Wild movements, where prices clash and fortunes are forged in the battle. How we choose to party is akaza.
                    </p>
                </div>
            </div>
        </section>

        <div class="section-divider">
            <div class="divider-line"></div>
            <img src="{{ asset('images/salju.png') }}" alt="Divider" class="divider-icon">
        </div>

        {{-- ====================================================================== --}}
        {{-- HOW TO BUY SECTION --}}
        {{-- ====================================================================== --}}
        <section class="section">
            <div class="sakura-container">
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
            </div>
            <div class="container">
                <h2 class="section-title text-glow">HOW TO BUY $AKZ</h2>
                <ul class="how-to-buy-list">
                    <li class="how-to-buy-item">
                        <span class="number">1</span>
                        <p>Create a wallet. Download Phantom or your wallet of choice from the app store or google play store for free.</p>
                    </li>
                    <li class="how-to-buy-item">
                        <span class="number">2</span>
                        <p>Get some SOL. Have SOL in your wallet to swap to $AKZ. If you don’t have any SOL, you can buy directly on Phantom.</p>
                    </li>
                    <li class="how-to-buy-item">
                        <span class="number">3</span>
                        <p>Go to Raydium. Connect to Raydium. Go to Raydium in google chrome or on the browser inside your Phantom app.</p>
                    </li>
                     <li class="how-to-buy-item">
                        <span class="number">4</span>
                        <p>Swap SOL for $AKZ. We have ZERO taxes so you don’t need to worry about buying with a specific slippage.</p>
                    </li>
                </ul>
            </div>
        </section>

        <div class="section-divider">
            <div class="divider-line"></div>
            <img src="{{ asset('images/salju.png') }}" alt="Divider" class="divider-icon">
        </div>

        {{-- ====================================================================== --}}
        {{-- STAND WITH US SECTION --}}
        {{-- ====================================================================== --}}
      <section class="section section-video section-hunters">
            <video autoplay loop muted playsinline class="video-background">
                <source src="{{ asset('videos/vid5.mp4') }}" type="video/mp4">
            </video>
            <div class="container">
                <h2 class="section-title text-glow">STAND WITH THE HUNTERS</h2>
                <p class="section-text">
                    Join the ranks. Share the spoils and hunt together with those who never rest.
                </p>
            </div>
        </section>
    </main>

    {{-- ====================================================================== --}}
    {{-- FOOTER --}}
    {{-- ====================================================================== --}}
    <footer class="footer">
        <div class="container">
            <p class="copyright">&copy; 2025 AKAZA</p>
        </div>
    </footer>

</body>
</html>
