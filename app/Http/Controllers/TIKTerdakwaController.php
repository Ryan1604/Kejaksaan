<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Kecamatan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\StatusPerkawinan;
use App\Models\SukuBangsa;
use App\Models\TIKTerdakwa;
use App\Models\WargaNegara;
use Illuminate\Http\Request;

class TIKTerdakwaController extends Controller
{
    protected $customMessages = [
        'required'              => ':attribute harus diisi',
        'unique'                => 'This :attribute has already been taken.',
        'integer'               => ':Attribute must be a number.',
        'min'                   => ':Attribute must be at least :min.',
        'max'                   => ':Attribute may not be more than :max characters.',
        'exists'                => 'Not found.',
        'bangsa.required'       => 'Pilih Suku Bangsa.',
        'kecamatan.required'    => 'Pilih Kecamatan.',
        'agama.required'        => 'Pilih Agama.',
        'pendidikan.required'   => 'Pilih Pendidikan.',
        'pekerjaan.required'    => 'Pilih Pekerjaan.',
        'perkawinan.required'   => 'Pilih Status Perkawinan.',
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(TIKTerdakwa::orderBy('updated_at', 'DESC')->get())
                ->addColumn('action', 'admin.terdakwa.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.terdakwa.index');
    }

    public function create()
    {
        $bangsa = SukuBangsa::orderBy('name')->get();
        $kewarganegaraans = WargaNegara::orderBy('name')->get();
        $kecamatan = Kecamatan::orderBy('name')->get();
        $agama = Agama::orderBy('name')->get();
        $pendidikan = Pendidikan::orderBy('name')->get();
        $pekerjaan = Pekerjaan::orderBy('name')->get();
        $perkawinan = StatusPerkawinan::orderBy('name')->get();

        return view('admin.terdakwa.create', compact('bangsa', 'kewarganegaraans', 'kecamatan', 'agama', 'pendidikan', 'pekerjaan', 'perkawinan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama'                  => 'required|string',
            'panggilan'             => 'required|string',
            'tempat_lahir'          => 'required|string',
            'tanggal_lahir'         => 'required|date',
            'jenis_kelamin'         => 'required|string',
            'bangsa'                => 'required|integer',
            'kewarganegaraan'       => 'required|integer',
            'kecamatan'             => 'required|integer',
            'alamat'                => 'required|string',
            'phone'                 => 'required|string',
            'pasport'               => 'required|string',
            'agama'                 => 'required|integer',
            'pendidikan'            => 'required|integer',
            'pekerjaan'             => 'required|integer',
            'alamat_kantor'         => 'required|string',
            'perkawinan'            => 'required|integer',
            'kepartaian'            => 'string',
            'kasus'                 => 'string',
            'background'            => 'string',
            'no_skpp'               => 'string',
            'tgl_skpp'              => 'date',
            'putusan_pengadilan_pn' => 'string',
            'putusan_pengadilan_pt' => 'string',
            'putusan_pengadilan_ma' => 'string',
            'nama_orangtua'         => 'string',
            'nama_kawan'            => 'string',
            'lain'                  => 'string',
        ], $this->customMessages);

        $data = new TIKTerdakwa();
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->panggilan                = strip_tags(request()->post('panggilan'));
        $data->tempat_lahir             = strip_tags(request()->post('tempat_lahir'));
        $data->tanggal_lahir            = request()->post('tanggal_lahir');
        $data->jenis_kelamin            = request()->post('jenis_kelamin');
        $data->bangsa_id                = strip_tags(request()->post('bangsa'));
        $data->kewarganegaraan_id       = strip_tags(request()->post('kewarganegaraan'));
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->phone                    = strip_tags(request()->post('phone'));
        $data->pasport                  = strip_tags(request()->post('pasport'));
        $data->agama_id                 = strip_tags(request()->post('agama'));
        $data->pendidikan_id            = strip_tags(request()->post('pendidikan'));
        $data->pekerjaan_id             = strip_tags(request()->post('pekerjaan'));
        $data->alamat_kantor            = strip_tags(request()->post('alamat_kantor'));
        $data->perkawinan_id            = strip_tags(request()->post('perkawinan'));
        $data->kepartaian               = strip_tags(request()->post('kepartaian'));
        $data->kasus                    = strip_tags(request()->post('kasus'));
        $data->background               = request()->post('background');
        $data->no_skpp                  = strip_tags(request()->post('no_skpp'));
        $data->tgl_skpp                 = strip_tags(request()->post('tgl_skpp'));
        $data->putusan_pengadilan_pn    = strip_tags(request()->post('putusan_pengadilan_pn'));
        $data->putusan_pengadilan_pt    = strip_tags(request()->post('putusan_pengadilan_pt'));
        $data->putusan_pengadilan_ma    = strip_tags(request()->post('putusan_pengadilan_ma'));
        $data->nama_orangtua            = strip_tags(request()->post('nama_orangtua'));
        $data->nama_kawan               = strip_tags(request()->post('nama_kawan'));
        $data->lain                     = strip_tags(request()->post('lain'));
        $data->save();

        return redirect()->route('admin.terdakwa.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $data = TIKTerdakwa::findOrFail($id);
        $bangsa = SukuBangsa::orderBy('name')->get();
        $kewarganegaraans = WargaNegara::orderBy('name')->get();
        $kecamatan = Kecamatan::orderBy('name')->get();
        $agama = Agama::orderBy('name')->get();
        $pendidikan = Pendidikan::orderBy('name')->get();
        $pekerjaan = Pekerjaan::orderBy('name')->get();
        $perkawinan = StatusPerkawinan::orderBy('name')->get();

        $now = \Carbon\Carbon::now();
        $b_day = \Carbon\Carbon::parse($data->tanggal_lahir);
        $age = $b_day->diffInYears($now);

        return view('admin.terdakwa.show', compact('age', 'data', 'bangsa', 'kewarganegaraans', 'kecamatan', 'agama', 'pendidikan', 'pekerjaan', 'perkawinan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TIKTerdakwa::findOrFail($id);
        $bangsas = SukuBangsa::orderBy('name')->get();
        $kewarganegaraans = WargaNegara::orderBy('name')->get();
        $kecamatans = Kecamatan::orderBy('name')->get();
        $agamas = Agama::orderBy('name')->get();
        $pendidikans = Pendidikan::orderBy('name')->get();
        $pekerjaans = Pekerjaan::orderBy('name')->get();
        $perkawinans = StatusPerkawinan::orderBy('name')->get();

        return view('admin.terdakwa.edit', compact('data', 'kewarganegaraans', 'bangsas', 'kecamatans', 'agamas', 'pendidikans', 'pekerjaans', 'perkawinans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = TIKTerdakwa::findOrFail($id);
        request()->validate([
            'nama'                  => 'required|string',
            'panggilan'             => 'required|string',
            'tempat_lahir'          => 'required|string',
            'tanggal_lahir'         => 'required|date',
            'jenis_kelamin'         => 'required|string',
            'bangsa'                => 'required|integer',
            'kewarganegaraan'       => 'required|integer',
            'kecamatan'             => 'required|integer',
            'alamat'                => 'required|string',
            'phone'                 => 'required|string',
            'pasport'               => 'required|string',
            'agama'                 => 'required|integer',
            'pendidikan'            => 'required|integer',
            'pekerjaan'             => 'required|integer',
            'alamat_kantor'         => 'required|string',
            'perkawinan'            => 'required|integer',
            'kepartaian'            => 'string',
            'kasus'                 => 'string',
            'background'            => 'string',
            'no_skpp'               => 'string',
            'tgl_skpp'              => 'date',
            'putusan_pengadilan_pn' => 'string',
            'putusan_pengadilan_pt' => 'string',
            'putusan_pengadilan_ma' => 'string',
            'nama_orangtua'         => 'string',
            'nama_kawan'            => 'string',
            'lain'                  => 'string',
        ], $this->customMessages);

        $data->nama                     = strip_tags(request()->post('nama'));
        $data->panggilan                = strip_tags(request()->post('panggilan'));
        $data->tempat_lahir             = strip_tags(request()->post('tempat_lahir'));
        $data->tanggal_lahir            = request()->post('tanggal_lahir');
        $data->jenis_kelamin            = request()->post('jenis_kelamin');
        $data->bangsa_id                = strip_tags(request()->post('bangsa'));
        $data->kewarganegaraan_id       = strip_tags(request()->post('kewarganegaraan'));
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->phone                    = strip_tags(request()->post('phone'));
        $data->pasport                  = strip_tags(request()->post('pasport'));
        $data->agama_id                 = strip_tags(request()->post('agama'));
        $data->pendidikan_id            = strip_tags(request()->post('pendidikan'));
        $data->pekerjaan_id             = strip_tags(request()->post('pekerjaan'));
        $data->alamat_kantor            = strip_tags(request()->post('alamat_kantor'));
        $data->perkawinan_id            = strip_tags(request()->post('perkawinan'));
        $data->kepartaian               = strip_tags(request()->post('kepartaian'));
        $data->kasus                    = strip_tags(request()->post('kasus'));
        $data->background               = request()->post('background');
        $data->no_skpp                  = strip_tags(request()->post('no_skpp'));
        $data->tgl_skpp                 = strip_tags(request()->post('tgl_skpp'));
        $data->putusan_pengadilan_pn    = strip_tags(request()->post('putusan_pengadilan_pn'));
        $data->putusan_pengadilan_pt    = strip_tags(request()->post('putusan_pengadilan_pt'));
        $data->putusan_pengadilan_ma    = strip_tags(request()->post('putusan_pengadilan_ma'));
        $data->nama_orangtua            = strip_tags(request()->post('nama_orangtua'));
        $data->nama_kawan               = strip_tags(request()->post('nama_kawan'));
        $data->lain                     = strip_tags(request()->post('lain'));
        $data->save();

        return redirect()->route('admin.terdakwa.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TIKTerdakwa::destroy($id);

        return response()->json($data);
    }
}
