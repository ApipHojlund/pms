<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBahan;
use App\Models\Pesanan;
use App\Models\Bahan;
use App\Models\User;
use App\Models\Mesin;
use App\Models\Produksi;
use App\Models\Produk;
use App\Models\DetailProduksi;
use Carbon\Carbon;

class DetailProduksiController extends Controller
{
    private function generateKodeTransaksi()
    {
        // Logika untuk menghasilkan kode transaksi secara acak
        return  mt_rand(100000, 999999);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $idc = Auth()->User()->id;
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::all();
        // $detail = DetailProduksi::where('id_pemesan','=',$idc);
        return view('page.detail_produksi.index',compact('detail','pilih_jenis'));
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
        return view('page.detail_produksi.create',compact('petugas','mesin','pilih_jenis','order','bahan','user'));
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
        //auto generate kode trans
        $id_produksi = $this->generateKodeTransaksi();

        $today = Carbon::today();

        $gawe = 'dalam proses';

        //CARI data

        $idb = $request->id_bahan;
        $bahan = Bahan::find($idb);
        $idb = $request->id_pesanan;
        $pesanan = Pesanan::find($idb);

        $selectedItems = $request->input('id_mesin',[]);

        //Ngitung cuy


        $produksi = Produksi::create([
            'keterangan' => 'keterangan masih kosong'
        ]);


        foreach ($selectedItems as $items) {
            $mesin = Mesin::find($items);

            $biaya = $mesin->pembulatan_biaya * $request->waktu;
            $totalan = $biaya +(($request->profit / 100) * $biaya);

            $harga_jual = ceil($totalan / 5000) * 5000;


            DetailProduksi::create([
                'nama_model' => $request->nama_model,
                'tanggal' => $today,
                'status' => $gawe,
                'model' => $request->model,
                'note' => $request->note,
                'jumlah_produksi' => $request->jumlah_produksi,
                'berat' => $request->berat,
                'id_pemesan' => $request->id_pemesan,
                'id_bahan' => $request->id_bahan,
                'id_mesin' => $items,
                'petugas' => $request->petugas,
                'id_produksi' => $produksi->id,
                'profit' => $request->profit,
                'waktu' => $request->waktu,
                'harga_jual' => $harga_jual
            ]);
        }

        $pesanan->update([
            'status' => $gawe,
        ]);

        return redirect('/detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $pilih_jenis = JenisBahan::all();
        $detail = Produk::find($id);
        return view('page.detail_produksi.detail',compact('detail','pilih_jenis'));
    }


    public function show()
    {
        $pilih_jenis = JenisBahan::all();
        $order = Pesanan::where('status','=','dalam antrian')->get();
        return view('page.pemesanan.index',compact('pilih_jenis','order'));
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
        return view('page.detail_produksi.edit',compact('petugas','mesin','pilih_jenis','order','bahan','user','detail'));
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
        return redirect('/detail');
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
        $detail = DetailProduksi::find($id);
        $detail->delete();
        return redirect('detail');
    }

    public function tertunda()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','tertunda')->get();
        return view('home.detail.index',compact('pilih_jenis','detail'));
    }
    public function proses()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','dalam proses')->get();
        return view('home.detail.index',compact('pilih_jenis','detail'));
    }
    public function antrian()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','dalam antrian')->get();
        return view('home.detail.index',compact('pilih_jenis','detail'));
    }
    public function selesai()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','selesai')->get();
        return view('home.detail.index',compact('pilih_jenis','detail'));
    }
    public function berhenti()
    {
        $pilih_jenis = JenisBahan::all();
        $detail = DetailProduksi::where('status','=','berhenti')->get();
        return view('home.detail.index',compact('pilih_jenis','detail'));
    }
}
