<section class="hero-section position-relative d-flex justify-content-center align-items-center text-white">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>

  <div class="container text-center position-relative z-2">
    <h1 class="hero-title fw-bold mb-3">
      Temukan Kost <span class="text-accent">Impianmu</span><br> Dengan Nyaman dan Modern
    </h1>
    <p class="hero-subtitle mb-2">
      Jelajahi pilihan kost eksklusif dengan lokasi strategis, harga bersahabat, dan desain kekinian.
    </p>

    <!-- FORM PENCARIAN -->
    <form class="hero-search bg-white text-dark rounded-4 shadow-lg mx-auto">
      <div class="row g-3 align-items-end justify-content-center">
        <!-- Lokasi -->
        <div class="col-12 text-start">
          <label class="form-label fw-semibold small mb-2">Kota, tujuan, atau nama kost</label>
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
              <i class="bi bi-geo-alt"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Cari lokasi kost..." />
          </div>
        </div>

        <!-- Harga Minimum -->
        <div class="col-lg-3 col-md-6 text-start">
          <label class="form-label small fw-semibold mb-2">Harga Minimum</label>
          <input type="number" class="form-control rounded-3 shadow-sm" placeholder="Rp 200.000" />
        </div>

        <!-- Harga Maksimum -->
        <div class="col-lg-3 col-md-6 text-start">
          <label class="form-label small fw-semibold mb-2">Harga Maksimum</label>
          <input type="number" class="form-control rounded-3 shadow-sm" placeholder="Rp 2.000.000" />
        </div>

        <!-- Tipe Kost -->
        <div class="col-lg-3 col-md-6 text-start">
          <label class="form-label small fw-semibold mb-2">Tipe Kost</label>
          <select class="form-select rounded-3 shadow-sm">
            <option selected>Tipe Kost</option>
            <option>Putra</option>
            <option>Putri</option>
            <option>Campur</option>
          </select>
        </div>

        <!-- Kelengkapan -->
        <div class="col-lg-3 col-md-6 text-start">
          <label class="form-label small fw-semibold mb-2">Kelengkapan</label>
          <select class="form-select rounded-3 shadow-sm">
            <option selected>Kelengkapan</option>
            <option>Siap Huni   </option>
            <option>Sebagian </option>
            <option>Kosong   </option>
          </select>
        </div>

        <!-- Tombol Cari -->
        <div class="col-12 d-flex justify-content-center mt-2">
          <button type="submit" class="btn btn-orange-modern fw-semibold px-5 py-3">
            <i class="bi bi-search me-2"></i> Cari Kost
          </button>
        </div>
      </div>
    </form>
  </div>
</section>
