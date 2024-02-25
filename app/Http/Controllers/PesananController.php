<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBahan;
use App\Models\Bahan;
use App\Models\User;
use App\Models\Pesanan;
use Carbon\Carbon;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idp = Auth()->User()->id;
        if (Auth()->User()->level =! 'admin') {
            $pilih_jenis = JenisBahan::all();
            $order = Pesanan::where('id_pemesan','=',$idp)
                ->get();
            return view('page.pemesanan.index', compact('order', 'pilih_jenis'));
        } else {
            $pilih_jenis = JenisBahan::all();
            $order = Pesanan::all();
            return view('page.pemesanan.index', compact('order', 'pilih_jenis'));
        }

        //
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
        $user = User::where('level', '=', $customer)->get();
        return view('page.pemesanan.create', compact('pilih_jenis', 'bahan', 'user'));
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
        $img = $request->file('model');
        $nama = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $nama . '.' . $ext;
        $img->move('model/', $foto);


        $queu = 'dalam antrian';
        $today = Carbon::today();

        Pesanan::create([
            'nama_model' => $request->nama_model,
            'tanggal' => $today,
            'status' => $queu,
            'model' => $foto,
            'note' => $request->note,
            'jumlah' => $request->jumlah,
            'jumlah_produksi' => $request->jumlah_produksi,
            'id_pemesan' => $request->id_pemesan,
            'id_bahan' => $request->id_bahan,
        ]);

        return redirect('/order');
        //
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
        return view('page.pemesanan.detail', compact('pilih_jenis', 'order'));
        //
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
        //
    }
}
