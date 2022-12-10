@extends('main')

@section('container')
    {{-- Mitigasi --}}
    <div class="container mitigasi pt-5 px-5">
        <h1 class=" mb-3 text-center">Mitigasi Banjir</h1>
        <p class=" text-center px-5">MItigasi bencana adalah segala upaya untuk mengurangi risiko bencana. Program mitigasi
            bencana dapat dilakukan melalui pembangunan secara fisik maupun peningkatan kemampuan menghadapi ancaman
            bencana. Dalam bencana banjir terdapat tiga jenis mitigasi yang bisa dilakukan, sebagai berikut</p>
        <div class="d-flex justify-content-center gap-4 mt-5">
            <div class="card card-mitigasi p-3 d-flex flex-column justify-content-center align-items-center shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/1246/1246376.png?w=740&t=st=1669136756~exp=1669137356~hmac=69281f9978049c6b357565dc64a828fb989148020149c87edaf2a7308e4b370c"
                    alt="pra-bencana">
                <h4 class=" mt-3">Pra Bencana</h4>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#prabencana" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Lihat
                </a>
            </div>
            <div class="card card-mitigasi p-3 d-flex flex-column justify-content-center align-items-center shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/1255/1255631.png?w=740&t=st=1669136715~exp=1669137315~hmac=7984f56c661eae9f90b3e02785099874e3b212d2c93cf3ec26c311e9833fbcef"
                    alt="pra-bencana">
                <h4 class=" mt-3">Saat Bencana</h4>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#saatbencana" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Lihat
                </a>
            </div>
            <div class="card card-mitigasi p-3 d-flex flex-column justify-content-center align-items-center shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/953/953934.png?w=740&t=st=1669136815~exp=1669137415~hmac=87977eaf19522e60229b4bc7acb4e4ac2a05799aa6b1627c4ba17a6dab221669"
                    alt="pra-bencana">
                <h4 class=" mt-3">Pasca Bencana</h4>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#pascabencana" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Lihat
                </a>
            </div>
        </div>
        <div class="collapse" id="prabencana">
            <div class="card card-body my-5 shadow">
                <h2>Pra Bencana</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Sosialisasi dan memberikan pelatihan kepada masyarakat yang tinggal di
                        daerah rawan banjir dalam menghadapi banjir.
                    </li>
                    <li class="list-group-item">Membersihkan saluran pembuangan limbah cair rumah tangga seperti got atau
                        sungai kecil</li>
                    <li class="list-group-item">Membuat Standar Operasi Prosedur bencana banjir pada lingkup RT/RW</li>
                </ul>
            </div>
        </div>
        <div class="collapse" id="saatbencana">
            <div class="card card-body my-5 shadow my-5 shadow">
                <h2>Saat Bencana</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pantau perkembangan cuaca ditempat kejadian
                    </li>
                    <li class="list-group-item">Warga yang terkena banjir diimbau menjaga kesehatan agar tidak menambah
                        korban banjir </li>
                    <li class="list-group-item">Jangan panik dan berusaha untuk bisa menyelamatkan diri</li>
                    <li class="list-group-item">Bila hujan tidak berhenti dan menjadi lebat, segera evakuasi warga ketempat
                        yang lebih tinggi dan aman sesuai informasi dari aparat setempat</li>
                    <li class="list-group-item">Membantu mereka yang membutuhkan tempat tinggi bagi mereka yang terluka
                        akibat banjir</li>
                    <li class="list-group-item">Bijak dalam menggunakan air bersih</li>
                    <li class="list-group-item">Bila memungkinkan selamatkan dokumen-dokumen penting</li>
                    <li class="list-group-item">Berhati-hati dengan kabel yang masih teraliri aliran listrik</li>
                    <li class="list-group-item">Bila terjebak di banjir atau di dalam bangunan sebisa mungkin mengambil
                        benda yang mengapung agar tidak tenggelam</li>
                </ul>
            </div>
        </div>
        <div class="collapse" id="pascabencana">
            <div class="card card-body my-5 shadow">
                <h2>Pasca Bencana</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Membersihkan tempat tinggal dan lingkungan yang terkena banjir</li>
                    <li class="list-group-item">Memeriksa ketersediaan air bersih</li>
                    <li class="list-group-item">Memperbaiki jamban dan saluran pembuangan air limbah</li>
                    <li class="list-group-item">Menjaga sistem pembuangan air dan limbah agar tidak kotor ataupun tersumbat
                    </li>
                    <li class="list-group-item">Tidak menggunakan air bersih secara semena-mena</li>
                    <li class="list-group-item">Menjaga kabel listrik agar tidak terjadi kejadian yang tidak diinginkan</li>
                    <li class="list-group-item">Menghindari wilayah yang sudah rusak seperti bangunan yang sudah tidak layak
                        pakai</li>
                    <li class="list-group-item">Memberikan bantuan kepada yang membutuhkan bantuan seperti tempat tinggal,
                        obat, makanan, dan pakaian</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Wave --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#018ABD" fill-opacity="1"
            d="M0,160L48,160C96,160,192,160,288,170.7C384,181,480,203,576,208C672,213,768,203,864,197.3C960,192,1056,192,1152,197.3C1248,203,1344,213,1392,218.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    {{-- Pengendalian --}}
    <div class="container-fluid pengendalian p-5">
        <h1 class=" text-center mb-3 text-white">Pengendalian</h1>
        <div class="container">
            <div class="row row-cols-1 d-flex justify-content-center">
                <div class="col-4 my-3">
                    <div class="card shadow h-100">
                        <img src="https://dpu.kulonprogokab.go.id/files/file_uploads/48116bad5fd5b9092e16d5fed9eaf876.jpg"
                            alt="sistem-pengendalian" class=" rounded">
                        <h2 class=" text-center px-2 my-2">Sistem Pengendalian Banjir</h2>
                        <p class=" text-center px-3">Sistem pengendalian banjir dari sistem drainase utama, sistem drainase kedua, dan sistem
                            waduk-pompa. Sistem drainase utama sendiri dibagi kembali menjadi Banjir Kanal Barat dan Banjir
                            Kanal Timur. Hujan lokal pun akan dialirkan secara gravitasi ke sistem drainase kedua yang
                            kemudian dibuang ke sistem utama hingga berakhir di laut. Sistem waduk-pompa membantu menyedot
                            air yang menggenang dan mengembalikannya ke aliran sungai.
                        </p>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="card shadow h-100">
                        <img src="https://img.inews.co.id/media/822/files/inews/banjir_kendal2.jpg"
                            alt="pompa-air" class=" rounded">
                        <h2 class=" text-center px-2 my-2">Pompa Air</h2>
                        <p class=" text-center px-3">Fungsi utama pompa-pompa ini adalah untuk memompa air dari tempat rendah ke tempat tinggi. Sehingga dapat memitigasi banjir dengan menyedot air yang menggenang dan mengalirkannya ke tempat yang seharusnya, seperti sungai. Semua pompa air stasioner juga dilengkapi dengan sensor, sehingga status operasionalnya dapat selalu dilacak
                        </p>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="card shadow h-100">
                        <img src="https://statik.tempo.co/data/2021/10/11/id_1057559/1057559_720.jpg"
                            alt="drainase-vertikal" class=" rounded">
                        <h2 class=" text-center px-2 my-2">Drainase Vertikal</h2>
                        <p class=" text-center px-3">Salah satu metode penanganan banjir yang dapat digunakan adalah pembangunan drainase vertikal, dikenal juga sebagai sumur resapan. Selain untuk menampung air, daya serap drainase vertikal juga dapat membantu mempercepat peresapan air ke dalam tanah.</p>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="card shadow h-100">
                        <img src="https://arparts.id/storage/2021/01/qq.jpg"
                            alt="alat-berat" class=" rounded">
                        <h2 class=" text-center px-2 my-2">Alat Berat</h2>
                        <p class=" text-center px-3">Alat berat digunakan untuk mitigasi banjir yang dapat dilakukan, seperti pengerukan waduk/situ/embung, kali/sungai, dan saluran air.
                        </p>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="card shadow h-100">
                        <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/09/30/1900891582.jpg"
                            alt="gerebek-lumpur" class=" rounded">
                        <h2 class=" text-center px-2 my-2">Gerebek Lumpur</h2>
                        <p class=" text-center px-3">Alat berat digunakan untuk mitigasi banjir yang dapat dilakukan, seperti pengerukan waduk/situ/embung, kali/sungai, dan saluran air.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
