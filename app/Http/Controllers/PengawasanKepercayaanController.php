<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\PengawasanKepercayaan;
use Illuminate\Http\Request;

class PengawasanKepercayaanController extends Controller
{
    protected $customMessages = [
        'required'              => ':attribute harus diisi',
        'unique'                => 'This :attribute has already been taken.',
        'integer'               => ':Attribute must be a number.',
        'min'                   => ':Attribute must be at least :min.',
        'max'                   => ':Attribute may not be more than :max characters.',
        'exists'                => 'Not found.',
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(PengawasanKepercayaan::orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.kepercayaan.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.kepercayaan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.kepercayaan.create', compact('kecamatan'));
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
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'nama'                  => 'nullable|string',
            'pimpinan'              => 'nullable|string',
            'alamat'                => 'nullable|string',
            'kegiatan'              => 'nullable|string',
            'jumlah_pengikut'       => 'nullable|string',
            'nomor_pendaftaran'     => 'nullable|string',
            'tgl_pendaftaran'       => 'nullable|string',
            'nomor_badan'           => 'nullable|string',
            'tgl_badan'             => 'nullable|date',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new PengawasanKepercayaan();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->pimpinan                 = strip_tags(request()->post('pimpinan'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->kegiatan                 = strip_tags(request()->post('kegiatan'));
        $data->jumlah_pengikut          = strip_tags(request()->post('jumlah_pengikut'));
        $data->nomor_pendaftaran        = strip_tags(request()->post('nomor_pendaftaran'));
        $data->tgl_pendaftaran          = strip_tags(request()->post('tgl_pendaftaran'));
        $data->nomor_badan              = strip_tags(request()->post('nomor_badan'));
        $data->tgl_badan                = request()->post('tgl_badan');
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.kepercayaan.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = PengawasanKepercayaan::findOrFail($id);

        return view('admin.kepercayaan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = PengawasanKepercayaan::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.kepercayaan.edit', compact('data', 'kecamatans'));
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
        $data = PengawasanKepercayaan::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'nama'                  => 'nullable|string',
            'pimpinan'              => 'nullable|string',
            'alamat'                => 'nullable|string',
            'kegiatan'              => 'nullable|string',
            'jumlah_pengikut'       => 'nullable|string',
            'nomor_pendaftaran'     => 'nullable|string',
            'tgl_pendaftaran'       => 'nullable|string',
            'nomor_badan'           => 'nullable|string',
            'tgl_badan'             => 'nullable|date',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->pimpinan                 = strip_tags(request()->post('pimpinan'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->kegiatan                 = strip_tags(request()->post('kegiatan'));
        $data->jumlah_pengikut          = strip_tags(request()->post('jumlah_pengikut'));
        $data->nomor_pendaftaran        = strip_tags(request()->post('nomor_pendaftaran'));
        $data->tgl_pendaftaran          = strip_tags(request()->post('tgl_pendaftaran'));
        $data->nomor_badan              = strip_tags(request()->post('nomor_badan'));
        $data->tgl_badan                = request()->post('tgl_badan');
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.kepercayaan.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PengawasanKepercayaan::destroy($id);

        return response()->json($data);
    }
}