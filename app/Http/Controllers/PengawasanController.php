<?php

namespace App\Http\Controllers;

use App\Models\KunjunganWNA;
use App\Models\Negara;
use App\Models\Pengawasan;
use App\Models\TinggaSementaraWNA;
use Illuminate\Http\Request;

class PengawasanController extends Controller
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
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Pengawasan::with('negara', 'tinggalSementara', 'kunjungan')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('negara', 'admin.pengawasan.negara')
                ->addColumn('kunjungan', 'admin.pengawasan.kunjungan')
                ->addColumn('action', 'admin.pengawasan.action')
                ->rawColumns(['negara', 'kunjungan', 'action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.pengawasan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negara             = Negara::orderBy('name')->get();
        $tinggalSementara   = TinggaSementaraWNA::orderBy('name')->get();
        $kunjungan          = KunjunganWNA::orderBy('name')->get();

        return view('admin.pengawasan.create', compact('negara', 'tinggalSementara', 'kunjungan'));
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
            'negara_id'             => 'required|integer',
            'locus'                 => 'nullable|string',
            'orang_asing'           => 'nullable|string',
            'tinggal_sementara_id'  => 'required|integer',
            'ket_sementara'         => 'nullable|string',
            'pendatang_ilegal'      => 'nullable|string',
            'kunjungan_id'          => 'required|integer',
            'ket_kunjungan'         => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new Pengawasan();
        $data->tgl                      = request()->post('tgl');
        $data->negara_id                = strip_tags(request()->post('negara_id'));
        $data->locus                    = strip_tags(request()->post('locus'));
        $data->orang_asing              = strip_tags(request()->post('orang_asing'));
        $data->tinggal_sementara_id     = strip_tags(request()->post('tinggal_sementara_id'));
        $data->ket_sementara            = strip_tags(request()->post('ket_sementara'));
        $data->pendatang_ilegal         = strip_tags(request()->post('pendatang_ilegal'));
        $data->kunjungan_id             = strip_tags(request()->post('kunjungan_id'));
        $data->ket_kunjungan            = strip_tags(request()->post('ket_kunjungan'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengawasan.index')->with('success', "Data berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = Pengawasan::findOrFail($id);

        return view('admin.pengawasan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data               = Pengawasan::findOrFail($id);
        $negaras             = Negara::orderBy('name')->get();
        $tinggalSementaras   = TinggaSementaraWNA::orderBy('name')->get();
        $kunjungans          = KunjunganWNA::orderBy('name')->get();

        return view('admin.pengawasan.edit', compact('data', 'negaras', 'tinggalSementaras', 'kunjungans'));
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
        $data = Pengawasan::findOrFail($id);
        request()->validate([
            'tgl'                   => 'required|date',
            'negara_id'             => 'required|integer',
            'locus'                 => 'nullable|string',
            'orang_asing'           => 'nullable|string',
            'tinggal_sementara_id'  => 'required|integer',
            'ket_sementara'         => 'nullable|string',
            'pendatang_ilegal'      => 'nullable|string',
            'kunjungan_id'          => 'required|integer',
            'ket_kunjungan'         => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->tgl                      = request()->post('tgl');
        $data->negara_id                = strip_tags(request()->post('negara_id'));
        $data->locus                    = strip_tags(request()->post('locus'));
        $data->orang_asing              = strip_tags(request()->post('orang_asing'));
        $data->tinggal_sementara_id     = strip_tags(request()->post('tinggal_sementara_id'));
        $data->ket_sementara            = strip_tags(request()->post('ket_sementara'));
        $data->pendatang_ilegal         = strip_tags(request()->post('pendatang_ilegal'));
        $data->kunjungan_id             = strip_tags(request()->post('kunjungan_id'));
        $data->ket_kunjungan            = strip_tags(request()->post('ket_kunjungan'));
        $data->keterangan               = strip_tags(request()->post('keterangan'));
        $data->save();

        return redirect()->route('admin.pengawasan.index')->with('success', "Data berhasil di edit!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengawasan::destroy($id);

        return response()->json($data);
    }
}
