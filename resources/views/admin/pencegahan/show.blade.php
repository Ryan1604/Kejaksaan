
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" />
    <style>
        @page {
            size: A4 landscape;
        }
    </style>

    <title>Labul Intel</title>
</head>

<body class="A4 landscape">
    <section class="sheet padding-10mm">
        <u><span>KEJAKSAAN</span=><span>......................................... </span></u> <br />
        <br>
        <h5 class="text-center py-3">LAPORAN BULANAN <br> PENCEGAHAN DAN PENANGKALAN <br> BULAN ...........TAHUN.......
        </h5><br>


        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="report">
                <thead class="table">
                    <tr class="text-center text-wrap" style="width: 8rem">
                        <th rowspan="2">No</th>
                        <th rowspan="2">IDENTITAS</th>
                        <th rowspan="2">PERMOHONAN PENCEGAHAN ATAU PENANGKALAN NO./TGL</th>
                        <th rowspan="2">KASUS POSISI DAN PASAL YANG DISANGKAKAN/ DIDAKWAKAN PUTUSAN PENGADILAN</th>
                        <th rowspan="2">KEPJA R.I NO./TGL</th>
                        <th colspan="2">CEGAH ATAU TANGKAL</th>
                        <th rowspan="2">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th>TANGGAL DIMULAI</th>
                        <th>TANGGAL BERAKHIR</th>
                    </tr>
                    <tr height="5px" class="fs-6 text-center">
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
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
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container float-right">
            <div class="row ">
                <div class="col-md-4 offset-md-7 py-5 mb-5">DIREKTUR/ASINTEL/KEJARI/KACABJARI.............</div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-8 ">Nama Pejabat</div>
            </div>
            <div class="row">

                <div class="col-md-4 offset-md-8 ">Pangkat/NIP</div>
            </div>
        </div>

    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>