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
            font-size: 12px;
        }
        * {
            flex-wrap: nowrap
        }
        
    </style>

    <title>Biodata</title>
</head>

<body class="A4">
    <section class="sheet padding-10mm">
        <div style="margin-top: -40px">
            <u><span>KEJAKSAAN PAGAR ALAM</span></u>
            <br>
            
            <h5 class="text-center">KARTU TIK BIODATA</h5>
            <h6 class="text-center">
                Nomor :  {{ $data->nomor }}
            </h6>
        </div>

        <p style="position: absolute;top: 32px;right: 42px;font-weight: 500;">D.IN.12</p>

        <div>
            <table style="width: 100%;align-items: flex-start; position: relative;display: flex;flex-direction: column">
                <tr>
                    <td colspan="4"><h6 style="font-size: 14px;">1. IDENTITAS</h6></td>
                </tr>
                <tr style="position: relative;line-height: 3px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">a.</p></td>
                    <td style="position: relative;width: 200px;"><p style="font-size: 12px;position: absolute;top: 2px;">Nomor Induk Kependudukan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->nik }}</p></td>
                </tr>
                <tr style="line-height: 3px;position: relative">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">b.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Nama lengkap</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->nama }}</p></td>
                </tr>
                <tr style="position: relative;line-height: 3px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">c.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Tempat/Tgl. Lahir/Umur</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: baseline;width: max-content">{{ $data->tempat_lahir }} / {{ $data->tanggal_lahir }} / {{ $age }} tahun</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">d.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Jenis kelamin</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->jenis_kelamin }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">e.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Bangsa/Suku</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->bangsa->name }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">f.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Kewarganegaraan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->kewarganegaraan->name }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">g.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Nomor Telepon/HP</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->phone }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">h.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Nomor Passport</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->pasport }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">i.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Agama/Kepercayaan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->agama->name }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">j.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Pendidikan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->pendidikan->name }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">k.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Pekerjaan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->pekerjaan->name }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">l.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Alamat Kantor</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->alamat_kantor }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">m.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Status Perkawinan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->perkawinan->name }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">n.</p></td>
                    <td style="position: relative;"><p style="font-size: 12px;position: absolute;top: 2px;">Legitimasi Perkawinan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->legitimasi_perkawinan }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px; margin-left: 10px">o.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Tempat dan Tgl. Perkawinan</p></td>
                    <td style="width: 5%;align-items: baseline;display: flex;position:relative;"><p style="font-size: 12px;margin-left: 50px;">:</p></td>
                    <td><p style="left: 20px;position: relative;font-size: 12px;word-break: break-all;align-items: stretch">{{ $data->tempat_perkawinan }}, {{ $data->tanggal_perkawinan }}</p></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td colspan="4"><h6 style="font-size: 14px;">2. BIOGRAFI INTELIJEN</h6></td>
                </tr>
                <tr style="line-height: 3px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 10px">a.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Riwayat Hidup singkat</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">1.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Pekerjaan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->riwayat_pekerjaan }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">2.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Pendidikan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->riwayat_pendidikan }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">3.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Kepartaian</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->riwayat_kepartaian }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">4.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Ormas lainnya</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->riwayat_ormas }}</p></td>
                </tr>
                <tr style="line-height: 3px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 10px">b.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Keluarga</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">1.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Istri/Suami</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->nama_istri }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">2.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama anak-anak</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->nama_anak }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">3.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Saudara kandung</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->nama_saudara }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">4.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Ayah Kandung</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->nama_ayah_kandung }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Alamat</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->alamat_ayah_kandung }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Ibu Kandung</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->nama_ibu_kandung }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Alamat</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->alamat_ibu_kandung }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px">5.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Ayah Mertua</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->nama_ayah_mertua }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Alamat</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->alamat_ayah_mertua }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Nama Ibu Mertua</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->nama_ibu_mertua }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">Alamat</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->alamat_ibu_mertua }}</p></td>
                </tr>
                <tr style="line-height: 3px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 10px">c.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px; margin-left: -7px">Referensi/ Kenalan</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;">(nama dan alamat)</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">1. {{ $data->nama_kenalan_pertama }} - {{ $data->alamat_kenalan_pertama }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;"></p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">2. {{ $data->nama_kenalan_kedua }} - {{ $data->alamat_kenalan_kedua }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 20px"></p></td>
                    <td style="width: 40%"><p style="font-size: 12px;"></p></td>
                    <td style="width: 5%"><p style="font-size: 12px;left: -45px;position: relative">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">3. {{ $data->nama_kenalan_ketiga }} - {{ $data->alamat_kenalan_ketiga }}</p></td>
                </tr>
                <tr style="position: relative;line-height: 1px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 10px">d.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;margin-left: -7px">Hobi/Kegemaran</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;position: relative;left: -45px;">:</p></td>
                    <td><p style="word-break: break-all;font-size: 12px;position: relative;left: -60px;">{{ $data->hobi }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 10px">e.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;margin-left: -7px">Kedudukan Di masyarakat</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;position: relative;left: -45px">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->kedudukan }}</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -20px;">
                    <td style="width: 4%"><p style="font-size: 12px; margin-left: 10px">f.</p></td>
                    <td style="width: 40%"><p style="font-size: 12px;margin-left: -7px">Lain-lain</p></td>
                    <td style="width: 5%"><p style="font-size: 12px;position: relative;left: -45px">:</p></td>
                    <td><p style="font-size: 12px;position: relative;left: -60px">{{ $data->lain }}</p></td>
                </tr>
                <tr style="">
                    <td style="width: 3%" colspan="4"><p style="font-size: 12px; margin-left: 10px">Otentikasi</p></td>
                </tr>
                <tr style="line-height: 2px;margin-top: -5px;">
                    <td style="width: 3%" colspan="4"><p style="font-size: 12px; margin-left: 10px;position: relative;margin-top: -10px;">(Stampel dan Paraf)</p></td>
                </tr>
            </table>
            <table style="width: 100%;position: relative;margin-top: -1px;margin-left: 10px;">
                <tr>
                    <td colspan="4"><h6 style="font-size: 14px;">3. PAS FOTO</h6></td>
                </tr>
                <tr style="line-height: 3px;">
                    <td>
                        <img style="margin-top: -25px;" src="{{ asset('img/biodata'). '/' . $data->photo }}" alt="" width="90" height="120px" />
                    </td>
                </tr>
            </table>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>
