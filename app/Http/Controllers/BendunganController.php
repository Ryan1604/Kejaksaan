<?php

namespace App\Http\Controllers;

use App\Models\Bendungan;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class BendunganController extends Controller
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
            return datatables()->of(Bendungan::with('kecamatan')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('kecamatan', 'admin.bendungan.kecamatan')
                ->addColumn('action', 'admin.bendungan.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $kecamatan = Kecamatan::orderBy('name')->get();
        return view('admin.bendungan.index', compact('kecamatan'));
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

        $data = Bendungan::create([
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
        $data = Bendungan::findOrFail($id);

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Bendungan::findOrFail($id);

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
        $data = Bendungan::destroy($id);

        return response()->json($data);
    }
}
