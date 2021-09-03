<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Ketertiban;
use Illuminate\Http\Request;

class KetertibanController extends Controller
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
            return datatables()->of(Ketertiban::orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.ketertiban.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.ketertiban.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.ketertiban.create', compact('kecamatan'));
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
            'jenis_masalah'         => 'nullable|string',
            'pokok_permasalahan'    => 'nullable|string',
            'sumber_informasi'      => 'nullable|string',
            'info'                  => 'nullable|string',
            'perkembangan'          => 'nullable|string',
            'penyelesaian'          => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new Ketertiban();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->direktorat               = strip_tags(request()->post('direktorat'));
        $data->jenis_masalah            = strip_tags(request()->post('jenis_masalah'));
        $data->pokok_permasalahan       = request()->post('pokok_permasalahan');
        $data->sumber_informasi         = strip_tags(request()->post('sumber_informasi'));
        $data->info                     = strip_tags(request()->post('info'));
        $data->perkembangan             = strip_tags(request()->post('perkembangan'));
        $data->penyelesaian             = strip_tags(request()->post('penyelesaian'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.ketertiban.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = Ketertiban::findOrFail($id);

        return view('admin.ketertiban.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = Ketertiban::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.ketertiban.edit', compact('data', 'kecamatans'));
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
        $data = Ketertiban::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'direktorat'            => 'nullable|string',
            'jenis_masalah'         => 'nullable|string',
            'pokok_permasalahan'    => 'nullable|string',
            'sumber_informasi'      => 'nullable|string',
            'info'                  => 'nullable|string',
            'perkembangan'          => 'nullable|string',
            'penyelesaian'          => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->direktorat               = strip_tags(request()->post('direktorat'));
        $data->jenis_masalah            = strip_tags(request()->post('jenis_masalah'));
        $data->pokok_permasalahan       = request()->post('pokok_permasalahan');
        $data->sumber_informasi         = strip_tags(request()->post('sumber_informasi'));
        $data->info                     = strip_tags(request()->post('info'));
        $data->perkembangan             = strip_tags(request()->post('perkembangan'));
        $data->penyelesaian             = strip_tags(request()->post('penyelesaian'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();


        return redirect()->route('admin.ketertiban.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ketertiban::destroy($id);

        return response()->json($data);
    }
}