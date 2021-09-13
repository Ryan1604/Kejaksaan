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
                <h1>Peta & Simbol sektor pada bidang ideologi, politik, pertahanan, dan keamanan</h1>
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
                                <img src="{{ asset('backend/img/pertahanan/1_Pengamanan Pancasila.jpg') }}" alt="" width="100" height="100">
                                <p id="pancasila">Pengamanan Pancasila ({{ count($pancasila) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/2_Persatuan dan Kesatuan Bangsa.jpg') }}" alt="" width="100" height="100">
                                <p id="persatuan">Persatuan & Kesatuan Indonesia ({{ count($persatuan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/3_Gerakan Separatis.jpg') }}" alt="" width="100" height="100">
                                <p id="gerakan">Gerakan Separatis ({{ count($gerakan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/4_Penyelenggaraan Pemerintahan.jpg') }}" alt="" width="100" height="100">
                                <p id="penyelenggaraan">Penyelenggaraan Pemerintahan ({{ count($penyelenggaraan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/5_partai Politik, Pemilu, Pilkada.jpg') }}" alt="" width="100" height="100">
                                <p id="parpol">Parpol Pemilu Pilkada ({{ count($parpol) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/6_gerakan terorisme dan radikalisme.jpg') }}" alt="" width="100" height="100">
                                <p id="terorisme">Terorisme & Radikalisme ({{ count($terorisme) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/8_pengawasan wilayah teritorial.jpg') }}" alt="" width="100" height="100">
                                <p id="teritorial">Pengawasan Wilayah Teritorial ({{ count($teritorial) }})</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row text-center">
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/9_kejahatan siber.jpg') }}" alt="" width="100" height="100">
                                <p id="cyber">Cyber Crime ({{ count($cyber) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/10_cekal.jpg') }}" alt="" width="100" height="100">
                                <p id="pencegahan">Cegah Tangkal ({{ count($pencegahan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/11_pengawasan orang asing.jpg') }}" alt="" width="100" height="100">
                                <p id="pengawasan">Pengawasan Orang Asing ({{ count($pengawasan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/12_pengamanan sumber daya organisasi kejaksaan.jpg') }}" alt="" width="100" height="100">
                                <p id="pam">PAM-SDO Kejaksaan ({{ count($pam) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/pertahanan/13_Pengamanan penanganan perkara.jpg') }}" alt="" width="100" height="100">
                                <p id="perkara">PAM Penanganan Perkara ({{ count($perkara) }})</p>
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
            ajaxurl = '{{ route("admin.peta-pertahanan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Selatan')

                    $('#pancasila').html('Pengamanan Pancasila ('+ data[0].length +')')
                    $('#persatuan').html('Persatuan & Kesatuan Indonesia ('+ data[1].length +')')
                    $('#gerakan').html('Gerakan Separatis ('+ data[2].length +')')
                    $('#penyelenggaraan').html('Penyelenggaraan Pemerintahan ('+ data[3].length +')')
                    $('#parpol').html('Parpol Pemilu Pilkada  ('+ data[4].length +')')
                    $('#terorisme').html('Terorisme & Radikalisme ('+ data[5].length +')')
                    $('#teritorial').html('Pengawasan Wilayah Teritorial ('+ data[6].length+ ')')

                    $('#cyber').html('Cyber Crime ('+ data[7].length +')')
                    $('#pencegahan').html('Cegah Tangkal ('+ data[8].length+ ')')
                    $('#pengawasan').html('Pengawasan Orang Asing ('+ data[9].length +')')
                    $('#pam').html('PAM-SDO Kejaksaan ('+ data[10].length +')')
                    $('#perkara').html('PAM Penanganan Perkara ('+ data[11].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function purple() {
            var id = 4
            ajaxurl = '{{ route("admin.peta-pertahanan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Tengah')
                    $('#pancasila').html('Pengamanan Pancasila ('+ data[0].length +')')
                    $('#persatuan').html('Persatuan & Kesatuan Indonesia ('+ data[1].length +')')
                    $('#gerakan').html('Gerakan Separatis ('+ data[2].length +')')
                    $('#penyelenggaraan').html('Penyelenggaraan Pemerintahan ('+ data[3].length +')')
                    $('#parpol').html('Parpol Pemilu Pilkada  ('+ data[4].length +')')
                    $('#terorisme').html('Terorisme & Radikalisme ('+ data[5].length +')')
                    $('#teritorial').html('Pengawasan Wilayah Teritorial ('+ data[6].length+ ')')

                    $('#cyber').html('Cyber Crime ('+ data[7].length +')')
                    $('#pencegahan').html('Cegah Tangkal ('+ data[8].length+ ')')
                    $('#pengawasan').html('Pengawasan Orang Asing ('+ data[9].length +')')
                    $('#pam').html('PAM-SDO Kejaksaan ('+ data[10].length +')')
                    $('#perkara').html('PAM Penanganan Perkara ('+ data[11].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function red() {
            var id = 3
            ajaxurl = '{{ route("admin.peta-pertahanan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Utara')
                    $('#pancasila').html('Pengamanan Pancasila ('+ data[0].length +')')
                    $('#persatuan').html('Persatuan & Kesatuan Indonesia ('+ data[1].length +')')
                    $('#gerakan').html('Gerakan Separatis ('+ data[2].length +')')
                    $('#penyelenggaraan').html('Penyelenggaraan Pemerintahan ('+ data[3].length +')')
                    $('#parpol').html('Parpol Pemilu Pilkada  ('+ data[4].length +')')
                    $('#terorisme').html('Terorisme & Radikalisme ('+ data[5].length +')')
                    $('#teritorial').html('Pengawasan Wilayah Teritorial ('+ data[6].length+ ')')

                    $('#cyber').html('Cyber Crime ('+ data[7].length +')')
                    $('#pencegahan').html('Cegah Tangkal ('+ data[8].length+ ')')
                    $('#pengawasan').html('Pengawasan Orang Asing ('+ data[9].length +')')
                    $('#pam').html('PAM-SDO Kejaksaan ('+ data[10].length +')')
                    $('#perkara').html('PAM Penanganan Perkara ('+ data[11].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function green() {
            var id = 2
            ajaxurl = '{{ route("admin.peta-pertahanan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Selatan')
                    $('#pancasila').html('Pengamanan Pancasila ('+ data[0].length +')')
                    $('#persatuan').html('Persatuan & Kesatuan Indonesia ('+ data[1].length +')')
                    $('#gerakan').html('Gerakan Separatis ('+ data[2].length +')')
                    $('#penyelenggaraan').html('Penyelenggaraan Pemerintahan ('+ data[3].length +')')
                    $('#parpol').html('Parpol Pemilu Pilkada  ('+ data[4].length +')')
                    $('#terorisme').html('Terorisme & Radikalisme ('+ data[5].length +')')
                    $('#teritorial').html('Pengawasan Wilayah Teritorial ('+ data[6].length+ ')')

                    $('#cyber').html('Cyber Crime ('+ data[7].length +')')
                    $('#pencegahan').html('Cegah Tangkal ('+ data[8].length+ ')')
                    $('#pengawasan').html('Pengawasan Orang Asing ('+ data[9].length +')')
                    $('#pam').html('PAM-SDO Kejaksaan ('+ data[10].length +')')
                    $('#perkara').html('PAM Penanganan Perkara ('+ data[11].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function cream() {
            var id = 1
            ajaxurl = '{{ route("admin.peta-pertahanan.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Utara')
                    $('#pancasila').html('Pengamanan Pancasila ('+ data[0].length +')')
                    $('#persatuan').html('Persatuan & Kesatuan Indonesia ('+ data[1].length +')')
                    $('#gerakan').html('Gerakan Separatis ('+ data[2].length +')')
                    $('#penyelenggaraan').html('Penyelenggaraan Pemerintahan ('+ data[3].length +')')
                    $('#parpol').html('Parpol Pemilu Pilkada  ('+ data[4].length +')')
                    $('#terorisme').html('Terorisme & Radikalisme ('+ data[5].length +')')
                    $('#teritorial').html('Pengawasan Wilayah Teritorial ('+ data[6].length+ ')')

                    $('#cyber').html('Cyber Crime ('+ data[7].length +')')
                    $('#pencegahan').html('Cegah Tangkal ('+ data[8].length+ ')')
                    $('#pengawasan').html('Pengawasan Orang Asing ('+ data[9].length +')')
                    $('#pam').html('PAM-SDO Kejaksaan ('+ data[10].length +')')
                    $('#perkara').html('PAM Penanganan Perkara ('+ data[11].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
    </script>
@endsection

