<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pembinaan;
use Illuminate\Http\Request;

class PembinaanController extends Controller
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
            return datatables()->of(Pembinaan::orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.pembinaan.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pembinaan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.pembinaan.create', compact('kecamatan'));
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
            'direktorat'            => 'nullable|string',
            'peserta'               => 'nullable|string',
            'waktu'                 => 'nullable|date',
            'tempat'                => 'nullable|string',
            'materi'                => 'nullable|string',
            'jumlah_peserta'        => 'nullable|string',
            'penyelesaian'          => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new Pembinaan();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->direktorat               = strip_tags(request()->post('direktorat'));
        $data->peserta                  = strip_tags(request()->post('peserta'));
        $data->waktu                    = request()->post('waktu');
        $data->tempat                   = strip_tags(request()->post('tempat'));
        $data->materi                   = strip_tags(request()->post('materi'));
        $data->jumlah_peserta           = strip_tags(request()->post('jumlah_peserta'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pembinaan.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = Pembinaan::findOrFail($id);

        return view('admin.pembinaan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = Pembinaan::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.pembinaan.edit', compact('data', 'kecamatans'));
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
        $data = Pembinaan::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'direktorat'            => 'nullable|string',
            'peserta'               => 'nullable|string',
            'waktu'                 => 'nullable|date',
            'tempat'                => 'nullable|string',
            'materi'                => 'nullable|string',
            'jumlah_peserta'        => 'nullable|string',
            'penyelesaian'          => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->direktorat               = strip_tags(request()->post('direktorat'));
        $data->peserta                  = strip_tags(request()->post('peserta'));
        $data->waktu                    = request()->post('waktu');
        $data->tempat                   = strip_tags(request()->post('tempat'));
        $data->materi                   = strip_tags(request()->post('materi'));
        $data->jumlah_peserta           = strip_tags(request()->post('jumlah_peserta'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();


        return redirect()->route('admin.pembinaan.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pembinaan::destroy($id);

        return response()->json($data);
    }
}
