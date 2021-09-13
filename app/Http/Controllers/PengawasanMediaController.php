<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\PengawasanMedia;
use Illuminate\Http\Request;

class PengawasanMediaController extends Controller
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
            return datatables()->of(PengawasanMedia::orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.pengawasan-media.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pengawasan-media.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.pengawasan-media.create', compact('kecamatan'));
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
            'jenis_media'           => 'nullable|string',
            'tgl_publikasi'         => 'nullable|date',
            'pimpinan'              => 'nullable|string',
            'konten'                 => 'nullable|string',
            'hasil'                 => 'nullable|string',
            'tindak_lanjut'         => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new PengawasanMedia();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->jenis_media              = strip_tags(request()->post('jenis_media'));
        $data->tgl_publikasi            = request()->post('tgl_publikasi');
        $data->pimpinan                 = strip_tags(request()->post('pimpinan'));
        $data->konten                   = strip_tags(request()->post('konten'));
        $data->hasil                    = strip_tags(request()->post('hasil'));
        $data->tindak_lanjut            = strip_tags(request()->post('tindak_lanjut'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengawasan_media.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = PengawasanMedia::findOrFail($id);

        return view('admin.pengawasan-media.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = PengawasanMedia::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.pengawasan-media.edit', compact('data', 'kecamatans'));
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
        $data = PengawasanMedia::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'jenis_media'           => 'nullable|string',
            'tgl_publikasi'         => 'nullable|date',
            'pimpinan'              => 'nullable|string',
            'konten'                 => 'nullable|string',
            'hasil'                 => 'nullable|string',
            'tindak_lanjut'         => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->jenis_media              = strip_tags(request()->post('jenis_media'));
        $data->tgl_publikasi            = request()->post('tgl_publikasi');
        $data->pimpinan                 = strip_tags(request()->post('pimpinan'));
        $data->konten                   = strip_tags(request()->post('konten'));
        $data->hasil                    = strip_tags(request()->post('hasil'));
        $data->tindak_lanjut            = strip_tags(request()->post('tindak_lanjut'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengawasan_media.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PengawasanMedia::destroy($id);

        return response()->json($data);
    }

    public function filter()
    {
        return view('admin.pengawasan-media.filter');
    }

    public function download(Request $request)
    {
        $month          = request()->post('bulan');
        $year           = request()->post('tahun');
        $jabatan        = request()->post('jabatan');
        $nama           = request()->post('nama');
        $nip            = request()->post('nip');
        $year           = request()->post('tahun');
        $data = PengawasanMedia::whereYear('tgl', '=', $year)
            ->whereMonth('tgl', '=', $month)
            ->get();

        return view('admin.pengawasan-media.show', compact('data', 'month', 'year', 'jabatan', 'nama', 'nip'));
    }
}
