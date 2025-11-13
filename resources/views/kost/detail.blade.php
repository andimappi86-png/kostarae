@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container detail-kost py-5 mt-4">

    {{-- Breadcrumb --}}
    <small class="text-muted breadcrumb-mini">
        <i class="bi bi-house"></i> / Kost / Detail / {{ $kost['nama'] }}
    </small>

    <div class="row mt-4 g-4">

        {{-- Foto utama --}}
        <div class="col-md-7">
            <div class="detail-main-img shadow">
                <img id="mainPreview" src="{{ asset('images/' . $kost['gambar']) }}"
                     class="img-fluid rounded"
                     data-bs-toggle="modal" data-bs-target="#fullscreenModal">
            </div>

            {{-- Thumbnail gallery --}}
            <div class="thumb-wrapper mt-3 d-flex gap-2 overflow-auto pb-2">
                @for ($i = 0; $i < 6; $i++)
                    <img src="{{ asset('images/' . $kost['gambar']) }}" 
                         class="thumbnail-img thumb shadow-sm"
                         data-bs-toggle="modal"
                         data-bs-target="#fullscreenModal"
                         onclick="openModal('{{ asset('images/' . $kost['gambar']) }}')">
                @endfor
            </div>
        </div>

        {{-- Informasi --}}
        <div class="col-md-5">
            <h2 class="fw-bold">{{ $kost['nama'] }}</h2>
            <p class="text-muted"><i class="bi bi-geo-alt"></i> {{ $kost['lokasi'] }}</p>

            <h3 class="text-danger fw-bold">{{ $kost['harga'] }}</h3>

            <p class="mb-2">
                ⭐ {{ $kost['rating'] }} / 5
                <small class="text-muted">({{ rand(80,300) }} ulasan)</small>
            </p>

            <p>{{ $kost['deskripsi'] }}</p>

            <h6 class="fw-bold">Fasilitas</h6>
            <div class="row mt-2">
                @foreach ($kost['fasilitas'] as $fas)
                    <div class="col-6 mb-2">
                        <span class="facility-badge shadow-sm">
                            <i class="bi bi-check-circle-fill"></i> {{ $fas }}
                        </span>
                    </div>
                @endforeach
            </div>

            <button class="btn btn-success w-100 mt-4">Pesan Sekarang</button>
        </div>
    </div>

    <hr class="my-5">

    {{-- Ulasan --}}
    <h4 class="fw-bold mb-3">Ulasan Penyewa</h4>
    <div class="review-item shadow-sm p-3 rounded mb-2">
        <b>Andi</b> <small class="text-muted">(Mahasiswa)</small>
        <p>Kost sangat bersih dan pemiliknya ramah!</p>
    </div>
    <div class="review-item shadow-sm p-3 rounded mb-2">
        <b>Siti</b> <small>(Pekerja)</small>
        <p>Lokasi dekat kampus, akses mudah.</p>
    </div>
    <div class="review-item shadow-sm p-3 rounded mb-2">
        <b>Rafi</b> <small>(Pegawai)</small>
        <p>Tempat tenang dan nyaman.</p>
    </div>

    {{-- Form Rating --}}
    <div class="mt-5">
        <h5>Berikan Rating:</h5>
        <div class="rating-stars d-flex gap-1">
            <i class="bi bi-star-fill star" data-value="1"></i>
            <i class="bi bi-star-fill star" data-value="2"></i>
            <i class="bi bi-star-fill star" data-value="3"></i>
            <i class="bi bi-star-fill star" data-value="4"></i>
            <i class="bi bi-star-fill star" data-value="5"></i>
        </div>

        <textarea class="form-control mt-3" rows="3" placeholder="Tulis komentar..."></textarea>

        <button class="btn btn-primary mt-3">Kirim Ulasan</button>
    </div>
</div>


{{-- Modal Fullscreen Carousel --}}
<div class="modal fade" id="fullscreenModal" tabindex="-1" style="margin-top:55px;">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-dark">
      <div class="modal-body text-center">

        <div id="carouselKost" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @for ($i = 0; $i < 6; $i++)
              <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                <img src="{{ asset('images/' . $kost['gambar']) }}" class="d-block w-100 rounded">
              </div>
            @endfor
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselKost" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselKost" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/kost_detail.js') }}"></script>
@endsection
