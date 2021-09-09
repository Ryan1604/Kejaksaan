<?php

namespace App\Http\Controllers;

use App\Models\Barcet;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class BarcetController extends Controller
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
            return datatables()->of(Barcet::with('kecamatan')
                ->orderBy('updated_at', 'DESC')
                ->get())
                ->addColumn('kecamatan', 'admin.barcet.kecamatan')
                ->addColumn('action', 'admin.barcet.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $kecamatan = Kecamatan::orderBy('name')->get();
        return view('admin.barcet.index', compact('kecamatan'));
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

        $data = Barcet::create([
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
        $data = Barcet::findOrFail($id);

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Barcet::findOrFail($id);

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
        $data = Barcet::destroy($id);

        return response()->json($data);
    }
}
