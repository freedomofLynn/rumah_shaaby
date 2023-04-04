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

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang['data'] = Barang::all();
        return view('barang.index')->with($barang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang['data'] = Barang::all();
        return view('')->with('barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangRequest $request)
    {
        $data = $request->all();
        Barang::create($data);
        return redirect()->back();

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
    public function edit(Barang $barang)
    {
        $barang['data'] = Barang::all();
        return view('')->with('barang');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(BarangRequest $request, Barang $barang)
    {
        $data = $request->all();
        Barang::update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
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
