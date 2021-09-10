
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" />
    <style>
        @page {
            size: A4 landscape;
        }
        
        table,
        div,
        span {
            font-size: 12px;
        }
    </style>

    <title>Labul Intel</title>
</head>

<body class="A4 landscape">
    <section class="sheet padding-10mm">
        <u><span>KEJAKSAAN......................................... </span></u>
        <br />
        <br />
        <h6 class="text-center py-3">
            LAPORAN BULANAN <br /> PENGAWASAN LALU LINTAS ORANG ASING <br /> BULAN ...........TAHUN.......
        </h6>
        <br />

        <div class="tabel-responsive">
            <table class="table table-sm table-bordered">
                <thead class="table">
                    <tr class="text-center text-wrap" style="width: 8rem">
                        <th rowspan="2">No</th>
                        <th rowspan="2">ASAL NEGARA/KEBANGSAAN</th>
                        <th rowspan="2">ORANG ASING PNEDUDUK</th>
                        <th colspan="5">TINGGAL SEMENTARA</th>
                        <th rowspan="2">PENDATANG ILEGAL</th>
                        <th colspan="3">KUNJUNGAN</th>
                        <th rowspan="2">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th>TENAGA KERJA ASING</th>
                        <th>MAHASISWA/PELAJAR</th>
                        <th>PENELITI</th>
                        <th>KELUARGA/IKUT SUAMI ATAU ISTRI</th>
                        <th>ROHANIAWAN</th>
                        <th>USAHA</th>
                        <th>SOSBUD</th>
                        <th>WISATA</th>
                    </tr>
                    <tr height="5px" class="text-center">
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                    </tr>
                </thead>
                {{-- <!-- @foreach($data as $item) --> --}}
                <tbody>
                    <tr height="40px">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container">
            <div class="tabel-responsive">
                <table class="table table-sm table-borderless">
                    <div class="row">
                        <div class="col-md-4 offset-md-8 text-center py-5 mb-5">
                            KASUBDIT / ASINTEL / KASI INTEL / KACABJARI.............
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-8 text-center">
                            <u> Nama Pejabat</u>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-8 text-center">Pangkat/NIP</div>
                    </div>
                </table>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
</body>

</html>