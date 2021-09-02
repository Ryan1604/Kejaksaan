<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pengobatan;
use Illuminate\Http\Request;

class PengobatanController extends Controller
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
            return datatables()->of(Pengobatan::orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.pengobatan.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pengobatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.pengobatan.create', compact('kecamatan'));
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
            'nama_klinik'           => 'nullable|string',
            'alamat'                => 'nullable|string',
            'identitas'             => 'nullable|string',
            'jumlah_pembantu'       => 'nullable|string',
            'sumber_informasi'      => 'nullable|string',
            'asal_mula'             => 'nullable|string',
            'cara'                  => 'nullable|string',
            'nomor_ijin'            => 'nullable|string',
            'tgl_ijin'              => 'nullable|date',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new Pengobatan();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->nama_klinik              = strip_tags(request()->post('nama_klinik'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->identitas                = strip_tags(request()->post('identitas'));
        $data->jumlah_pembantu          = strip_tags(request()->post('jumlah_pembantu'));
        $data->sumber_informasi         = strip_tags(request()->post('sumber_informasi'));
        $data->asal_mula                = strip_tags(request()->post('asal_mula'));
        $data->cara                     = strip_tags(request()->post('cara'));
        $data->nomor_ijin               = strip_tags(request()->post('nomor_ijin'));
        $data->tgl_ijin                 = request()->post('tgl_ijin');
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengobatan.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = Pengobatan::findOrFail($id);

        return view('admin.pengobatan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = Pengobatan::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.pengobatan.edit', compact('data', 'kecamatans'));
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
        $data = Pengobatan::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'nama_klinik'           => 'nullable|string',
            'alamat'                => 'nullable|string',
            'identitas'             => 'nullable|string',
            'jumlah_pembantu'       => 'nullable|string',
            'sumber_informasi'      => 'nullable|string',
            'asal_mula'             => 'nullable|string',
            'cara'                  => 'nullable|string',
            'nomor_ijin'            => 'nullable|string',
            'tgl_ijin'              => 'nullable|date',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->nama_klinik              = strip_tags(request()->post('nama_klinik'));
        $data->alamat                   = strip_tags(request()->post('alamat'));
        $data->identitas                = strip_tags(request()->post('identitas'));
        $data->jumlah_pembantu          = strip_tags(request()->post('jumlah_pembantu'));
        $data->sumber_informasi         = strip_tags(request()->post('sumber_informasi'));
        $data->asal_mula                = strip_tags(request()->post('asal_mula'));
        $data->cara                     = strip_tags(request()->post('cara'));
        $data->nomor_ijin               = strip_tags(request()->post('nomor_ijin'));
        $data->tgl_ijin                 = request()->post('tgl_ijin');
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengobatan.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengobatan::destroy($id);

        return response()->json($data);
    }
}
