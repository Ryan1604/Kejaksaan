<?php

namespace App\Http\Controllers;

use App\Models\BiodataWNI;
use App\Models\Kecamatan;
use App\Models\Pencegahan;
use Illuminate\Http\Request;

class PencegahanController extends Controller
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
        'biodata.required'      => 'Pilih Informasi Terdakwa.',
        'kecamatan.required'    => 'Pilih Kecamatan.',
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Pencegahan::with('biodata')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('biodata', 'admin.pencegahan.biodata')
                ->addColumn('action', 'admin.pencegahan.action')
                ->rawColumns(['biodata', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pencegahan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = BiodataWNI::orderBy('name')->get();
        $kecamatan = Kecamatan::orderBy('name')->get();

        return view('admin.pencegahan.create', compact('biodata', 'kecamatan'));
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
            'tgl'                   => 'required|date',
            'biodata'               => 'required|integer',
            'kecamatan'             => 'required|integer',
            'nomor_pencegahan'      => 'nullable|string',
            'tgl_pencegahan'        => 'nullable|date',
            'locus'                 => 'nullable|date',
            'pasal'                 => 'nullable|string',
            'nomor_kepja'           => 'nullable|string',
            'tgl_kepja'             => 'nullable|date',
            'tgl_mulai'             => 'nullable|date',
            'tgl_akhir'             => 'nullable|date',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new Pencegahan();
        $data->tgl                      = request()->post('tgl');
        $data->biodata_id               = strip_tags(request()->post('biodata'));
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan'));
        $data->nomor_pencegahan         = strip_tags(request()->post('nomor_pencegahan'));
        $data->tgl_pencegahan           = request()->post('tgl_pencegahan');
        $data->locus                    = request()->post('locus');
        $data->pasal                    = strip_tags(request()->post('pasal'));
        $data->nomor_kepja              = strip_tags(request()->post('nomor_kepja'));
        $data->tgl_kepja                = request()->post('tgl_kepja');
        $data->tgl_mulai                = request()->post('tgl_mulai');
        $data->tgl_akhir                = request()->post('tgl_akhir');
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pencegahan.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pencegahan::findOrFail($id);
        $kecamatan = Kecamatan::orderBy('name')->get();

        return view('admin.pencegahan.show', compact('data', 'kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pencegahan::findOrFail($id);
        $biodatas = BiodataWNI::orderBy('name')->get();
        $kecamatans = Kecamatan::orderBy('name')->get();

        return view('admin.pencegahan.edit', compact('data', 'biodatas', 'kecamatans'));
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
        $data = Pencegahan::findOrFail($id);
        request()->validate([
            'tgl'                   => 'required|date',
            'biodata'               => 'required|integer',
            'kecamatan'             => 'required|integer',
            'nomor_pencegahan'      => 'nullable|string',
            'tgl_pencegahan'        => 'nullable|date',
            'locus'                 => 'nullable|date',
            'pasal'                 => 'nullable|string',
            'nomor_kepja'           => 'nullable|string',
            'tgl_kepja'             => 'nullable|date',
            'tgl_mulai'             => 'nullable|date',
            'tgl_akhir'             => 'nullable|date',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->tgl                      = request()->post('tgl');
        $data->biodata_id               = strip_tags(request()->post('biodata'));
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan'));
        $data->nomor_pencegahan         = strip_tags(request()->post('nomor_pencegahan'));
        $data->tgl_pencegahan           = request()->post('tgl_pencegahan');
        $data->locus                    = request()->post('locus');
        $data->pasal                    = strip_tags(request()->post('pasal'));
        $data->nomor_kepja              = strip_tags(request()->post('nomor_kepja'));
        $data->tgl_kepja                = request()->post('tgl_kepja');
        $data->tgl_mulai                = request()->post('tgl_mulai');
        $data->tgl_akhir                = request()->post('tgl_akhir');
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pencegahan.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pencegahan::destroy($id);

        return response()->json($data);
    }

    public function filter()
    {
        return view('admin.pencegahan.filter');
    }

    public function download(Request $request)
    {
        $month          = request()->post('bulan');
        $year           = request()->post('tahun');
        $jabatan        = request()->post('jabatan');
        $nama           = request()->post('nama');
        $nip            = request()->post('nip');
        $year           = request()->post('tahun');
        $data = Pencegahan::with('biodata')->whereYear('tgl', '=', $year)
            ->whereMonth('tgl', '=', $month)
            ->get();

        return view('admin.pencegahan.show', compact('data', 'month', 'year', 'jabatan', 'nama', 'nip'));
    }
}
