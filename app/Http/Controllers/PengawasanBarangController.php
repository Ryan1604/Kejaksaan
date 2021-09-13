<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\PengawasanBarang;
use Illuminate\Http\Request;

class PengawasanBarangController extends Controller
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
            return datatables()->of(PengawasanBarang::orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.pengawasan-barang.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pengawasan-barang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.pengawasan-barang.create', compact('kecamatan'));
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
            'barang'                => 'nullable|string',
            'tgl_penerbitan'        => 'nullable|date',
            'penulis'               => 'nullable|string',
            'judul'                 => 'nullable|string',
            'hasil'                 => 'nullable|string',
            'tindak_lanjut'         => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new PengawasanBarang();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->barang                   = strip_tags(request()->post('barang'));
        $data->tgl_penerbitan           = request()->post('tgl_penerbitan');
        $data->penulis                  = strip_tags(request()->post('penulis'));
        $data->judul                    = strip_tags(request()->post('judul'));
        $data->hasil                    = strip_tags(request()->post('hasil'));
        $data->tindak_lanjut            = strip_tags(request()->post('tindak_lanjut'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengawasan_barang.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = PengawasanBarang::findOrFail($id);

        return view('admin.pengawasan-barang.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = PengawasanBarang::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.pengawasan-barang.edit', compact('data', 'kecamatans'));
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
        $data = PengawasanBarang::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'barang'                => 'nullable|string',
            'tgl_penerbitan'        => 'nullable|date',
            'penulis'               => 'nullable|string',
            'judul'                 => 'nullable|string',
            'hasil'                 => 'nullable|string',
            'tindak_lanjut'         => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->barang                   = strip_tags(request()->post('barang'));
        $data->tgl_penerbitan           = request()->post('tgl_penerbitan');
        $data->penulis                  = strip_tags(request()->post('penulis'));
        $data->judul                    = strip_tags(request()->post('judul'));
        $data->hasil                    = strip_tags(request()->post('hasil'));
        $data->tindak_lanjut            = strip_tags(request()->post('tindak_lanjut'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengawasan_barang.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PengawasanBarang::destroy($id);

        return response()->json($data);
    }

    public function filter()
    {
        return view('admin.pengawasan-barang.filter');
    }

    public function download(Request $request)
    {
        $month          = request()->post('bulan');
        $year           = request()->post('tahun');
        $jabatan        = request()->post('jabatan');
        $nama           = request()->post('nama');
        $nip            = request()->post('nip');
        $year           = request()->post('tahun');
        $data = PengawasanBarang::whereYear('tgl', '=', $year)
            ->whereMonth('tgl', '=', $month)
            ->get();

        return view('admin.pengawasan-barang.show', compact('data', 'month', 'year', 'jabatan', 'nama', 'nip'));
    }
}
