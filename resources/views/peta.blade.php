@extends('main')

@section('container')
    <h1 class="mb-3 text-center my-5">Peta Daerah Banjir</h1>
    <div class="dropdown text-center">
        <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Daerah
        </button>
        <ul class="dropdown-menu">
            @foreach ($maps as $peta)
                <li><a class="dropdown-item" data-bs-toggle="collapse" href="#{{ $peta->kabupaten }}" role="button"
                        aria-expanded="false" aria-controls="collapseExample">{{ $peta->kabupaten }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="container p-5">
        @foreach ($maps as $peta)
            <div class="collapse" id="{{ $peta->kabupaten }}">
                <div class="embed-responsive embed-responsive-16by9 text-center mb-5">
                    <a class="btn btn-danger mb-3" data-bs-toggle="collapse" href="#{{ $peta->kabupaten }}" role="button"
                        aria-expanded="true" aria-controls="collapseExample">Hapus</a><br>
                    {!! $peta->maps !!} <br>
                    {{ $peta->tanggal }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
