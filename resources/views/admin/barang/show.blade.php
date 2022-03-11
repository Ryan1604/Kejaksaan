
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

    <title>BARANG CETAKAN</title>
</head>

<body class="A4">
    <section class="sheet padding-10mm">
        <p>KEJAKSAAN NEGERI PAGAR ALAM</p>
        <u><span class="ml-auto" style="position: absolute;right: 30px;top: 30px;">D.IN.13</span></u> <br />
        <br>
        <div class="cont py-3">
            <h5 class="text-center"><u>KARTU TIK BARANG CETAKAN</u></h5>
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
                    <td style="width: 40%"><p style="font-size: 12px;">Nama barang cetakan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px;">{{ $data->nama }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">2.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Penerbit</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->penerbit }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">3.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Pengarang</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->pengarang }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">4.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Waktu peredaran</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->waktu }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">5.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Daerah peredaran</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->daerah }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">6.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Pencetak</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->pencetak }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">7.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Pimpinan Redaksi</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->nama_pimpinan }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">8.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Alamat penerbit</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->alamat_penerbit }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">9.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Alamat percetakan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->alamat_percetakan }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">10.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Jumlah Oplah</p></td>
                    <td style="width: 5%"><p style="font-size: 12px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->jumlah_oplah }}</p></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td colspan="4"><h6 style="font-size: 14px;">2. BIOGRAFI INTELIJEN</h6></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">1.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Kasus/masalah yang terjadi</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->kasus }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">2.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Latar belakang dan akibatnya</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->background }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">3.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Tindakan yang dilakukan oleh</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">a.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Kejaksaan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->tindakan_kejaksaan }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">b.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Kepolisian</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->tindakan_kepolisian }}</p></td>
                </tr>
                <tr style="line-height: 0px">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 20px">c.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Pengadilan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->tindakan_pengadilan }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">4.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Keterangan lain-lain</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -4px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px">{{ $data->keterangan }}</p></td>
                </tr>
                <tr style="">
                    <td style="width: 3%" colspan="4"><p style="font-size: 12px; margin-left: 10px">Otentikasi</p></td>
                </tr>
                <tr style="line-height: 10px">
                    <td style="width: 3%" colspan="4"><p style="font-size: 12px; margin-left: 10px">(Stampel dan Paraf)</p></td>
                </tr>
            </table>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
</body>

</html>