@extends('main')

@section('container')
    <div class="container-fluid my-5 statistik">
        <h1 class=" text-center mb-4">Data Statistik Banjir</h1>
        <table class="table table-hover border">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Daerah</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Kabupaten</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Penyebab</th>
                    <th scope="col">Meninggal</th>
                    <th scope="col">Hilang</th>
                    <th scope="col">Rumah Rusak</th>
                    <th scope="col">Rumah Terendam</th>
                    <th scope="col">Fasum Rusak</th>
                </tr>
            </thead>
            @foreach ($stats as $data)
                <tbody>
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->id_daerah }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->lokasi }}</td>
                        <td>{{ $data->kabupaten }}</td>
                        <td>{{ $data->provinsi }}</td>
                        <td>{{ $data->penyebab }}</td>
                        <td>{{ $data->meninggal }}</td>
                        <td>{{ $data->hilang }}</td>
                        <td>{{ $data->rumah_rusak }}</td>
                        <td>{{ $data->rumah_terendam }}</td>
                        <td>{{ $data->faasum_rusak }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
