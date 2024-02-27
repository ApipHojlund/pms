<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBahan;
use App\Models\Bahan;
use App\Models\User;
use App\Models\Pesanan;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilih_jenis = JenisBahan::all();
        $order = Pesanan::all();
        return view('home.pemesanan.index',compact('order','pilih_jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = 'customer';
        $pilih_jenis = JenisBahan::all();
        $bahan = Bahan::all();
        $user = User::where('level','=',$customer)->get();
        return view('home.pemesanan.create',compact('pilih_jenis','bahan','user'));
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
            'nama_model' => 'required',
            'model' => 'required',
            'berat' => 'required',
            'note' => 'required',
        ]);
        $dock = $request->file('model');
        $nama = hexdec(uniqid());
        $ext = strtolower($dock->getClientOriginalExtension());
        $file = $nama.'.'.$ext;
        $dock->move('model/',$file);


        $queu = 'dalam antrian';
        $today = Carbon::today();

        Pesanan::create([
            'nama_model' => $request->nama_model,
            'tanggal' => $today,
            'status' => $queu,
            'model' => $file,
            'note' => $request->note,
            'jumlah' => $request->jumlah,
            'berat' => $request->berat,
            'id_pemesan' => $request->id_pemesan,
            'id_bahan' => $request->id_bahan,
        ]);
        return redirect('/pemesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $pilih_jenis = Jenisbahan::all();
        $order = Pesanan::find($id);
        return view('home.pemesanan.detail',compact('pilih_jenis','order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pesanan::find($id);
        $pemesanan->delete();
        return redirect('/pemesanan');
    }

    public function viewDocument($id)
    {
        $order = Pesanan::findOrFail($id);
        return view('home.pemesanan.view', compact('order'));
    }
}
