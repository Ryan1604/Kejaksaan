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
                <h1>Peta & Simbol sektor pada bidang pengamanan pembangunan strategis</h1>
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
                                <img src="{{ asset('backend/img/pembangunan/1_infrastruktur jalan.jpg') }}" alt="" width="100" height="100">
                                <p id="jalan">Infrastuktur Jalan ({{ count($jalan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/2_infrastruktur perkeretaapian.jpg') }}" alt="" width="100" height="100">
                                <p id="kereta">Infrastuktur Kereta ({{ count($kereta) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/3_infrastruktur kebandarudaraan.jpg') }}" alt="" width="100" height="100">
                                <p id="bandara">Infrastuktur Bandara ({{ count($bandara) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/4_infrastruktur telekomunikasi.jpg') }}" alt="" width="100" height="100">
                                <p id="telekomunikasi">Infrastuktur Telekomunikasi ({{ count($telekomunikasi) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/5_infrastruktur kepelabuhanan.jpg') }}" alt="" width="100" height="100">
                                <p id="pelabuhan">Infrastuktur Pelabuhan ({{ count($pelabuhan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/12_ketenagalistrikan.jpg') }}" alt="" width="100" height="100">
                                <p id="listrik">Ketenagalistrikan ({{ count($listrik) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/13_energi alternatif.jpg') }}" alt="" width="100" height="100">
                                <p id="energi">Energi Alternatif ({{ count($energi) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/14_minyak dan gas bumi.jpg') }}" alt="" width="100" height="100">
                                <p id="minyak">Minyak dan Gas Bumi ({{ count($minyak) }})</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row text-center">
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/15_ilmu pengetahuan dan teknologi.jpg') }}" alt="" width="100" height="100">
                                <p id="ilmu">Ilmu Pengetahuan Teknologi ({{ count($ilmu) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/6_smelter.jpg') }}" alt="" width="100" height="100">
                                <p id="smelter">Smelter ({{ count($smelter) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/7_infrastruktur pengolahan air.jpg') }}" alt="" width="100" height="100">
                                <p id="air">Infrastuktur Pengolahan Air ({{ count($air) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/8_tanggul.jpg') }}" alt="" width="100" height="100">
                                <p id="tanggul">Tanggul ({{ count($tanggul) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/9_bendungan.jpg') }}" alt="" width="100" height="100">
                                <p id="bendungan">Bendungan ({{ count($bendungan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/10_pertanian.jpg') }}" alt="" width="100" height="100">
                                <p id="pertanian">Pertanian ({{ count($pertanian) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/11_kelautan.jpg') }}" alt="" width="100" height="100">
                                <p id="kelautan">Kelautan ({{ count($kelautan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/16_perumahan.jpg') }}" alt="" width="100" height="100">
                                <p id="perumahan">Perumahan ({{ count($perumahan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/17_pariwisata.jpg') }}" alt="" width="100" height="100">
                                <p id="pariwisata">Pariwisata ({{ count($pariwisata) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pembangunan/18_kawasan industri prioritas.jpg') }}" alt="" width="100" height="100">
                                <p id="industri">Kawasan Industri ({{ count($industri) }})</p>
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
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Selatan')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function purple() {
            var id = 4
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Tengah')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function red() {
            var id = 3
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Utara')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function green() {
            var id = 2
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Selatan')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function cream() {
            var id = 1
            ajaxurl = '{{ route("admin.peta-pembangunan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Utara')
                    $('#jalan').html('Infrastuktur Jalan ('+ data[0].length +')')
                    $('#kereta').html('Infrastuktur Kereta ('+ data[1].length +')')
                    $('#bandara').html('Infrastuktur Bandara ('+ data[2].length +')')
                    $('#telekomunikasi').html('Infrastuktur Telekomunikasi ('+ data[3].length +')')
                    $('#pelabuhan').html('Infrastuktur Pelabuhan ('+ data[4].length +')')
                    $('#listrik').html('Ketenagalistrikan ('+ data[5].length +')')
                    $('#energi').html('Energi Alternatif ('+ data[6].length+ ')')
                    $('#minyak').html('Minyak dan Gas Bumi ('+ data[7].length +')')

                    $('#ilmu').html('Ilmu Pengetahuan Teknologi ('+ data[8].length +')')
                    $('#smelter').html('Smelter ('+ data[9].length+ ')')
                    $('#air').html('Infrastuktur Pengolahan Air ('+ data[10].length +')')
                    $('#tanggul').html('Tanggul ('+ data[11].length +')')
                    $('#bendungan').html('Bendungan ('+ data[12].length +')')
                    $('#pertanian').html('Pertanian ('+ data[13].length +')')
                    $('#kelautan').html('Kelautan ('+ data[14].length +')')
                    $('#perumahan').html('Perumahan ('+ data[15].length +')')
                    $('#pariwisata').html('Pariwisata ('+ data[16].length +')')
                    $('#industri').html('Kawasan Industri ('+ data[17].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
    </script>
@endsection

