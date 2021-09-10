<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', 'Auth\LoginController@adminLogin')->name('adminLogin');

// ROUTE FOR ADMIN ONLY
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin', 'active', 'check.session'])->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('profile', 'AdminController@profile')->name('profile');
    Route::put('updateProfile', 'AdminController@updateProfile')->name('updateProfile');

    /* Master Data */

    // Kelurahan
    Route::resource('kelurahan', 'KelurahanController');

    // Biodata Terpidana WNI
    Route::resource('wni', 'BiodataWNIController');

    // Biodata Terpidana WNA
    Route::resource('wna', 'BiodataWNAController');

    // Kartu TIK Biodata
    Route::resource('tik/biodata', 'TIKBiodataController');

    // Kartu TIK Barang
    Route::resource('tik/barang', 'TIKBarangController');

    // Kartu TIK Organisasi
    Route::resource('tik/organisasi', 'TIKOrganisasiController');

    // Kartu TIK Media
    Route::resource('tik/media', 'TIKMediaController');

    // Kartu TIK Terdakwa
    Route::resource('tik/terdakwa', 'TIKTerdakwaController');

    /* Pidum Pidsus */

    // Korupsi
    Route::resource('korupsi', 'KorupsiController');

    // Narkotika
    Route::resource('narkotika', 'NarkotikaController');

    // Umum
    Route::resource('umum', 'UmumController');

    /* Label Intel */

    // Pencegahan dan Penangkalan
    Route::resource('pencegahan', 'PencegahanController');

    // Pengawasan WNA
    Route::resource('pengawasan', 'PengawasanController');

    // WNA yang terlibat tindak pidana
    Route::resource('asing-pidana', 'AsingPidanaController');

    // Pengamanan Sumber Daya Kejaksaan
    Route::resource('pengamanan', 'PengamananSumberDayaController');

    // Pengawasan Barang Cetakan
    Route::resource('pengawasan_barang', 'PengawasanBarangController');

    // Pengawasan Media Komunikasi
    Route::resource('pengawasan_media', 'PengawasanMediaController');

    // Pengobatan Tradiotional
    Route::resource('pengobatan', 'PengobatanController');

    // Pengawasan Aliran Kepercayaan Masyarakat
    Route::resource('kepercayaan', 'PengawasanKepercayaanController');

    // Pengawasan Aliran Keagamaan
    Route::resource('keagamaan', 'PengawasanKeagamaanController');

    // Pengawasan Organisasi Kemasyarakatan
    Route::resource('pengawasan_organisasi', 'PengawasanOrganisasiController');

    // Ketertiban
    Route::resource('ketertiban', 'KetertibanController');

    // Pembinaan
    Route::resource('pembinaan', 'PembinaanController');

    // Konflik Sosial
    Route::resource('konflik', 'KonflikController');

    // Posko
    Route::resource('posko', 'PoskoController');

    /* Reference Data */

    // Kecamatan
    Route::resource('kecamatan', 'KecamatanController');

    // Agama
    Route::resource('agama', 'AgamaController');

    // Warga Negara
    Route::resource('warga-negara', 'WargaNegaraController');

    // Pendidikan
    Route::resource('pendidikan', 'PendidikanController');

    // Status Perkawinan
    Route::resource('status-perkawinan', 'StatusPerkawinanController');

    // Legalitas Perkawinan
    Route::resource('legalitas-perkawinan', 'LegalitasPerkawinanController');

    // Pekerjaan
    Route::resource('pekerjaan', 'PekerjaanController');

    // Suku Bangsa
    Route::resource('suku-bangsa', 'SukuBangsaController');

    // Negara
    Route::resource('negara', 'NegaraController');

    // Tinggal Sementara WNA
    Route::resource('tinggal-sementara', 'TinggalSementaraWNAController');

    // Kunjungan WNA
    Route::resource('kunjungan', 'KunjunganWNAController');

    /* Lain - Lain */

    // Pengawasan Barcet
    Route::resource('barcet', 'BarcetController');

    // Import Barcet
    Route::resource('import', 'ImportController');

    // Pengawasan Sistem pembukuan
    Route::resource('pembukuan', 'PembukuanController');

    // PAKEM
    Route::resource('pakem', 'PakemController');

    // Pencegahan Penodaan Agama
    Route::resource('penodaan', 'PenodaanController');

    // Ketahanan Budaya
    Route::resource('budaya', 'BudayaController');

    // Pemberdayaan Masyarakat Desa
    Route::resource('pemberdayaan', 'PemberdayaanController');

    // Pengawasan Ormas
    Route::resource('ormas', 'OrmasController');

    // Tramtibum
    Route::resource('tramtibum', 'TramtibumController');

    // Infrastruktur Jalan
    Route::resource('infrastruktur', 'InfrastrukturController');

    // Infrastruktur Kereta
    Route::resource('kereta', 'KeretaController');

    // Infrastruktur Bandara
    Route::resource('bandara', 'BandaraController');

    // Infrastruktur Telekomunikasi
    Route::resource('telekomunikasi', 'TelekomunikasiController');

    // Infrastruktur Pelabuhan
    Route::resource('pelabuhan', 'PelabuhanController');

    // Ketenagalistrikan
    Route::resource('listrik', 'ListrikController');

    // Energi Alternatif
    Route::resource('energi', 'EnergiController');

    // Minyak dan Gas Bumi
    Route::resource('minyak', 'MinyakController');

    // IPT
    Route::resource('ilmu', 'IlmuController');

    // Smelter
    Route::resource('smelter', 'SmelterController');

    // Infrastruktur Pengolahan Air
    Route::resource('air', 'AirController');

    // Tanggul
    Route::resource('tanggul', 'TanggulController');

    // Bendungan
    Route::resource('bendungan', 'BendunganController');

    // Pertanian
    Route::resource('pertanian', 'PertanianController');

    // Kelautan
    Route::resource('kelautan', 'KelautanController');

    // Perumahan
    Route::resource('perumahan', 'PerumahanController');

    // Pariwisata
    Route::resource('pariwisata', 'PariwisataController');

    // Kawasan Industri
    Route::resource('industri', 'IndustriController');

    // Produksi Intelijen
    Route::resource('produksi', 'ProduksiController');

    // Kawasan Industri
    Route::resource('pemantauan', 'PemantauanController');

    // Kawasan Industri
    Route::resource('signal', 'SignalController');

    // Kawasan Industri
    Route::resource('siber', 'SiberController');

    // Kawasan Industri
    Route::resource('klandestine', 'KlandestineController');

    // Kawasan Industri
    Route::resource('sdm', 'SdmController');

    // Kawasan Industri
    Route::resource('prosedur', 'ProsedurController');

    // Kawasan Industri
    Route::resource('digital', 'DigitalController');

    // Kawasan Industri
    Route::resource('berita', 'BeritaController');

    // Kawasan Industri
    Route::resource('kontra', 'KontraController');

    // Kawasan Industri
    Route::resource('audit', 'AuditController');

    // Kawasan Industri
    Route::resource('pengamanan-signal', 'PengamananController');

    // Kawasan Industri
    Route::resource('sandi', 'SandiController');

    // Kawasan Industri
    Route::resource('lembaga', 'LembagaKeuanganController');

    // Kawasan Industri
    Route::resource('keuangan', 'KeuanganNegaraController');

    // Kawasan Industri
    Route::resource('moneter', 'MoneterController');

    // Kawasan Industri
    Route::resource('asset', 'AssetController');

    // Kawasan Industri
    Route::resource('investasi', 'InventasiController');

    // Kawasan Industri
    Route::resource('perpajakan', 'PerpajakanController');

    // Kawasan Industri
    Route::resource('kepabeanan', 'KepabeananController');

    // Kawasan Industri
    Route::resource('cukai', 'CukaiController');

    // Kawasan Industri
    Route::resource('perdagangan', 'PerdaganganController');

    // Kawasan Industri
    Route::resource('perindustrian', 'PerindustrianController');

    // Kawasan Industri
    Route::resource('ketenagakerjaan', 'KetenagakerjaanController');

    // Kawasan Industri
    Route::resource('perkebunan', 'PerkebunanController');

    // Kawasan Industri
    Route::resource('kehutanan', 'KehutananController');

    // Kawasan Industri
    Route::resource('lingkungan_hidup', 'LingkunganHidupController');

    // Kawasan Industri
    Route::resource('perikanan', 'PerikananController');

    // Kawasan Industri
    Route::resource('agraria', 'AgrariaController');

    // Kawasan Industri
    Route::resource('pancasila', 'PancasilaController');

    // Kawasan Industri
    Route::resource('persatuan', 'PersatuanController');

    // Kawasan Industri
    Route::resource('separatis', 'SeparatisController');

    // Kawasan Industri
    Route::resource('penyelenggaraan', 'PenyelenggaraanController');

    // Kawasan Industri
    Route::resource('parpol', 'ParpolController');

    // Kawasan Industri
    Route::resource('terorisme', 'TerorismeController');

    // Kawasan Industri
    Route::resource('teritorial', 'TeritorialController');

    // Kawasan Industri
    Route::resource('cyber', 'CyberController');

    // Kawasan Industri
    Route::resource('pam', 'PamController');

    // Kawasan Industri
    Route::resource('perkara', 'PerkaraController');
});
