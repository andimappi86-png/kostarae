<section class="kost-kampus-section py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold" style="color:#2D4A53;">Kost Sekitar Kampus</h2>
            <a href="#" class="text-decoration-none fw-semibold" style="color:#E07B3C;">Lihat Semua</a>
        </div>

        <div class="row justify-content-center g-4">
            @php
                $kampus = [
                    ['logo' => 'iain.png', 'nama' => 'IAIN', 'alt' => 'IAIN'],
                    ['logo' => 'ias.png', 'nama' => 'IAS', 'alt' => 'IAS'],
                    ['logo' => 'ith.png', 'nama' => 'ITH', 'alt' => 'ITH'],
                    ['logo' => 'unm.png', 'nama' => 'UNM', 'alt' => 'UNM'],
                    ['logo' => 'umpar.png', 'nama' => 'UMPAR', 'alt' => 'UMPAR'],
                ];
            @endphp

            @foreach ($kampus as $item)
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card kampus-card text-center shadow-sm border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/' . $item['logo']) }}" alt="{{ $item['alt'] }}" class="img-fluid mb-3 kampus-logo">
                            <h6 class="fw-semibold text-dark">{{ $item['nama'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
