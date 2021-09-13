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
                <h1>Peta & Simbol sektor pada bidang ekonomi dan keuangan</h1>
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
                                <img src="{{ asset('backend/img/ekonomi/1_lembaga keuangan.jpg') }}" alt="" width="100" height="100">
                                <p id="lembaga">Lembaga Keuangan ({{ count($lembaga) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/2_keuangan negara.jpg') }}" alt="" width="100" height="100">
                                <p id="negara">Keuangan Negara ({{ count($negara) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/3_moneter.jpg') }}" alt="" width="100" height="100">
                                <p id="moneter">Moneter ({{ count($moneter) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/4_penelusuran aset.jpg') }}" alt="" width="100" height="100">
                                <p id="asset">Asset Tracking ({{ count($asset) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/5_investasi-penanaman modal.jpg') }}" alt="" width="100" height="100">
                                <p id="investasi">Investasi ({{ count($investasi) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/6_perpajakan.jpg') }}" alt="" width="100" height="100">
                                <p id="pajak">Perpajakan ({{ count($pajak) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/7_kepabeanan.jpg') }}" alt="" width="100" height="100">
                                <p id="pabena">Kepabeanan ({{ count($pabean) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/8_cukai.jpg') }}" alt="" width="100" height="100">
                                <p id="cukai">Cukai ({{ count($cukai) }})</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row text-center">
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/9_perdagangan.jpg') }}" alt="" width="100" height="100">
                                <p id="dagang">Perdagangan ({{ count($dagang) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/10_perindustrian.jpg') }}" alt="" width="100" height="100">
                                <p id="industri">Perindustrian ({{ count($industri) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/11_ketenagakerjaan.jpg') }}" alt="" width="100" height="100">
                                <p id="kerja">Ketenagakerjaan ({{ count($kerja) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/12_perkebunan.jpg') }}" alt="" width="100" height="100">
                                <p id="kebun">Perkebunan ({{ count($kebun) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/13_kehutanan.jpg') }}" alt="" width="100" height="100">
                                <p id="hutan">Kehutanan ({{ count($hutan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/14_lingkungan hidup.jpg') }}" alt="" width="100" height="100">
                                <p id="hidup">Lingkungan Hidup ({{ count($hidup) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/15_perikanan.jpg') }}" alt="" width="100" height="100">
                                <p id="ikan">Perikanan ({{ count($ikan) }})</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('backend/img/ekonomi/16_agraria-tata ruang.jpg') }}" alt="" width="100" height="100">
                                <p id="agraria">Agraria / Tata ruang ({{ count($agraria) }})</p>
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
            ajaxurl = '{{ route("admin.peta-ekonomi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Selatan')
                    
                    $('#lembaga').html('Lembaga Keuangan ('+ data[0].length +')')
                    $('#negara').html('Keuangan Negara ('+ data[1].length +')')
                    $('#moneter').html('Moneter ('+ data[2].length +')')
                    $('#asset').html('Asset Tracking ('+ data[3].length +')')
                    $('#investasi').html('Investasi ('+ data[4].length +')')
                    $('#pajak').html('Perpajakan ('+ data[5].length +')')
                    $('#pabean').html('Kepabeanan ('+ data[6].length+ ')')
                    $('#cukai').html('Cukai ('+ data[7].length+ ')')

                    $('#dagang').html('Perdagangan ('+ data[8].length +')')
                    $('#industri').html('Perindustrian ('+ data[9].length+ ')')
                    $('#kerja').html('Ketenagakerjaan ('+ data[10].length +')')
                    $('#kebun').html('Perkebunan ('+ data[11].length +')')
                    $('#hutan').html('Kehutanan ('+ data[12].length +')')
                    $('#hidup').html('Lingkungan Hidup ('+ data[13].length +')')
                    $('#ikan').html('Perikanan ('+ data[14].length +')')
                    $('#agraria').html('Agraria / Tata ruang ('+ data[15].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function purple() {
            var id = 4
            ajaxurl = '{{ route("admin.peta-ekonomi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Tengah')
                   $('#lembaga').html('Lembaga Keuangan ('+ data[0].length +')')
                    $('#negara').html('Keuangan Negara ('+ data[1].length +')')
                    $('#moneter').html('Moneter ('+ data[2].length +')')
                    $('#asset').html('Asset Tracking ('+ data[3].length +')')
                    $('#investasi').html('Investasi ('+ data[4].length +')')
                    $('#pajak').html('Perpajakan ('+ data[5].length +')')
                    $('#pabean').html('Kepabeanan ('+ data[6].length+ ')')
                    $('#cukai').html('Cukai ('+ data[7].length+ ')')

                    $('#dagang').html('Perdagangan ('+ data[8].length +')')
                    $('#industri').html('Perindustrian ('+ data[9].length+ ')')
                    $('#kerja').html('Ketenagakerjaan ('+ data[10].length +')')
                    $('#kebun').html('Perkebunan ('+ data[11].length +')')
                    $('#hutan').html('Kehutanan ('+ data[12].length +')')
                    $('#hidup').html('Lingkungan Hidup ('+ data[13].length +')')
                    $('#ikan').html('Perikanan ('+ data[14].length +')')
                    $('#agraria').html('Agraria / Tata ruang ('+ data[15].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function red() {
            var id = 3
            ajaxurl = '{{ route("admin.peta-ekonomi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Dempo Utara')
                   $('#lembaga').html('Lembaga Keuangan ('+ data[0].length +')')
                    $('#negara').html('Keuangan Negara ('+ data[1].length +')')
                    $('#moneter').html('Moneter ('+ data[2].length +')')
                    $('#asset').html('Asset Tracking ('+ data[3].length +')')
                    $('#investasi').html('Investasi ('+ data[4].length +')')
                    $('#pajak').html('Perpajakan ('+ data[5].length +')')
                    $('#pabean').html('Kepabeanan ('+ data[6].length+ ')')
                    $('#cukai').html('Cukai ('+ data[7].length+ ')')

                    $('#dagang').html('Perdagangan ('+ data[8].length +')')
                    $('#industri').html('Perindustrian ('+ data[9].length+ ')')
                    $('#kerja').html('Ketenagakerjaan ('+ data[10].length +')')
                    $('#kebun').html('Perkebunan ('+ data[11].length +')')
                    $('#hutan').html('Kehutanan ('+ data[12].length +')')
                    $('#hidup').html('Lingkungan Hidup ('+ data[13].length +')')
                    $('#ikan').html('Perikanan ('+ data[14].length +')')
                    $('#agraria').html('Agraria / Tata ruang ('+ data[15].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function green() {
            var id = 2
            ajaxurl = '{{ route("admin.peta-ekonomi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Selatan')
                   $('#lembaga').html('Lembaga Keuangan ('+ data[0].length +')')
                    $('#negara').html('Keuangan Negara ('+ data[1].length +')')
                    $('#moneter').html('Moneter ('+ data[2].length +')')
                    $('#asset').html('Asset Tracking ('+ data[3].length +')')
                    $('#investasi').html('Investasi ('+ data[4].length +')')
                    $('#pajak').html('Perpajakan ('+ data[5].length +')')
                    $('#pabean').html('Kepabeanan ('+ data[6].length+ ')')
                    $('#cukai').html('Cukai ('+ data[7].length+ ')')

                    $('#dagang').html('Perdagangan ('+ data[8].length +')')
                    $('#industri').html('Perindustrian ('+ data[9].length+ ')')
                    $('#kerja').html('Ketenagakerjaan ('+ data[10].length +')')
                    $('#kebun').html('Perkebunan ('+ data[11].length +')')
                    $('#hutan').html('Kehutanan ('+ data[12].length +')')
                    $('#hidup').html('Lingkungan Hidup ('+ data[13].length +')')
                    $('#ikan').html('Perikanan ('+ data[14].length +')')
                    $('#agraria').html('Agraria / Tata ruang ('+ data[15].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
        function cream() {
            var id = 1
            ajaxurl = '{{ route("admin.peta-ekonomi.search", "id") }}'
            $.ajax({
                type: 'GET',
                url: ajaxurl,
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#kecamatan').html('Kecamatan : Pagar Alam Utara')
                   $('#lembaga').html('Lembaga Keuangan ('+ data[0].length +')')
                    $('#negara').html('Keuangan Negara ('+ data[1].length +')')
                    $('#moneter').html('Moneter ('+ data[2].length +')')
                    $('#asset').html('Asset Tracking ('+ data[3].length +')')
                    $('#investasi').html('Investasi ('+ data[4].length +')')
                    $('#pajak').html('Perpajakan ('+ data[5].length +')')
                    $('#pabean').html('Kepabeanan ('+ data[6].length+ ')')
                    $('#cukai').html('Cukai ('+ data[7].length+ ')')

                    $('#dagang').html('Perdagangan ('+ data[8].length +')')
                    $('#industri').html('Perindustrian ('+ data[9].length+ ')')
                    $('#kerja').html('Ketenagakerjaan ('+ data[10].length +')')
                    $('#kebun').html('Perkebunan ('+ data[11].length +')')
                    $('#hutan').html('Kehutanan ('+ data[12].length +')')
                    $('#hidup').html('Lingkungan Hidup ('+ data[13].length +')')
                    $('#ikan').html('Perikanan ('+ data[14].length +')')
                    $('#agraria').html('Agraria / Tata ruang ('+ data[15].length +')')
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
    </script>
@endsection

