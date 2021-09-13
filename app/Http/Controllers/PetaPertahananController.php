<?php

namespace App\Http\Controllers;

use App\Models\Cyber;
use App\Models\Gerakan;
use App\Models\PAM;
use App\Models\Pancasila;
use App\Models\Parpol;
use App\Models\Pencegahan;
use App\Models\Pengawasan;
use App\Models\Penyelenggaraan;
use App\Models\Perkara;
use App\Models\Persatuan;
use App\Models\Teritorial;
use App\Models\Terorisme;
use Illuminate\Http\Request;

class PetaPertahananController extends Controller
{
    public function index()
    {
        $pancasila = Pancasila::all();
        $persatuan = Persatuan::all();
        $gerakan = Gerakan::all();
        $penyelenggaraan = Penyelenggaraan::all();
        $parpol = Parpol::all();
        $terorisme = Terorisme::all();
        $teritorial = Teritorial::all();

        $cyber = Cyber::all();
        $pencegahan = Pencegahan::all();
        $pengawasan = Pengawasan::all();
        $pam = PAM::all();
        $perkara = Perkara::all();

        return view('admin.peta-pertahanan.index', compact('pancasila', 'persatuan', 'gerakan', 'penyelenggaraan', 'parpol', 'terorisme', 'teritorial', 'cyber', 'pencegahan', 'pengawasan', 'pam', 'perkara'));
    }

    public function search()
    {
        $id = $_GET['id'];
        $pancasila = Pancasila::with('kecamatan')->where('id', $id)->get();
        $persatuan = Persatuan::with('kecamatan')->where('id', $id)->get();
        $gerakan = Gerakan::with('kecamatan')->where('id', $id)->get();
        $penyelenggaraan = Penyelenggaraan::with('kecamatan')->where('id', $id)->get();
        $parpol = Parpol::with('kecamatan')->where('id', $id)->get();
        $terorisme = Terorisme::with('kecamatan')->where('id', $id)->get();
        $teritorial = Teritorial::with('kecamatan')->where('id', $id)->get();

        $cyber = Cyber::with('kecamatan')->where('id', $id)->get();
        $pencegahan = Pencegahan::with('kecamatan')->where('id', $id)->get();
        $pengawasan = Pengawasan::with('kecamatan')->where('id', $id)->get();
        $pam = PAM::with('kecamatan')->where('id', $id)->get();
        $perkara = Perkara::with('kecamatan')->where('id', $id)->get();

        return array($pancasila, $persatuan, $gerakan, $penyelenggaraan, $parpol, $terorisme, $teritorial, $cyber, $pencegahan, $pengawasan, $pam, $perkara);
    }
}
