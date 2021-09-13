<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\PengamananSumberDaya;
use Illuminate\Http\Request;

class PengamananSumberDayaController extends Controller
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
            return datatables()->of(PengamananSumberDaya::orderBy('created_at', 'DESC')
                ->get())
                ->addColumn('action', 'admin.pengamanan.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pengamanan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan            = Kecamatan::orderBy('name')->get();

        return view('admin.pengamanan.create', compact('kecamatan'));
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
            'sumber_informasi'      => 'nullable|string',
            'isi_informasi'         => 'nullable|string',
            'tahapan_dik'           => 'nullable|string',
            'tahapan_pratut'        => 'nullable|string',
            'tahapan_tut'           => 'nullable|string',
            'tahapan_eksekusi'      => 'nullable|string',
            'lama_pidana'           => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new PengamananSumberDaya();
        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->sumber_informasi         = strip_tags(request()->post('sumber_informasi'));
        $data->isi_informasi            = strip_tags(request()->post('isi_informasi'));
        $data->opsin_lid                = strip_tags(request()->post('opsin_lid'));
        $data->opsin_pam                = strip_tags(request()->post('opsin_pam'));
        $data->opsin_gal                = strip_tags(request()->post('opsin_gal'));
        $data->nomor_surat              = strip_tags(request()->post('nomor_surat'));
        $data->tgl_surat                = request()->post('tgl_surat');
        $data->hasil                    = strip_tags(request()->post('hasil'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengamanan.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = PengamananSumberDaya::findOrFail($id);

        return view('admin.pengamanan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = PengamananSumberDaya::findOrFail($id);
        $kecamatans         = Kecamatan::orderBY('name')->get();

        return view('admin.pengamanan.edit', compact('data', 'kecamatans'));
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
        $data = PengamananSumberDaya::findOrFail($id);
        request()->validate([
            'kecamatan_id'          => 'required|integer',
            'tgl'                   => 'required|date',
            'sumber_informasi'      => 'nullable|string',
            'isi_informasi'         => 'nullable|string',
            'tahapan_dik'           => 'nullable|string',
            'tahapan_pratut'        => 'nullable|string',
            'tahapan_tut'           => 'nullable|string',
            'tahapan_eksekusi'      => 'nullable|string',
            'lama_pidana'           => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->kecamatan_id             = strip_tags(request()->post('kecamatan_id'));
        $data->tgl                      = request()->post('tgl');
        $data->sumber_informasi         = strip_tags(request()->post('sumber_informasi'));
        $data->isi_informasi            = strip_tags(request()->post('isi_informasi'));
        $data->opsin_lid                = strip_tags(request()->post('opsin_lid'));
        $data->opsin_pam                = strip_tags(request()->post('opsin_pam'));
        $data->opsin_gal                = strip_tags(request()->post('opsin_gal'));
        $data->nomor_surat              = strip_tags(request()->post('nomor_surat'));
        $data->tgl_surat                = request()->post('tgl_surat');
        $data->hasil                    = strip_tags(request()->post('hasil'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengamanan.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PengamananSumberDaya::destroy($id);

        return response()->json($data);
    }

    public function filter()
    {
        return view('admin.pengamanan.filter');
    }

    public function download(Request $request)
    {
        $month          = request()->post('bulan');
        $year           = request()->post('tahun');
        $jabatan        = request()->post('jabatan');
        $nama           = request()->post('nama');
        $nip            = request()->post('nip');
        $year           = request()->post('tahun');
        $data = PengamananSumberDaya::whereYear('tgl', '=', $year)
            ->whereMonth('tgl', '=', $month)
            ->get();

        return view('admin.pengamanan.show', compact('data', 'month', 'year', 'jabatan', 'nama', 'nip'));
    }
}
