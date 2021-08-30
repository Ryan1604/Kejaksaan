<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\BiodataWNI;
use App\Models\Kecamatan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\StatusPerkawinan;
use App\Models\SukuBangsa;
use Illuminate\Http\Request;

class BiodataWNIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            return datatables()->of(BiodataWNI::orderBy('updated_at', 'DESC')->get())
                ->addColumn('action', 'admin.wni.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.wni.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bangsa = SukuBangsa::orderBy('name')->get();
        $kecamatan = Kecamatan::orderBy('name')->get();
        $agama = Agama::orderBy('name')->get();
        $pendidikan = Pendidikan::orderBy('name')->get();
        $pekerjaan = Pekerjaan::orderBy('name')->get();
        $perkawinan = StatusPerkawinan::orderBy('name')->get();

        return view('admin.wni.create', compact('bangsa', 'kecamatan', 'agama', 'pendidikan', 'pekerjaan', 'perkawinan'));
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
            'nik'                   => 'required|integer',
            'nama'                  => 'required|string',
            'tempat_lahir'          => 'required|string',
            'tanggal_lahir'         => 'required|date',
            'jenis_kelamin'         => 'required|string',
            'bangsa'                => 'required|integer',
            'kecamatan'             => 'required|integer',
            'alamat'                => 'required|string',
            'phone'                 => 'required|string',
            'agama'                 => 'required|integer',
            'pendidikan'            => 'required|integer',
            'pekerjaan'             => 'required|integer',
            'alamat_kantor'         => 'required|string',
            'perkawinan'            => 'required|integer',
            'legitimasi_perkawinan' => 'string',
            'tempat_perkawinan'     => 'string',
            'tanggal_perkawinan'    => 'date',
        ], $this->customMessages);

        $data = new BiodataWNI();
        $data->nik                      = strip_tags(request()->post('nik'));
        $data->name                     = strip_tags(request()->post('nama'));
        $data->tempat_lahir             = strip_tags(request()->post('tempat_lahir'));
        $data->tanggal_lahir            = request()->post('tanggal_lahir');
        $data->jenis_kelamin            = request()->post('jenis_kelamin');
        $data->bangsa_id                = strip_tags(request()->post('bangsa'));
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->phone                    = strip_tags(request()->post('phone'));
        $data->agama_id                 = strip_tags(request()->post('agama'));
        $data->pendidikan_id            = strip_tags(request()->post('pendidikan'));
        $data->pekerjaan_id             = strip_tags(request()->post('pekerjaan'));
        $data->alamat_kantor            = strip_tags(request()->post('alamat_kantor'));
        $data->perkawinan_id            = strip_tags(request()->post('perkawinan'));
        $data->legitimasi_perkawinan    = strip_tags(request()->post('legitimasi_perkawinan'));
        $data->tempat_perkawinan        = strip_tags(request()->post('tempat_perkawinan'));
        $data->tanggal_perkawinan       = request()->post('tanggal_perkawinan');
        $data->save();

        return redirect()->route('admin.wni.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BiodataWNI::findOrFail($id);
        $bangsa = SukuBangsa::orderBy('name')->get();
        $kecamatan = Kecamatan::orderBy('name')->get();
        $agama = Agama::orderBy('name')->get();
        $pendidikan = Pendidikan::orderBy('name')->get();
        $pekerjaan = Pekerjaan::orderBy('name')->get();
        $perkawinan = StatusPerkawinan::orderBy('name')->get();

        return view('admin.wni.show', compact('data', 'bangsa', 'kecamatan', 'agama', 'pendidikan', 'pekerjaan', 'perkawinan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BiodataWNI::findOrFail($id);
        $bangsas = SukuBangsa::orderBy('name')->get();
        $kecamatans = Kecamatan::orderBy('name')->get();
        $agamas = Agama::orderBy('name')->get();
        $pendidikans = Pendidikan::orderBy('name')->get();
        $pekerjaans = Pekerjaan::orderBy('name')->get();
        $perkawinans = StatusPerkawinan::orderBy('name')->get();

        return view('admin.wni.edit', compact('data', 'bangsas', 'kecamatans', 'agamas', 'pendidikans', 'pekerjaans', 'perkawinans'));
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
        $data = BiodataWNI::findOrFail($id);
        request()->validate([
            'nik'                   => 'required|integer',
            'nama'                  => 'required|string',
            'tempat_lahir'          => 'required|string',
            'tanggal_lahir'         => 'required|date',
            'jenis_kelamin'         => 'required|string',
            'bangsa'                => 'required|integer',
            'kecamatan'             => 'required|integer',
            'alamat'                => 'required|string',
            'phone'                 => 'required|string',
            'agama'                 => 'required|integer',
            'pendidikan'            => 'required|integer',
            'pekerjaan'             => 'required|integer',
            'alamat_kantor'         => 'required|string',
            'perkawinan'            => 'required|integer',
            'legitimasi_perkawinan' => 'string',
            'tempat_perkawinan'     => 'string',
            'tanggal_perkawinan'    => 'date',
        ], $this->customMessages);

        $data->nik                      = strip_tags(request()->post('nik'));
        $data->name                     = strip_tags(request()->post('nama'));
        $data->tempat_lahir             = strip_tags(request()->post('tempat_lahir'));
        $data->tanggal_lahir            = request()->post('tanggal_lahir');
        $data->jenis_kelamin            = request()->post('jenis_kelamin');
        $data->bangsa_id                = strip_tags(request()->post('bangsa'));
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->phone                    = strip_tags(request()->post('phone'));
        $data->agama_id                 = strip_tags(request()->post('agama'));
        $data->pendidikan_id            = strip_tags(request()->post('pendidikan'));
        $data->pekerjaan_id             = strip_tags(request()->post('pekerjaan'));
        $data->alamat_kantor            = strip_tags(request()->post('alamat_kantor'));
        $data->perkawinan_id            = strip_tags(request()->post('perkawinan'));
        $data->legitimasi_perkawinan    = strip_tags(request()->post('legitimasi_perkawinan'));
        $data->tempat_perkawinan        = strip_tags(request()->post('tempat_perkawinan'));
        $data->tanggal_perkawinan       = request()->post('tanggal_perkawinan');
        $data->save();

        return redirect()->route('admin.wni.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = BiodataWNI::destroy($id);

        return response()->json($data);
    }
}
