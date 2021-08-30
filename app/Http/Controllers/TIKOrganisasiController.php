<?php

namespace App\Http\Controllers;

use App\Models\TIKOrganisasi;
use Illuminate\Http\Request;

class TIKOrganisasiController extends Controller
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
            return datatables()->of(TIKOrganisasi::orderBy('updated_at', 'DESC')->get())
                ->addColumn('action', 'admin.organisasi.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.organisasi.index');
    }

    public function create()
    {
        return view('admin.organisasi.create');
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
            'akte'                  => 'required|string',
            'status'                => 'required|string',
            'berdiri'               => 'required|date',
            'alamat'                => 'required|string',
            'phone'                 => 'string',
            'web'                   => 'string',
            'nama_pengurus'         => 'string',
            'kedudukan_pengurus'    => 'string',
            'periode_pengurus'      => 'string',
            'alamat_pengurus'       => 'string',
            'hp_pengurus'           => 'string',
            'kegiatan_kedalam'      => 'string',
            'kegiatan_keluar'       => 'string',
            'kegiatan'              => 'string',
        ], $this->customMessages);

        $data = new TIKOrganisasi();
        $data->nama                     = strip_tags(request()->post('nama'));
        $data->akte                     = strip_tags(request()->post('akte'));
        $data->status                   = strip_tags(request()->post('status'));
        $data->berdiri                  = request()->post('berdiri');
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->phone                    = strip_tags(request()->post('phone'));
        $data->web                      = strip_tags(request()->post('web'));
        $data->nama_pengurus            = strip_tags(request()->post('nama_pengurus'));
        $data->kedudukan_pengurus       = strip_tags(request()->post('kedudukan_pengurus'));
        $data->periode_pengurus         = strip_tags(request()->post('periode_pengurus'));
        $data->alamat_pengurus          = strip_tags(request()->post('alamat_pengurus'));
        $data->hp_pengurus              = strip_tags(request()->post('hp_pengurus'));
        $data->kegiatan_kedalam         = strip_tags(request()->post('kegiatan_kedalam'));
        $data->kegiatan_keluar          = strip_tags(request()->post('kegiatan_keluar'));
        $data->kegiatan                 = strip_tags(request()->post('kegiatan'));
        $data->save();

        return redirect()->route('admin.organisasi.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = TIKOrganisasi::findOrFail($id);

        return view('admin.organisasi.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TIKOrganisasi::findOrFail($id);

        return view('admin.organisasi.edit', compact('data'));
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
        $data = TIKOrganisasi::findOrFail($id);
        request()->validate([
            'nama'                  => 'required|string',
            'akte'                  => 'required|string',
            'status'                => 'required|string',
            'berdiri'               => 'required|date',
            'alamat'                => 'required|string',
            'phone'                 => 'string',
            'web'                   => 'string',
            'nama_pengurus'         => 'string',
            'kedudukan_pengurus'    => 'string',
            'periode_pengurus'      => 'string',
            'alamat_pengurus'       => 'string',
            'hp_pengurus'           => 'string',
            'kegiatan_kedalam'      => 'string',
            'kegiatan_keluar'       => 'string',
            'kegiatan'              => 'string',
        ], $this->customMessages);

        $data->nama                     = strip_tags(request()->post('nama'));
        $data->akte                     = strip_tags(request()->post('akte'));
        $data->status                   = strip_tags(request()->post('status'));
        $data->berdiri                  = request()->post('berdiri');
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->phone                    = strip_tags(request()->post('phone'));
        $data->web                      = strip_tags(request()->post('web'));
        $data->nama_pengurus            = strip_tags(request()->post('nama_pengurus'));
        $data->kedudukan_pengurus       = strip_tags(request()->post('kedudukan_pengurus'));
        $data->periode_pengurus         = strip_tags(request()->post('periode_pengurus'));
        $data->alamat_pengurus          = strip_tags(request()->post('alamat_pengurus'));
        $data->hp_pengurus              = strip_tags(request()->post('hp_pengurus'));
        $data->kegiatan_kedalam         = strip_tags(request()->post('kegiatan_kedalam'));
        $data->kegiatan_keluar          = strip_tags(request()->post('kegiatan_keluar'));
        $data->kegiatan                 = strip_tags(request()->post('kegiatan'));
        $data->save();

        return redirect()->route('admin.organisasi.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TIKOrganisasi::destroy($id);

        return response()->json($data);
    }
}
