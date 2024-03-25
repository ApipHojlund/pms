<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahan;
use App\Models\JenisBahan;


class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilih_jenis = JenisBahan::all();
        $bahan = Bahan::all();
        return view('home.bahan.index',compact('pilih_jenis','bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jeniss = JenisBahan::all();
        $pilih_jenis = JenisBahan::all();
        return view('home.bahan.create',compact('pilih_jenis','jeniss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required | min:4 | max:250',
            'harga_bahan' => 'required | numeric |min:4',
            'ukuran_z' => 'required | numeric |min:1',
            'ukuran_y' => 'required | numeric |min:1',
            'ukuran_x' => 'required | numeric |min:1',
        ]);
        Bahan::create([
            'nama' => $request->nama,
            'harga_bahan' => $request->harga_bahan,
            'ukuran_x' => $request->ukuran_x,
            'ukuran_y' => $request->ukuran_y,
            'ukuran_z' => $request->ukuran_z,
            'id_jenis' => $request->id_jenis,
        ]);
        return redirect('/bahan')->with('message','data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $pilih_jenis = JenisBahan::all();
        $bahan = Bahan::simplePaginate(6);
        return view('home.bahan.jenis',compact('bahan','pilih_jenis'));
    }
    public function show($id)
    {
        $material = Bahan::all();
        $pilih_jenis = JenisBahan::all();
        $bahan = Bahan::where('id_jenis','=',$id)->simplePaginate(6);
        return view('home.bahan.jenis',compact('bahan','pilih_jenis','material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeniss = JenisBahan::all();
        $pilih_jenis = JenisBahan::all();
        $bahan = Bahan::find($id);
        return view('home.bahan.edit',compact('bahan','pilih_jenis','jeniss'));
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
        $bahan= Bahan::find($id);
        $validated = $request->validate([
            'nama' => 'required | min:4 | max:250',
            'harga_bahan' => 'required | numeric |min:4',
            'ukuran_z' => 'required | numeric |min:1',
            'ukuran_y' => 'required | numeric |min:1',
            'ukuran_x' => 'required | numeric |min:1',
        ]);
        $bahan->update([
            'nama' => $request->nama,
            'harga_bahan' => $request->harga_bahan,
            'ukuran_x' => $request->ukuran_x,
            'ukuran_y' => $request->ukuran_y,
            'ukuran_z' => $request->ukuran_z,
            'id_jenis' => $request->id_jenis,
        ]);
        return redirect('/bahan')->with('update','data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
