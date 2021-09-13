<?php

namespace App\Http\Controllers;

use App\Models\Agraria;
use App\Models\Asset;
use App\Models\Cukai;
use App\Models\Investasi;
use App\Models\Kehutanan;
use App\Models\Kepabeanan;
use App\Models\Ketenagakerjaan;
use App\Models\KeuanganNegara;
use App\Models\LembagaKeuangan;
use App\Models\LingkunganHidup;
use App\Models\Moneter;
use App\Models\Perdagangan;
use App\Models\Perikanan;
use App\Models\Perindustrian;
use App\Models\Perkebunan;
use App\Models\Perpajakan;
use Illuminate\Http\Request;

class PetaEkonomiController extends Controller
{
    public function index()
    {
        $lembaga = LembagaKeuangan::all();
        $negara = KeuanganNegara::all();
        $moneter = Moneter::all();
        $asset = Asset::all();
        $investasi = Investasi::all();
        $pajak = Perpajakan::all();
        $pabean = Kepabeanan::all();
        $cukai = Cukai::all();

        $dagang = Perdagangan::all();
        $industri = Perindustrian::all();
        $kerja = Ketenagakerjaan::all();
        $kebun = Perkebunan::all();
        $hutan = Kehutanan::all();
        $hidup = LingkunganHidup::all();
        $ikan = Perikanan::all();
        $agraria = Agraria::all();

        return view('admin.peta-ekonomi.index', compact('lembaga', 'negara', 'moneter', 'asset', 'investasi', 'pajak', 'pabean', 'cukai', 'dagang', 'industri', 'kerja', 'kebun', 'hutan', 'hidup', 'ikan', 'agraria'));
    }

    public function search()
    {
        $id = $_GET['id'];
        $lembaga = LembagaKeuangan::with('kecamatan')->where('id', $id)->get();
        $negara = KeuanganNegara::with('kecamatan')->where('id', $id)->get();
        $moneter = Moneter::with('kecamatan')->where('id', $id)->get();
        $asset = Asset::with('kecamatan')->where('id', $id)->get();
        $investasi = Investasi::with('kecamatan')->where('id', $id)->get();
        $pajak = Perpajakan::with('kecamatan')->where('id', $id)->get();
        $pabean = Kepabeanan::with('kecamatan')->where('id', $id)->get();
        $cukai = Cukai::with('kecamatan')->where('id', $id)->get();

        $dagang = Perdagangan::with('kecamatan')->where('id', $id)->get();
        $industri = Perindustrian::with('kecamatan')->where('id', $id)->get();
        $kerja = Ketenagakerjaan::with('kecamatan')->where('id', $id)->get();
        $kebun = Perkebunan::with('kecamatan')->where('id', $id)->get();
        $hutan = Kehutanan::with('kecamatan')->where('id', $id)->get();
        $hidup = LingkunganHidup::with('kecamatan')->where('id', $id)->get();
        $ikan = Perikanan::with('kecamatan')->where('id', $id)->get();
        $agraria = Agraria::with('kecamatan')->where('id', $id)->get();

        return array($lembaga, $negara, $moneter, $asset, $investasi, $pajak, $pabean, $cukai, $dagang, $industri, $kerja, $kebun, $hutan, $hidup, $ikan, $agraria);
    }
}
