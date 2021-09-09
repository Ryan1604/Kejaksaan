<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Perdagangan;
use Illuminate\Http\Request;

class PerdaganganController extends Controller
{
    protected $customMessages = [
        'required' => 'Please input the :attribute.',
        'unique' => 'This :attribute has already been taken.',
        'max' => ':Attribute may not be more than :max characters.',
        'kecamatan_id.required' => 'Please select Districts.',
    ];

    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Perdagangan::with('kecamatan')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('kecamatan', 'admin.perdagangan.kecamatan')
                ->addColumn('action', 'admin.perdagangan.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $kecamatan = Kecamatan::orderBy('name')->get();
        return view('admin.perdagangan.index', compact('kecamatan'));
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'          => 'required|string',
            'locus'         => 'required|string',
            'kecamatan_id'  => 'nullable|integer|exists:kecamatans,id',
        ], $this->customMessages);

        $data = Perdagangan::create([
            'name'          => strip_tags(request()->post('name')),
            'locus'         => strip_tags(request()->post('locus')),
            'kecamatan_id'  => strip_tags(request()->post('kecamatan'))
        ]);

        return response()->json($data);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Perdagangan::findOrFail($id);

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Perdagangan::findOrFail($id);

        request()->validate([
            'name'          => 'required|string',
            'locus'         => 'required|string',
            'kecamatan_id'  => 'nullable|integer|exists:kecamatans,id',
        ], $this->customMessages);

        $data->update([
            'name'          => strip_tags(request()->post('name')),
            'locus'         => strip_tags(request()->post('locus')),
            'kecamatan_id'  => strip_tags(request()->post('kecamatan'))
        ]);

        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Perdagangan::destroy($id);

        return response()->json($data);
    }
}
