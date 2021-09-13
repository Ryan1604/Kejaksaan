<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Berita;
use App\Models\Digital;
use App\Models\Klandestine;
use App\Models\Kontra;
use App\Models\Pemantauan;
use App\Models\Pengamanan;
use App\Models\Produksi;
use App\Models\Prosedur;
use App\Models\Sandi;
use App\Models\Sdm;
use App\Models\Siber;
use App\Models\Signal;
use Illuminate\Http\Request;

class PetaTeknologiController extends Controller
{
    public function index()
    {
        $produksi = Produksi::all();
        $pemantauan = Pemantauan::all();
        $signal = Signal::all();
        $siber = Siber::all();
        $klandestine = Klandestine::all();
        $sdm = Sdm::all();
        $prosedur = Prosedur::all();

        $digital = Digital::all();
        $berita = Berita::all();
        $kontra = Kontra::all();
        $audit = Audit::all();
        $pengamanan = Pengamanan::all();
        $sandi = Sandi::all();

        return view('admin.peta-teknologi.index', compact('produksi', 'pemantauan', 'signal', 'siber', 'klandestine', 'sdm', 'prosedur', 'digital', 'berita', 'kontra', 'audit', 'pengamanan', 'sandi'));
    }

    public function search()
    {
        $id = $_GET['id'];
        $produksi = Produksi::with('kecamatan')->where('id', $id)->get();
        $pemantauan = Pemantauan::with('kecamatan')->where('id', $id)->get();
        $signal = Signal::with('kecamatan')->where('id', $id)->get();
        $siber = Siber::with('kecamatan')->where('id', $id)->get();
        $klandestine = Klandestine::with('kecamatan')->where('id', $id)->get();
        $sdm = Sdm::with('kecamatan')->where('id', $id)->get();
        $prosedur = Prosedur::with('kecamatan')->where('id', $id)->get();

        $digital = Digital::with('kecamatan')->where('id', $id)->get();
        $berita = Berita::with('kecamatan')->where('id', $id)->get();
        $kontra = Kontra::with('kecamatan')->where('id', $id)->get();
        $audit = Audit::with('kecamatan')->where('id', $id)->get();
        $pengamanan = Pengamanan::with('kecamatan')->where('id', $id)->get();
        $sandi = Sandi::with('kecamatan')->where('id', $id)->get();

        return array($produksi, $pemantauan, $signal, $siber, $klandestine, $sdm, $prosedur, $digital, $berita, $kontra, $audit, $pengamanan, $sandi);
    }
}
