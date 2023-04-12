<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use App\Models\Barang;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportBarang;
use Illuminate\Support\Facades\Session;
use Excel;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = Barang::all();
        return view('barang.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['barang'] = Barang::all();

         return view('barang.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = $request->all();
        $barang['barang_id'] = (string) Str::orderedUuid();
        Barang::create($barang);
        return redirect()->route('barang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['barang'] = Barang::find($id);
        return view('barang.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Barang::findOrFail($id);
        $item->update($data);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        // barang::onlyTrashed()->findOrFail($id)->forceDelete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('barang.index');
    }
    public function import_barang(Request $request)
    {
        $validator = Validator::make(
        [
            'file'      => $request->file('file_barang'),
            'extension' => strtolower($request->file('file_barang')->getClientOriginalExtension()),
        ],
        [
            'file'          => 'required',
            'extension'      => 'required|in:xlsx,xls',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors());
            return redirect()->route('barang.index');
        }

        Excel::import(new ImportBarang, $request->file('file_barang'));
        Session::flash('status', 'Import Berhasil');
        return redirect()->route('barang.index');
    }
}
