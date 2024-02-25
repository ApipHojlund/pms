<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBahan;
use App\Models\Pesanan;
use App\Models\Bahan;
use App\Models\User;
use App\Models\Mesin;
use App\Models\Produksi;
use App\Models\DetailProduksi;
use Carbon\Carbon;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::all();
        return view('home.detail.index',compact('pilih_jenis','detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $mesin = Mesin::all();
        $customer = 'customer';
        $petug = 'petugas';
        $order = Pesanan::find($id);
        $pilih_jenis = JenisBahan::all();
        $bahan = Bahan::all();
        $user = User::where('level','=',$customer)->get();
        $petugas = User::where('level','=',$petug)->get();
        return view('home.detail.create',compact('petugas','mesin','pilih_jenis','order','bahan','user'));
        //
    }

    public function pilih()
    {
        $antri = 'dalam antrian';
        $pilih_jenis = JenisBahan::all();
        $order = Pesanan::where('status','=',$antri)->get();
        return view('home.pemesanan.index',compact('pilih_jenis','order'));
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
        $detail = DetailProduksi::find($id);
        return view('home.detail.detail',compact('detail','pilih_jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = DetailProduksi::find($id);
        $mesin = Mesin::all();
        $customer = 'customer';
        $petug = 'petugas';
        $order = DetailProduksi::find($id);
        $pilih_jenis = JenisBahan::all();
        $bahan = Bahan::all();
        $user = User::where('level','=',$customer)->get();
        $petugas = User::where('level','=',$petug)->get();
        return view('home.detail.edit',compact('petugas','mesin','pilih_jenis','order','bahan','user','detail'));
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
        $today = Carbon::today();
        $detail = DetailProduksi::find($id);

        $items = $request->id_mesin;
        $mesin = Mesin::find($items);

        $idb = $request->id_bahan;
        $bahan= Bahan::find($idb);

        $harga_bahan = $bahan->harga * $request->berat;

        $biaya = $mesin->pembulatan_biaya * $request->waktu;
        $harga = $biaya + $harga_bahan;
        $totalan = $harga +(($request->profit / 100) * $biaya);

        $harga_jual = ceil($totalan / 5000) * 5000;


        $detail->update([
            'nama_model' => $request->nama_model,
            'tanggal' => $today,
            'status' => $request->status,
            'model' => $request->model,
            'note' => $request->note,
            'jumlah_produksi' => $request->jumlah_produksi,
            'berat' => $request->berat,
            'id_pemesan' => $request->id_pemesan,
            'id_bahan' => $request->id_bahan,
            'id_mesin' => $request->id_mesin,
            'petugas' => $request->petugas,
            'profit' => $request->profit,
            'waktu' => $request->waktu,
            'harga_jual' => $harga_jual
        ]);
        return redirect('/detail_produksi');
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
    public function tertunda()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','tertunda')->get();
        return view('home.detail.status',compact('pilih_jenis','detail'));
    }
    public function proses()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','dalam proses')->get();
        return view('home.detail.status',compact('pilih_jenis','detail'));
    }
    public function antrian()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','dalam antrian')->get();
        return view('home.detail.status',compact('pilih_jenis','detail'));
    }
    public function selesai()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','selesai')->get();
        return view('home.detail.status',compact('pilih_jenis','detail'));
    }
    public function berhenti()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','berhenti')->get();
        return view('home.detail.status',compact('pilih_jenis','detail'));
    }
}
