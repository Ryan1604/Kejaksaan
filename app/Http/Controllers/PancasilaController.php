<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pancasila;
use Illuminate\Http\Request;

class PancasilaController extends Controller
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
            return datatables()->of(Pancasila::with('kecamatan')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('kecamatan', 'admin.pancasila.kecamatan')
                ->addColumn('action', 'admin.pancasila.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $kecamatan = Kecamatan::orderBy('name')->get();
        return view('admin.pancasila.index', compact('kecamatan'));
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

        $data = Pancasila::create([
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
        $data = Pancasila::findOrFail($id);

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Pancasila::findOrFail($id);

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
        $data = Pancasila::destroy($id);

        return response()->json($data);
    }
}