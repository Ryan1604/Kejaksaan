
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" />
    <style>
        @page {
            size: A4;
        }
        
        div {
            font-size: 14px;
        }
    </style>

    <title>ORGANISASI</title>
</head>

<body class="A4">
    <section class="sheet padding-10mm">
        <p>KEJAKSAAN NEGERI PAGAR ALAM</p>
        <u><span class="ml-auto" style="position: absolute;right: 30px;top: 30px;">D.IN.14</span></u> <br />
        <br>
        <div class="cont py-3">
            <h5 class="text-center"><u>KARTU TIK ORGANISASI</u></h5>
            <h6 class="text-center">
                Nomor : {{ $data->nomor }}
            </h6>
        </div>

        <div>
            <table style="width: 100%;">
                <tr>
                    <td colspan="4"><h6 style="font-size: 14px;">1. IDENTITAS</h6></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">1.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Organisasi</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px;">{{ $data->nama }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">2.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Akte Pendirian/ buku pendaftaran</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->akte }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">3.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Kedudukan / status</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->status }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">4.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Berdiri sejak</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->berdiri }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">5.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Domisili hukum / alamat</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%;"><p style="font-size: 12px;">{{ $data->alamat }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">6.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nomor Telepon</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->phone }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">7.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Website/ E-mail</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->web }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">8.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Pengurus</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">a.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">- Nama</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->nama_pengurus }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">b.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">- Kedudukan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->kedudukan_pengurus }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">c.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">- Periode tahun</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->periode_pengurus }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">d.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">- Alamat</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->alamat_pengurus }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">e.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">- Nomor Telepon/HP</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->hp_pengurus }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">9.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Ruang lingkup kegiatan organisasi</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">a.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Ke dalam</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->kegiatan_kedalam }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">b.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Ke Luar</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->kegiatan_keluar }}</p></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%">
                        <h6 style="font-size: 14px;">2. KEGIATAN ORGANISASI PENGURUS ORGANISASI YANG BERKAITAN DENGAN / PELANGGARAN HUKUM :</h6>
                    </td>
                </tr>
                <tr style="line-height: 19px;">
                    <td style="width: 100%"><p style="font-size: 12px;">{{ $data->kegiatan }}</p></td>
                </tr>
               
            </table>
            
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>