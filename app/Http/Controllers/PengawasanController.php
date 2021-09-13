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
            return datatables()->of(Pengawasan::with('negara')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('negara', 'admin.pengawasan.negara')
                ->addColumn('action', 'admin.pengawasan.action')
                ->rawColumns(['negara', 'action'])
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

        return view('admin.pengawasan.create', compact('negara'));
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
            'orang_asing'           => 'nullable|string',
            'tk'                    => 'nullable|string',
            'mhs'                   => 'nullable|string',
            'peneliti'              => 'nullable|string',
            'keluarga'              => 'nullable|string',
            'rohaniawan'            => 'nullable|string',
            'pendatang_ilegal'      => 'nullable|string',
            'usaha'                 => 'nullable|string',
            'sosbud'                => 'nullable|string',
            'wisata'                => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data = new Pengawasan();
        $data->tgl                      = request()->post('tgl');
        $data->negara_id                = strip_tags(request()->post('negara_id'));
        $data->orang_asing              = strip_tags(request()->post('orang_asing'));
        $data->tk                       = strip_tags(request()->post('tk'));
        $data->mhs                      = strip_tags(request()->post('mhs'));
        $data->peneliti                 = strip_tags(request()->post('peneliti'));
        $data->keluarga                 = strip_tags(request()->post('keluarga'));
        $data->rohaniawan               = strip_tags(request()->post('rohaniawan'));
        $data->pendatang_ilegal         = strip_tags(request()->post('pendatang_ilegal'));
        $data->usaha                    = strip_tags(request()->post('usaha'));
        $data->sosbud                   = strip_tags(request()->post('sosbud'));
        $data->wisata                   = strip_tags(request()->post('wisata'));
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

        return view('admin.pengawasan.edit', compact('data', 'negaras'));
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
            'orang_asing'           => 'nullable|string',
            'tk'                    => 'nullable|string',
            'mhs'                   => 'nullable|string',
            'peneliti'              => 'nullable|string',
            'keluarga'              => 'nullable|string',
            'rohaniawan'              => 'nullable|string',
            'pendatang_ilegal'      => 'nullable|string',
            'usaha'                 => 'nullable|string',
            'sosbud'                => 'nullable|string',
            'wisata'                => 'nullable|string',
            'keterangan'            => 'nullable|string',
        ], $this->customMessages);

        $data->tgl                      = request()->post('tgl');
        $data->negara_id                = strip_tags(request()->post('negara_id'));
        $data->orang_asing              = strip_tags(request()->post('orang_asing'));
        $data->tk                       = strip_tags(request()->post('tk'));
        $data->mhs                      = strip_tags(request()->post('mhs'));
        $data->peneliti                 = strip_tags(request()->post('peneliti'));
        $data->keluarga                 = strip_tags(request()->post('keluarga'));
        $data->rohaniawan               = strip_tags(request()->post('rohaniawan'));
        $data->pendatang_ilegal         = strip_tags(request()->post('pendatang_ilegal'));
        $data->usaha                    = strip_tags(request()->post('usaha'));
        $data->sosbud                   = strip_tags(request()->post('sosbud'));
        $data->wisata                   = strip_tags(request()->post('wisata'));
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

    public function filter()
    {
        return view('admin.pengawasan.filter');
    }

    public function download(Request $request)
    {
        $month          = request()->post('bulan');
        $year           = request()->post('tahun');
        $jabatan        = request()->post('jabatan');
        $nama           = request()->post('nama');
        $nip            = request()->post('nip');
        $year           = request()->post('tahun');
        $data = Pengawasan::with('negara')->whereYear('tgl', '=', $year)
            ->whereMonth('tgl', '=', $month)
            ->get();

        return view('admin.pengawasan.show', compact('data', 'month', 'year', 'jabatan', 'nama', 'nip'));
    }
}
