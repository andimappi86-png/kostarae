<!-- Modal Pilihan Daftar -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 shadow-lg" style="background-color:#1F2A32; color:#fff;">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-semibold" id="registerModalLabel">Daftar ke Kostaraé</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center">
        <p class="mb-4 text-white-50">Saya ingin mendaftar sebagai</p>

        <!-- Pilihan Pencari Kost -->
        <div class="d-flex align-items-center justify-content-between p-3 mb-3 rounded-3"
             style="background-color:#2D3A42; cursor:pointer;"
             onclick="window.location.href='{{ route('register.user') }}'">
          <div class="d-flex align-items-center gap-3">
            <div class="text-start">
              <h6 class="fw-semibold mb-0 text-white">Pencari Kost</h6>
              <small class="text-white-50">Temukan kost ideal sesuai kebutuhanmu</small>
            </div>
          </div>
          <i class="bi bi-chevron-right text-white"></i>
        </div>

        <!-- Pilihan Pemilik Kost -->
        <div class="d-flex align-items-center justify-content-between p-3 rounded-3"
             style="background-color:#2D3A42; cursor:pointer;"
             onclick="window.location.href='{{ route('register.owner') }}'">
          <div class="d-flex align-items-center gap-3">
            <div class="text-start">
              <h6 class="fw-semibold mb-0 text-white">Pemilik Kost</h6>
              <small class="text-white-50">Kelola dan promosikan properti kost kamu</small>
            </div>
          </div>
          <i class="bi bi-chevron-right text-white"></i>
        </div>
      </div>
    </div>
  </div>
</div>
