<nav id="mainNavbar" 
     class="navbar fixed-top d-flex align-items-center justify-content-between px-4 py-2 shadow-sm"
     style="background-color:#2D4A53; font-family:'Open Sans', sans-serif; transition: background-color 0.4s ease, box-shadow 0.4s ease;">
     
    <!-- Logo + Brand -->
    <div class="d-flex align-items-center gap-2">
        <img src="{{ asset('images/kosta.png') }}" alt="Logo KostTa" class="logo" style="height:40px;">
        <span class="brand-title fw-semibold" style="font-size:28px; color:#ffffff;">Kostaraé </span>
    </div>

    <!-- Menu Tengah -->
    <div class="d-flex align-items-center gap-4">
        <a href="{{ route('home') }}" class="text-white fw-semibold text-decoration-none" style="font-size:16px;">Beranda</a>
        <a href="{{ route('terms') }}" class="text-white fw-semibold text-decoration-none" style="font-size:16px;">Syarat dan Ketentuan</a>
        <a href="{{ route('help') }}" class="text-white fw-semibold text-decoration-none" style="font-size:16px;">Panduan</a>
        <a href="{{ route('contact') }}" class="text-white fw-semibold text-decoration-none" style="font-size:16px;">Kontak</a>
    </div>

    <!-- Tombol Daftar -->
    <div>
        <button class="btn fw-semibold px-4 py-2 rounded-3"
                style="background-color:#E07B3C; color:white; font-size:16px;"
                data-bs-toggle="modal"
                data-bs-target="#registerModal">
            Daftar
        </button>
    </div>
</nav>
