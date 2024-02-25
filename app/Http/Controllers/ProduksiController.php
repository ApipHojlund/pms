<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBahan;
use App\Models\Produksi;
use App\Models\DetailProduksi;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produksi= Produksi::all();
        $pilih_jenis = JenisBahan::all();
        return view('page.produksi.index',compact('pilih_jenis','produksi'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilih_jenis = JenisBahan::all();

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('id_produksi','=',$id)->get();
        $produksi = Produksi::find($id);
        return view('home.produksi.detail',compact('detail','pilih_jenis','produksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pilih_jenis = JenisBahan::all();

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
        $produksi = Produksi::find($id);
        $produksi->update([
            'keterangan' => $request -> keterangan,
        ]);
        return redirect()->back();
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
    public function hapus($id)
    {
        $item = Produksi::find($id);
        $item->delete();
        return redirect('/produksi');
    }

    public function utama()
    {
        $pilih_jenis = JenisBahan::all();
        $produksi = Produksi::all();
        return view('home.produksi.index',compact('pilih_jenis','produksi'));
    }
}
