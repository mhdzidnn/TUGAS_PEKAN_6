<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;

class ListbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';
        $barang = Barang::with('satuan')->get();
        // ELOQUENT
        $barang = Barang::all();
        // return view('list.index', ['pageTitle' => $pageTitle]);

        // RAW SQL QUERY
        // $barang = DB::select('
        //     select *, barang.id as barang_id, satuan.nama_satuan as
        //     satuan_nama_satuan
        //     from barang
        //     left join satuan on barang.satuan_id = satuan.id
        // ');

        return view('list.index', [
            'pageTitle' => $pageTitle,
            'barang' => $barang
    ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Barang';
        // // ELOQUENT
        $satuan = Satuan::all();
        // return view('list.tambah', compact('pageTitle'));
        // RAW SQL Query
        // $satuans = DB::select('select * from satuan');
        return view('list.tambah', compact('pageTitle', 'satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'semua field harus diisi.',
            'unique' => 'kode barang harus unik',
            'numeric' => 'harga barang hanya boleh berupa angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barang,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
        ], $messages);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // INSERT QUERY
        // DB::table('barang')->insert([
        //     'kode_barang' => $request->kode_barang,
        //     'nama_barang' => $request->nama_barang,
        //     'harga_barang' => $request->harga_barang,
        //     'deskripsi_barang' => $request->deskripsi_barang,
        //     'satuan_id' => $request->satuan,
        // ]);


        // ELOQUENT
        $list = New Barang;
        $list->kode_barang = $request->kode_barang;
        $list->nama_barang = $request->nama_barang;
        $list->harga_barang = $request->harga_barang;
        $list->deskripsi_barang = $request->deskripsi_barang;
        $list->satuan_id = $request->satuan;
        $list->save();

        return redirect()->route('lists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // // ELOQUENT
        $satuan = Satuan::all();
        $list = Barang::find($id);
        // $barang = DB::table('barang')->find($id);
        // $satuan = DB::select('select * from satuan');
        return view('list.edit', compact('pageTitle', 'satuan','list'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'semua field harus diisi.',
            'unique' => 'kode barang harus unik',
            'numeric' => 'harga barang hanya boleh berupa angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barang,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $list = Barang::find($id);
        $list->kode_barang = $request->kode_barang;
        $list->nama_barang = $request->nama_barang;
        $list->harga_barang = $request->harga_barang;
        $list->deskripsi_barang = $request->deskripsi_barang;
        $list->satuan_id = $request->satuan;
        $list->save();

        // DB::table('barang')
        // ->where('id', $id)
        // ->update([
        //     'kode_barang'=> $request->kode_barang,
        //     'nama_barang'=> $request->nama_barang,
        //     'harga_barang'=> $request->harga_barang,
        //     'deskripsi_barang'=> $request->deskripsi_barang,
        //     'satuan_id'=> $request->satuan,
        // ]);

        return redirect()->route('lists.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // QUERY BUILDER
        DB::table('barang')
            ->where('id', $id)
            ->delete();

        return redirect()->route('lists.index');
    }
}
