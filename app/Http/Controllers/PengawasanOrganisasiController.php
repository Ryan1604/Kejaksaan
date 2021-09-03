<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\PengawasanOrganisasi;
use Illuminate\Http\Request;

class PengawasanOrganisasiController extends Controller
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
            return datatables()->of(PengawasanOrganisasi::orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.pengawasan-organisasi.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pengawasan-organisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.pengawasan-organisasi.create', compact('kecamatan'));
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
            'status'                => 'nullable|string',
            'akta'                  => 'nullable|date',
            'alamat'                => 'nullable|string',
            'pengurus'              => 'nullable|string',
            'kegiatan'              => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new PengawasanOrganisasi();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->status                   = strip_tags(request()->post('status'));
        $data->akta                     = request()->post('akta');
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->pengurus                 = strip_tags(request()->post('pengurus'));
        $data->kegiatan                 = strip_tags(request()->post('kegiatan'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengawasan_organisasi.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = PengawasanOrganisasi::findOrFail($id);

        return view('admin.pengawasan-organisasi.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = PengawasanOrganisasi::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.pengawasan-organisasi.edit', compact('data', 'kecamatans'));
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
        $data = PengawasanOrganisasi::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'nama'                  => 'nullable|string',
            'status'                => 'nullable|string',
            'akta'                  => 'nullable|date',
            'alamat'                => 'nullable|string',
            'pengurus'              => 'nullable|string',
            'kegiatan'              => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->status                   = strip_tags(request()->post('status'));
        $data->akta                     = request()->post('akta');
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->pengurus                 = strip_tags(request()->post('pengurus'));
        $data->kegiatan                 = strip_tags(request()->post('kegiatan'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();


        return redirect()->route('admin.pengawasan_organisasi.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PengawasanOrganisasi::destroy($id);

        return response()->json($data);
    }
}
