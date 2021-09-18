<?php

namespace App\Http\Controllers;

use App\Models\BiodataWNI;
use App\Models\Kecamatan;
use App\Models\TIKTerdakwa;
use App\Models\Umum;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    protected $customMessages = [
        'required'              => ':attribute harus diisi',
        'unique'                => 'This :attribute has already been taken.',
        'integer'               => ':Attribute must be a number.',
        'min'                   => ':Attribute must be at least :min.',
        'max'                   => ':Attribute may not be more than :max characters.',
        'exists'                => 'Not found.',
        'biodata.required'      => 'Pilih Informasi Terdakwa.',
        'kecamatan.required'    => 'Pilih Kecamatan.',
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Umum::with('biodata')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('biodata', 'admin.umum.biodata')
                ->addColumn('action', 'admin.umum.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.umum.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = TIKTerdakwa::orderBy('nama')->get();
        $kecamatan = Kecamatan::orderBy('name')->get();

        return view('admin.umum.create', compact('biodata', 'kecamatan'));
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
            'tgl'                       => 'required|date',
            'biodata'                   => 'required|integer',
            'kecamatan'                 => 'required|integer',
            'locus'                     => 'required|date',
            'tgl_surat_pra_penuntutan'  => 'nullable|date',
            'nomor_surat_pra_penuntutan' => 'nullable|string',
            'tgl_surat_penuntutan'      => 'nullable|date',
            'nomor_surat_penuntutan'    => 'nullable|string',
            'eksekusi'                  => 'required|string',
            'upaya'                     => 'required|string',
            'keterangan'                => 'required|string',
        ], $this->customMessages);

        $data = new Umum();
        $data->tgl                          = request()->post('tgl');
        $data->biodata_id                   = strip_tags(request()->post('biodata'));
        $data->kecamatan_id                 = strip_tags(request()->post('kecamatan'));
        $data->locus                        = request()->post('locus');
        $data->tgl_surat_pra_penuntutan     = request()->post('tgl_surat_pra_penuntutan');
        $data->nomor_surat_pra_penuntutan   = strip_tags(request()->post('nomor_surat_pra_penuntutan'));
        $data->tgl_surat_penuntutan         = request()->post('tgl_surat_penuntutan');
        $data->nomor_surat_penuntutan       = strip_tags(request()->post('nomor_surat_penuntutan'));
        $data->eksekusi                     = strip_tags(request()->post('eksekusi'));
        $data->upaya                        = strip_tags(request()->post('upaya'));
        $data->keterangan                   = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.umum.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Umum::findOrFail($id);
        $kecamatan = Kecamatan::orderBy('name')->get();

        return view('admin.umum.show', compact('data', 'kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Umum::findOrFail($id);
        $biodatas = TIKTerdakwa::orderBy('nama')->get();
        $kecamatans = Kecamatan::orderBy('name')->get();

        return view('admin.umum.edit', compact('data', 'biodatas', 'kecamatans'));
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
        $data = Umum::findOrFail($id);
        request()->validate([
            'tgl'                       => 'required|date',
            'biodata'                   => 'required|integer',
            'kecamatan'                 => 'required|integer',
            'locus'                     => 'required|date',
            'tgl_surat_pra_penuntutan'  => 'nullable|date',
            'nomor_surat_pra_penuntutan' => 'nullable|string',
            'tgl_surat_penuntutan'      => 'nullable|date',
            'nomor_surat_penuntutan'    => 'nullable|string',
            'eksekusi'                  => 'required|string',
            'upaya'                     => 'required|string',
            'keterangan'                => 'required|string',
        ], $this->customMessages);

        $data->tgl                          = request()->post('tgl');
        $data->biodata_id                   = strip_tags(request()->post('biodata'));
        $data->kecamatan_id                 = strip_tags(request()->post('kecamatan'));
        $data->locus                        = request()->post('locus');
        $data->tgl_surat_pra_penuntutan     = request()->post('tgl_surat_pra_penuntutan');
        $data->nomor_surat_pra_penuntutan   = strip_tags(request()->post('nomor_surat_pra_penuntutan'));
        $data->tgl_surat_penuntutan         = request()->post('tgl_surat_penuntutan');
        $data->nomor_surat_penuntutan       = strip_tags(request()->post('nomor_surat_penuntutan'));
        $data->eksekusi                     = strip_tags(request()->post('eksekusi'));
        $data->upaya                        = strip_tags(request()->post('upaya'));
        $data->keterangan                   = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.umum.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Umum::destroy($id);

        return response()->json($data);
    }

    public function filter()
    {
        return view('admin.umum.filter');
    }

    public function download(Request $request)
    {
        $month = request()->post('bulan');
        $year = request()->post('tahun');
        $data = Umum::with('biodata')->whereYear('tgl', '=', $year)
            ->whereMonth('tgl', '=', $month)
            ->get();

        return view('admin.umum.show', compact('data', 'month', 'year'));
    }
}
