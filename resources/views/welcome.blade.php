<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andromeda Coin - Kebebasan Finansial Digital</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">

    {{-- Vite (CSS & JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- ====================================================================== --}}
    {{-- HEADER / NAVIGASI --}}
    {{-- ====================================================================== --}}
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo-container">
                    <img src="{{ asset('images/image.png') }}" alt="Logo Andromeda Coin">
                    <h1>AndromedaCOIN</h1>
                </a>
                <div class="nav-links">
                    <a href="#profil">Profil</a>
                    <a href="#roadmap">Roadmap</a>
                    <a href="#kontak">Kontak</a>
                </div>
                <a href="#kontak" class="tombol tombol-utama">Hubungi Kami</a>
            </nav>
        </div>
    </header>

    <main>
        {{-- ====================================================================== --}}
        {{-- HERO SECTION --}}
        {{-- ====================================================================== --}}
        <section id="hero" class="hero" style="background-image: url('{{ asset('images/bg1.jpg') }}')">
            <div class="hero-overlay"></div>
            <div class="hero-content container">
                <h2>Kunci Anda Menuju Kebebasan Finansial</h2>
                <p>
                    Andromeda Coin adalah aset digital yang dirancang untuk memberdayakan individu dengan teknologi
                    blockchain yang transparan, aman, dan terdesentralisasi.
                </p>
                <div>
                    <!-- <a href="#" class="tombol tombol-hero-utama">Download Whitepaper</a> -->
                    <a href="#profil" class="tombol tombol-hero-sekunder">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </section>

        {{-- ====================================================================== --}}
        {{-- PROFIL (VISI & MISI) SECTION --}}
        {{-- ====================================================================== --}}
        <section id="profil" class="section">
            <div class="container">
                <h3 class="section-judul">Tentang Andromeda Coin</h3>
                <p class="section-subjudul">Visi, Misi, dan Teknologi di Balik Proyek.</p>
                <div class="profil-konten">
                    <div class="profil-item">
                        <h4>Visi Kami</h4>
                        <p>Menciptakan ekosistem keuangan digital yang inklusif dan dapat diakses oleh seluruh masyarakat Indonesia, membebaskan mereka dari batasan finansial konvensional dan membuka pintu menuju keAndromedaan ekonomi.</p>
                    </div>
                    <div class="profil-item">
                        <h4>Misi Kami</h4>
                        <p>Menyediakan platform aset digital yang aman, transparan, dan mudah digunakan. Mengedukasi masyarakat tentang potensi teknologi blockchain. Serta membangun komunitas yang kuat, suportif, dan berjiwa gotong royong.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ====================================================================== --}}
        {{-- ROADMAP SECTION --}}
        {{-- ====================================================================== --}}
        <section id="roadmap" class="section section-putih">
             <div class="container">
                <h3 class="section-judul">Roadmap</h3>
                <p class="section-subjudul">Langkah kami menuju masa depan desentralisasi.</p>
                <div class="roadmap-timeline">
                    <div class="roadmap-item">
                        <div class="roadmap-dot"></div>
                        <div class="roadmap-content">
                            <h5>Q4 2025: Fase Inisiasi</h5>
                            <p>Peluncuran website, publikasi whitepaper, dan pembentukan komunitas awal.</p>
                        </div>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-dot"></div>
                        <div class="roadmap-content">
                            <h5>Q1 2026: Pengembangan</h5>
                            <p>Audit smart contract, pengembangan platform awal, dan menjalin kemitraan strategis.</p>
                        </div>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-dot"></div>
                        <div class="roadmap-content">
                            <h5>Q2 2026: Peluncuran Awal</h5>
                            <p>Initial Coin Offering (ICO), listing di exchange, dan peluncuran fitur staking.</p>
                        </div>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-dot"></div>
                        <div class="roadmap-content">
                            <h5>Q3 2026: Ekspansi Ekosistem</h5>
                            <p>Pengembangan DApps, integrasi dengan merchant, dan program adopsi massal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ====================================================================== --}}
        {{-- KONTAK SECTION --}}
        {{-- ====================================================================== --}}
        <section id="kontak" class="section">
            <div class="container">
                <h3 class="section-judul">Hubungi Kami</h3>
                <p class="section-subjudul">Punya pertanyaan atau proposal? Kami siap mendengarkan.</p>

                <form action="{{ route('contact.submit') }}" method="POST" class="form-kontak">
                    @csrf
                    <div class="form-grup">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>
                    <div class="form-grup">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                    <div class="form-grup">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="form-textarea" required></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="tombol tombol-utama">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    {{-- ====================================================================== --}}
    {{-- FOOTER --}}
    {{-- ====================================================================== --}}
   <footer class="footer">
        <div class="container">
            <p class="logo-text">Andromeda COIN</p>
            <div class="social-icons">
                <a href="#">
                    {{-- Instagram Icon --}}
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.058 1.644-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.059 1.689.073 4.948.073s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"/></svg>
                </a>
                <a href="#">
                    {{-- Facebook Icon --}}
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v2.385z"/></svg>
                </a>
                <a href="#">
                    {{-- Twitter/X Icon --}}
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="#">
                    {{-- TikTok Icon --}}
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M19.333 3.333h-3.333v13.333c0 2.761-2.239 5-5 5s-5-2.239-5-5 2.239-5 5-5c.773 0 1.503.181 2.14.5v-3.35c-.615-.175-1.269-.283-1.973-.283-3.866 0-7 3.134-7 7s3.134 7 7 7 7-3.134 7-7v-10h3.333z"/></svg>
                </a>
            </div>
            <p class="copyright">&copy; {{ date('Y') }} Andromeda Coin. Semua Hak Dilindungi.</p>
            <p class="disclaimer">Disclaimer: Investasi aset kripto memiliki risiko tinggi. Lakukan riset Anda sendiri.</p>
        </div>
    </footer>
</body>
</html>