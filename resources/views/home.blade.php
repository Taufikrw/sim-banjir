@extends('main')

@section('container')
    {{-- Carousel --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($news as $berita)
                <div class="carousel-item {{ $berita->id === 1 ? 'active' : '' }}">
                    <img src="assets/img/{{ $berita->gambar }}" class="darkened-image d-block w-100"
                        alt="{{ $berita->gambar }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $berita->tanggal }}</h5>
                        <h3>{{ $berita->judul }}</h3>
                        <p>{{ $berita->penjelasan }}<a href="{{ $berita->link }}"
                                class="text-decoration-none text-white">Baca Selengkapnya</a></p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Definisi Bencana --}}
    <div class="container definisi-bencana my-5">
        <div class="row d-flex justify-content-center border py-5 shadow rounded">
            <h2 class=" text-center mb-4">Definisi Bencana</h2>
            <div class="col-3">
                <img src="https://ahlirisiko.bnpb.go.id/images/dev/LOGO-BNPB.png" alt="bencana" class="img-defben">
            </div>
            <div class="col-7">
                <div class="container def-bencana">
                    <p>Definisi Bencana Undang-undang Nomor 24 Tahun 2007 Tentang Penanggulangan Bencana menyebutkan
                        definisi bencana
                        sebagai berikut:</p>
                    <p><strong>Bencana</strong> adalah peristiwa atau rangkaian peristiwa yang mengancam dan mengganggu
                        kehidupan dan
                        penghidupan masyarakat yang disebabkan, baik oleh faktor alam dan/atau faktor non alam maupun faktor
                        manusia
                        sehingga mengakibatkan timbulnya korban jiwa manusia, kerusakan lingkungan, kerugian harta benda,
                        dan dampak
                        psikologis.</p>
                    <p>Definisi tersebut menyebutkan bahwa bencana disebabkan oleh faktor alam, non alam, dan manusia. Oleh
                        karena itu,
                        Undang-Undang Nomor 24 Tahun 2007 tersebut juga mendefinisikan mengenai bencana alam, bencana non
                        alam, dan
                        bencana sosial.</p>
                    <p><strong>Bencana Alam</strong> adalah bencana yang diakibatkan oleh peristiwa atau serangkaian
                        peristiwa yang
                        disebabkan oleh alam antara lain berupa gempa bumi, tsunami, gunung meletus, banjir, kekeringan,
                        angin topan,
                        dan tanah longsor.</p>
                    <p><strong>Bencana non Alam</strong> adalah bencana yang diakibatkan oleh peristiwa atau rangkaian
                        peristiwa non
                        alam yang antara lain berupa gagal teknologi, gagal modernisasi, epidemi, dan wabah penyakit.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Informasi lebih lanjut --}}
    <div class="container-fluid informasi-lanjut">
        <h2 class=" text-center mb-5 text-white">Dapatkan informasi lengkap mengenai banjir disini</h2>
        <div class="d-flex justify-content-center gap-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front shadow p-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="https://pantaubanjir.jakarta.go.id/media/svg/panggilan-darurat.svg" alt="panggilan-darurat"
                            style="width: 100px; height: 100px">
                        <h5 class=" mt-3">Panggilan Darurat</h5>
                    </div>
                    <div class="flip-card-back p-3 d-flex align-items-center">
                        <p>Untuk panggilan darurat saja hubungi 112</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front shadow p-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="https://pantaubanjir.jakarta.go.id/media/svg/info-banjir.svg" alt="info-banjir"
                            style="width: 100px; height: 100px">
                        <h5 class=" mt-3">Info Banjir</h5>
                    </div>
                    <div class="flip-card-back p-3 d-flex flex-column justify-content-center align-items-center">
                        <p>Semua yang perlu kamu tahu tentang banjir</p>
                        <a href="/info"><button type="button" class="btn btn-outline-secondary">Lihat</button></a>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front shadow p-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/1029/1029758.png?w=740&t=st=1669124888~exp=1669125488~hmac=6f625679ab2b9579a5e0169304c4a35b368aa4ba3e755af2d360693df57480cc" alt="mitigasi-banjir"
                            style="width: 80px; height: 80px">
                        <h5 class=" mt-3">Mitigasi</h5>
                    </div>
                    <div class="flip-card-back p-3 d-flex flex-column justify-content-center align-items-center">
                        <p>Upaya yang harus kamu lakukan untuk mengurangi resiko bencana banjir</p>
                        <a href="/mitigasi"><button type="button" class="btn btn-outline-secondary">Lihat</button></a>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front shadow p-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="https://pantaubanjir.jakarta.go.id/media/svg/peta-bencana.svg" alt="peta-banjir"
                            style="width: 100px; height: 100px">
                        <h5 class=" mt-3">Peta Banjir</h5>
                    </div>
                    <div class="flip-card-back p-3 d-flex flex-column justify-content-center align-items-center">
                        <p>Temukan titik lokasi terdampak banjir</p>
                        <a href="/peta-banjir"><button type="button" class="btn btn-outline-secondary">Lihat</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center gap-5 my-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front shadow p-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="https://pantaubanjir.jakarta.go.id/media/svg/akses-data.svg" alt="data-statistik"
                            style="width: 100px; height: 100px">
                        <h5 class=" mt-3">Data Statistik</h5>
                    </div>
                    <div class="flip-card-back p-3 d-flex flex-column justify-content-center align-items-center">
                        <p>Visualisasi data kebencanaan banjir di Indonesia</p>
                        <a href="/data-statistik"><button type="button" class="btn btn-outline-secondary">Lihat</button></a>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front shadow p-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="https://pantaubanjir.jakarta.go.id/media/svg/tanya-jawab.svg" alt="faq"
                            style="width: 100px; height: 100px">
                        <h5 class=" mt-3">FAQ</h5>
                    </div>
                    <div class="flip-card-back p-3 d-flex flex-column justify-content-center align-items-center">
                        <p>Temukan berbagai pertanyaan dan jawaban terkait banjir di sini</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($news as $berita)
        {!! $berita->isi !!}
    @endforeach
@endsection
