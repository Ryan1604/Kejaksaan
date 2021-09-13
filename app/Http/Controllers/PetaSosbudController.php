<?php

namespace App\Http\Controllers;

use App\Models\Barcet;
use App\Models\Budaya;
use App\Models\Import;
use App\Models\Konflik;
use App\Models\Ormas;
use App\Models\Pakem;
use App\Models\Pemberdayaan;
use App\Models\Pembinaan;
use App\Models\Pembukuan;
use App\Models\PengawasanMedia;
use App\Models\Penodaan;
use App\Models\Tramtibum;

class PetaSosbudController extends Controller
{
    public function index()
    {
        $barcet = Barcet::all();
        $import = Import::all();
        $pembukuan = Pembukuan::all();
        $media = PengawasanMedia::all();
        $pakem = Pakem::all();
        $penodaan = Penodaan::all();

        $budaya = Budaya::all();
        $pemberdayaan = Pemberdayaan::all();
        $ormas = Ormas::all();
        $konflik = Konflik::all();
        $tramtibum = Tramtibum::all();
        $pembinaan = Pembinaan::all();

        return view('admin.peta-sosbud.index', compact('barcet', 'import', 'pembukuan', 'media', 'pakem', 'penodaan', 'budaya', 'pemberdayaan', 'ormas', 'konflik', 'tramtibum', 'pembinaan'));
    }

    public function search()
    {
        $id = $_GET['id'];
        $barcet = Barcet::with('kecamatan')->where('id', $id)->get();
        $import = Import::with('kecamatan')->where('id', $id)->get();
        $pembukuan = Pembukuan::with('kecamatan')->where('id', $id)->get();
        $media = PengawasanMedia::with('kecamatan')->where('id', $id)->get();
        $pakem = Pakem::with('kecamatan')->where('id', $id)->get();
        $penodaan = Penodaan::with('kecamatan')->where('id', $id)->get();

        $budaya = Budaya::with('kecamatan')->where('id', $id)->get();
        $pemberdayaan = Pemberdayaan::with('kecamatan')->where('id', $id)->get();
        $ormas = Ormas::with('kecamatan')->where('id', $id)->get();
        $konflik = Konflik::with('kecamatan')->where('id', $id)->get();
        $tramtibum = Tramtibum::with('kecamatan')->where('id', $id)->get();
        $pembinaan = Pembinaan::with('kecamatan')->where('id', $id)->get();

        return array($barcet, $import, $pembukuan, $media, $pakem, $penodaan, $budaya, $pemberdayaan, $ormas, $konflik, $tramtibum, $pembinaan);
    }
}
