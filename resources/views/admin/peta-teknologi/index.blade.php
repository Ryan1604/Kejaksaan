@extends('admin.layouts.master')
@section('title', 'Peta Sosial Budaya')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/css/map.css') }}">
@endsection

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Peta & Simbol sektor pada bidang teknologi dan produksi intelijen</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fas fa-map"></i>
                        Peta Sosial Budaya
                    </div>
                </div>
            </div>

            <div class="section-body">
                <div class="card card-primary">
                    <div class="card-body">
                        <section class="map">
                            <div class="wrap-map">
                                <img src="{{ asset('backend/img/yellow.png') }}" alt="full" class="yellow" onclick="yellow()">
                                <img src="{{ asset('backend/img/purple.png') }}" alt="full" class="purple" onclick="purple()">
                                <img src="{{ asset('backend/img/red.png') }}" alt="full" class="red" onclick="red()">
                                <img src="{{ asset('backend/img/green.png') }}" alt="full" class="green" onclick="green()">
                                <img src="{{ asset('backend/img/cream.png') }}" alt="full" class="cream" onclick="cream()">
                            </div>
                        </section>
                        <br><br><br>
                        <p id="kecamatan">Kecamatan : </p>
                        <div class="row text-center">
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/1_produksi intelijen.jpg') }}" alt="" width="100" height="100">
                                <p id="produksi">Produksi Intelijen ({{ count($produksi) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/2_pemantauan.jpg') }}" alt="" width="100" height="100">
                                <p id="pemantauan">Pemantauan ({{ count($pemantauan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/3_intelijen sinyal.jpg') }}" alt="" width="100" height="100">
                                <p id="signal">Intelijen signal ({{ count($signal) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/4_intelijen siber.jpg') }}" alt="" width="100" height="100">
                                <p id="siber">Intelijen siber ({{ count($siber) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/5_klandestine.jpg') }}" alt="" width="100" height="100">
                                <p id="klandestine">Klandestine ({{ count($klandestine) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/12_pengembangan sdm intelijen lainnya.jpg') }}" alt="" width="100" height="100">
                                <p id="sdm">Pengembangan SDM Intelijen ({{ count($sdm) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/14_pengembangan prosedur dan aplikasi.jpg') }}" alt="" width="100" height="100">
                                <p id="prosedur">Pengembangan Prosedur Aplikasi ({{ count($prosedur) }})</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row text-center">
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/6_digital forensik.jpg') }}" alt="" width="100" height="100">
                                <p id="digital">Digital Forensik ({{ count($digital) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/7_transmisi berita sandi.jpg') }}" alt="" width="100" height="100">
                                <p id="berita">Transmisi Berita Sandi ({{ count($berita) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/8_kontra penginderaan.jpg') }}" alt="" width="100" height="100">
                                <p id="kontra">Kontra Penginderaan ({{ count($kontra) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/9_audit & pengujian sistem keamanan informasi.jpg') }}" alt="" width="100" height="100">
                                <p id="audit">Audit Keamanan Informasi ({{ count($audit) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/10_pengamanan sinyal.jpg') }}" alt="" width="100" height="100">
                                <p id="pengamanan">Pengamanan Signal ({{ count($pengamanan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/teknologi/11_pengembangan sdm & sandi.jpg') }}" alt="" width="100" height="100">
                                <p id="sandi">Pengembangan SDM & Sandi ({{ count($sandi) }})</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script>
        function yellow() {
            var id = 5
            ajaxurl = '{{ route("admin.peta-teknologi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Selatan')
                    $('#produksi').html('Produksi Intelijen ('+ data[0].length +')')
                    $('#pemantauan').html('Pemantauan ('+ data[1].length +')')
                    $('#signal').html('Intelijen Signal ('+ data[2].length +')')
                    $('#siber').html('Intelijen Siber ('+ data[3].length +')')
                    $('#klandestine').html('Klandestine ('+ data[4].length +')')
                    $('#sdm').html('Pengembangan SDM Intelijen ('+ data[5].length +')')
                    $('#prosedur').html('Pengembangan Prosedur Aplikasi ('+ data[6].length+ ')')

                    $('#digital').html('Digital Forensik ('+ data[7].length +')')
                    $('#berita').html('Transmisi Berita Sandi ('+ data[8].length+ ')')
                    $('#kontra').html('Kontra Penginderaan ('+ data[9].length +')')
                    $('#audit').html('Audit Keamanan Informasi ('+ data[10].length +')')
                    $('#pengamanan').html('Pengamanan Signal ('+ data[11].length +')')
                    $('#sandi').html('Pengembangan SDM & Sandi ('+ data[12].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function purple() {
            var id = 4
            ajaxurl = '{{ route("admin.peta-teknologi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Tengah')
                    $('#produksi').html('Produksi Intelijen ('+ data[0].length +')')
                    $('#pemantauan').html('Pemantauan ('+ data[1].length +')')
                    $('#signal').html('Intelijen Signal ('+ data[2].length +')')
                    $('#siber').html('Intelijen Siber ('+ data[3].length +')')
                    $('#klandestine').html('Klandestine ('+ data[4].length +')')
                    $('#sdm').html('Pengembangan SDM Intelijen ('+ data[5].length +')')
                    $('#prosedur').html('Pengembangan Prosedur Aplikasi ('+ data[6].length+ ')')

                    $('#digital').html('Digital Forensik ('+ data[7].length +')')
                    $('#berita').html('Transmisi Berita Sandi ('+ data[8].length+ ')')
                    $('#kontra').html('Kontra Penginderaan ('+ data[9].length +')')
                    $('#audit').html('Audit Keamanan Informasi ('+ data[10].length +')')
                    $('#pengamanan').html('Pengamanan Signal ('+ data[11].length +')')
                    $('#sandi').html('Pengembangan SDM & Sandi ('+ data[12].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function red() {
            var id = 3
            ajaxurl = '{{ route("admin.peta-teknologi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Utara')
                    $('#produksi').html('Produksi Intelijen ('+ data[0].length +')')
                    $('#pemantauan').html('Pemantauan ('+ data[1].length +')')
                    $('#signal').html('Intelijen Signal ('+ data[2].length +')')
                    $('#siber').html('Intelijen Siber ('+ data[3].length +')')
                    $('#klandestine').html('Klandestine ('+ data[4].length +')')
                    $('#sdm').html('Pengembangan SDM Intelijen ('+ data[5].length +')')
                    $('#prosedur').html('Pengembangan Prosedur Aplikasi ('+ data[6].length+ ')')

                    $('#digital').html('Digital Forensik ('+ data[7].length +')')
                    $('#berita').html('Transmisi Berita Sandi ('+ data[8].length+ ')')
                    $('#kontra').html('Kontra Penginderaan ('+ data[9].length +')')
                    $('#audit').html('Audit Keamanan Informasi ('+ data[10].length +')')
                    $('#pengamanan').html('Pengamanan Signal ('+ data[11].length +')')
                    $('#sandi').html('Pengembangan SDM & Sandi ('+ data[12].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function green() {
            var id = 2
            ajaxurl = '{{ route("admin.peta-teknologi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Selatan')
                    $('#produksi').html('Produksi Intelijen ('+ data[0].length +')')
                    $('#pemantauan').html('Pemantauan ('+ data[1].length +')')
                    $('#signal').html('Intelijen Signal ('+ data[2].length +')')
                    $('#siber').html('Intelijen Siber ('+ data[3].length +')')
                    $('#klandestine').html('Klandestine ('+ data[4].length +')')
                    $('#sdm').html('Pengembangan SDM Intelijen ('+ data[5].length +')')
                    $('#prosedur').html('Pengembangan Prosedur Aplikasi ('+ data[6].length+ ')')

                    $('#digital').html('Digital Forensik ('+ data[7].length +')')
                    $('#berita').html('Transmisi Berita Sandi ('+ data[8].length+ ')')
                    $('#kontra').html('Kontra Penginderaan ('+ data[9].length +')')
                    $('#audit').html('Audit Keamanan Informasi ('+ data[10].length +')')
                    $('#pengamanan').html('Pengamanan Signal ('+ data[11].length +')')
                    $('#sandi').html('Pengembangan SDM & Sandi ('+ data[12].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function cream() {
            var id = 1
            ajaxurl = '{{ route("admin.peta-teknologi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Utara')
                    $('#produksi').html('Produksi Intelijen ('+ data[0].length +')')
                    $('#pemantauan').html('Pemantauan ('+ data[1].length +')')
                    $('#signal').html('Intelijen Signal ('+ data[2].length +')')
                    $('#siber').html('Intelijen Siber ('+ data[3].length +')')
                    $('#klandestine').html('Klandestine ('+ data[4].length +')')
                    $('#sdm').html('Pengembangan SDM Intelijen ('+ data[5].length +')')
                    $('#prosedur').html('Pengembangan Prosedur Aplikasi ('+ data[6].length+ ')')

                    $('#digital').html('Digital Forensik ('+ data[7].length +')')
                    $('#berita').html('Transmisi Berita Sandi ('+ data[8].length+ ')')
                    $('#kontra').html('Kontra Penginderaan ('+ data[9].length +')')
                    $('#audit').html('Audit Keamanan Informasi ('+ data[10].length +')')
                    $('#pengamanan').html('Pengamanan Signal ('+ data[11].length +')')
                    $('#sandi').html('Pengembangan SDM & Sandi ('+ data[12].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
    </script>
@endsection

