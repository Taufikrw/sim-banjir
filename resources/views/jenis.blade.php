@extends('main')

@section('container')
    <div class="container info-banjir py-5 px-5">
        {{-- Definisi Banjir --}}
        <h1 class=" mb-3 text-center">Banjir</h1>
        <p class=" text-center px-5">Banjir adalah salah satu peristiwa atau keadaan dimana terendamnya suatu daerah atau
            daratan karena volume
            air
            yang meningkat secara berlebihan dan menimbulkan kerugian fisik, sosial dan ekonomi.</p>

        {{-- Jenis Banjir --}}
        <div class="row row-cols-1 d-flex justify-content-center">
            @foreach ($jenis as $type)
                <div class="col-6 my-3">
                    <div class="card shadow h-100">
                        <img src="{{ $type->gambar }}" alt="sistem-pengendalian" class=" rounded">
                        <h2 class=" text-center px-2 my-2">{{ $type->nama }}</h2>
                        <p class=" text-center px-3">{{ $type->penjelasan }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container berita-banjir py-5 px-5">
        {{-- Berita Banjir --}}
        <h1 class=" mb-3 text-center">Berita</h1>
        <div class="row row-cols-1 d-flex justify-content-center">
            @foreach ($berita as $news)
                <div class="col-3 my-3">
                    <div class="card shadow h-100">
                        <img src="assets/img/{{ $news->gambar }}" alt="sistem-pengendalian" class=" rounded">
                        <h2 class=" text-center px-2 my-2">{{ $news->nama }}</h2>
                        <p class=" text-center px-3">{{ $news->tanggal }}</p>
                        <p class=" text-center px-3">{{ $news->judul }}</p>
                        <p class=" text-center"><a class=" text-decoration-none" href="{{ $news->link }}">Baca selenkapnya</a></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
