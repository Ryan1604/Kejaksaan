
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
        <div class="cont py-3" style="margin-top: -30px;margin-bottom: 30px;">
            <h5 class="text-center"><u>KARTU TIK BARANG CETAKAN</u></h5>
            <h6 class="text-center">
                Nomor : {{ $data->nomor }}
            </h6>
        </div>

        <div style="position: relative;left: 40px;">
            <table style="width: 100%;align-items: flex-start; position: relative;display: flex;flex-direction: column">
                <tr style="margin-bottom: 20px">
                    <td colspan="4"><h6 style="font-size: 14px;">1. IDENTITAS</h6></td>
                </tr>
                <tr style="position: relative;line-height: auto;display: flex;margin-top: 4px;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">1.</p></td>
                    <td style="position: relative;width: 200px;display: flex;left: 18.5px;"><p style="font-size: 12px;position: absolute;top: 2px;">Nama barang cetakan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 70px;">:</p></td>
                    <td><p style="left: 73px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->nama }}</p></td>
                </tr>
                <tr style="position: relative;line-height: auto;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">2.</p></td>
                    <td style="position: relative;width: 200px;"><p style="font-size: 12px;position: absolute;top: 2px;">Penerbit</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->penerbit }}</p></td>
                </tr>
                <tr style="position: relative;line-height: auto;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">3.</p></td>
                    <td style="position: relative;width: 200px;"><p style="font-size: 12px;position: absolute;top: 2px;">Pengarang</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->pengarang }}</p></td>
                </tr>
                <tr style="line-height: auto">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">4.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Waktu peredaran</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->waktu }}</p></td>
                </tr>
                <tr style="line-height: auto">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">5.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Daerah peredaran</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->daerah }}</p></td>
                </tr>
                <tr style="line-height: auto">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">6.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Pencetak</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->pencetak }}</p></td>
                </tr>
                <tr style="line-height: auto">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">7.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Nama Pimpinan Redaksi</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td style="width: 320px"><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->nama_pimpinan }}</p></td>
                </tr>
                <tr style="line-height: auto">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">8.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Alamat penerbit</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->alamat_penerbit }}</p></td>
                </tr>
                <tr style="line-height: auto;position: relative;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">9.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Alamat percetakan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td style="position: relative;top: -6px;line-height: 1.4em;padding: 0"><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch;height: max-content;">{{ $data->alamat_percetakan }}</p></td>
                </tr>
                <tr style="line-height: auto;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">10.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Jumlah opleah</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: baseline">{{ $data->jumlah_oplah }}</p></td>
                </tr>
            </table>
            <table style="width: 100%;margin-top: 20px;">
                <tr>
                    <td colspan="4"><h6 style="font-size: 14px;margin-bottom: 14px;">2. BIOGRAFI INTELIJEN</h6></td>
                </tr>
                <tr style="line-height: auto;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">1.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Kasus/masalah yang terjadi</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: -32px;">:</p></td>
                    <td><p style="left: -40px;position: relative;font-size: 12px;word-break: break-all;align-items: baseline">{{ $data->kasus }}</p></td>
                </tr>   
                <tr style="line-height: auto;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">2.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Latar belakang dan akibatnya</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: -32px;">:</p></td>
                    <td><p style="left: -40px;position: relative;font-size: 12px;word-break: break-all;align-items: baseline">{{ $data->background }}</p></td>
                </tr>
                <tr style="line-height: auto;">
                    <td style="width: 2%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">2.</p></td>
                    <td style="position: relative;width: max-content;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Latar belakang dan akibatnya</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: -32px;">:</p></td>
                    <td><p style="left: -40px;position: relative;font-size: 12px;word-break: break-all;align-items: baseline">{{ $data->background }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">3.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: 1px">Tindakan yang dilakukan oleh</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -32px">:</p></td>
                </tr>
                <tr style="line-height: auto;position: relative;">
                    <td style="width: 2%;align-items: baseline;left: 14px;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">a.</p></td>
                    <td style="position: relative;width: max-content;left: 14px;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Kejaksaan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;left: 14px;position:relative;"><p style="font-size: 12px;margin-left: -45px;">:</p></td>
                    <td><p style="left: -55px;position: relative;font-size: 12px;left: -40px;word-break: break-all;align-items: baseline">{{ $data->tindakan_kejaksaan }}</p></td>
                </tr>
                <tr style="line-height: auto;position: relative;">
                    <td style="width: 2%;align-items: baseline;left: 14px;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">b.</p></td>
                    <td style="position: relative;width: max-content;left: 14px;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Kepolisian</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;left: 14px;position:relative;"><p style="font-size: 12px;margin-left: -45px;">:</p></td>
                    <td><p style="left: -55px;position: relative;font-size: 12px;left: -40px;word-break: break-all;align-items: baseline">{{ $data->tindakan_kepolisian }}</p></td>
                </tr>
                <tr style="line-height: auto;position: relative;">
                    <td style="width: 2%;align-items: baseline;left: 14px;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">c.</p></td>
                    <td style="position: relative;width: max-content;left: 14px;"><p style="width: max-content;font-size: 12px;position: absolute;top: 2px;">Pengadilan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;left: 14px;position:relative;"><p style="font-size: 12px;margin-left: -45px;">:</p></td>
                    <td><p style="left: -55px;position: relative;font-size: 12px;left: -40px;word-break: break-all;align-items: baseline">{{ $data->tindakan_pengadilan }}</p></td>
                </tr>
                <tr style="line-height: 0px;">
                    <td style="width: 3%"><p style="font-size: 12px; margin-left: 10px">4.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: 1px">Keterangan lain-lain</p></td>
                    <td style="width: 5%"><p style="font-size: 12px; margin-left: -30px">:</p></td>
                    <td style="width: 62%"><p style="font-size: 12px;position: relative;left: -40px;">{{ $data->keterangan }}</p></td>
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
