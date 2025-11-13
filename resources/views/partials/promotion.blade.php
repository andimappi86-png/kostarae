<section class="promotion-section py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center title-promo">Rekomendasi Kost Sekitar Kampus</h2>

        <div class="row g-4 justify-content-center">
            @php
                $promosi = [
                    [
                        'gambar' => 'kost1.jpg',
                        'judul' => 'Kost Eksklusif Dekat UNM',
                        'lokasi' => 'Makassar Selatan',
                        'rating' => 4.8,
                        'kelengkapan' => 'Siap Huni',
                        'harga' => 'Rp 1.200.000 /bulan',
                    ],
                    [
                        'gambar' => 'kost2.jpg',
                        'judul' => 'Kost Putri Modern IAIN',
                        'lokasi' => 'Jl. Perintis Kemerdekaan',
                        'rating' => 4.6,
                        'kelengkapan' => 'Sebagian',
                        'harga' => 'Rp 950.000 /bulan',
                    ],
                    [
                        'gambar' => 'kost3.jpg',
                        'judul' => 'Kost Putra Nyaman IAS',
                        'lokasi' => 'Tamalanrea',
                        'rating' => 4.9,
                        'kelengkapan' => 'Kosong',
                        'harga' => 'Rp 750.000 /bulan',
                    ],
                    [
                        'gambar' => 'kost4.jpg',
                        'judul' => 'Kost Premium UMPAR',
                        'lokasi' => 'Panakkukang',
                        'rating' => 4.7,
                        'kelengkapan' => 'Siap Huni',
                        'harga' => 'Rp 1.500.000 /bulan',
                    ],
                ];
            @endphp

            @foreach ($promosi as $item)
                <div class="col-10 col-md-6 col-lg-3">
                    <a href="{{ route('kost.detail', $loop->index + 1) }}" class="text-decoration-none">
                        <div class="promo-card shadow-sm">
                            <div class="promo-img">
                                <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['judul'] }}">
                                <div class="promo-badge">Tersedia</div>
                            </div>

                            <div class="promo-body p-3">
                                <h6 class="fw-semibold text-dark mb-1">{{ $item['judul'] }}</h6>
                                <p class="text-muted small mb-2">
                                    <i class="bi bi-geo-alt-fill text-primary me-1"></i>{{ $item['lokasi'] }}
                                </p>

                                <div class="promo-info d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-light text-dark kelengkapan">{{ $item['kelengkapan'] }}</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span class="text-dark small">{{ $item['rating'] }}</span>
                                    </div>
                                </div>

                                <div class="promo-price fw-bold text-orange mb-3">
                                    {{ $item['harga'] }}
                                </div>

                                <button class="btn btn-sm w-100 fw-semibold detail-btn">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn-view-all fw-semibold">
                Lihat Semua Kost
                <i class="bi bi-arrow-right-circle ms-2"></i>
            </a>
        </div>
    </div>
</section>
