<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\JenisBahan;
use App\Models\Produksi;
use App\Models\Produk;
use App\Models\Mesin;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\DetailProduksi;
use Illuminate\Support\Facades\Validator;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produksi = Produksi::all();
        $pilih_jenis = JenisBahan::all();
        return view('page.produksi.index', compact('pilih_jenis', 'produksi'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = User::where('level', '=', 'Petugas')->get();
        $mesin = Mesin::all();
        $pilih_jenis = JenisBahan::all();
        $order = Pesanan::where('status', '=', 'dalam antrian')->get();
        return view('page.produksi.proses', compact('petugas', 'order', 'pilih_jenis', 'mesin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'nama_model' => 'required',
            'id_mesin' => 'required',
            'petugas' => 'required',
            'profit' => 'required',
            'waktu' => 'required|numeric',
            // 'pemesan' => 'required', // Contoh validasi untuk input select
            // 'bahan' => 'required' // Contoh validasi untuk input select
        ], [
            // 'nama_model.required' => 'Pilih Salah Satu Model',
            'id_mesin.required' => 'Pilih Salah Satu Mesin',
        ]);
        /// Tanggal hari ini
        $today = Carbon::today();

        // Ambil input dari form
        $selectedItems = $request->input('selected_item', []);
        $selectedMachines = $request->input('id_mesin', []);

        // Tambahkan data produksi baru
        $produksi = Produksi::create([
            'keterangan' => 'keterangan masih kosong',
        ]);

        // Iterasi setiap item yang dipilih dari pesanan
        foreach ($selectedItems as $itemId) {
            // Temukan pesanan berdasarkan ID
            $pesanan = Pesanan::findOrFail($itemId);

            if ($selectedItems == null) {
                $request->validate(
                    [
                        'nama_model' => 'required',
                    ],
                    [
                        'nama_model.required' => 'Pilih Salah Satu Model'
                    ]
                );
            } else {

                // Iterasi setiap mesin yang dipilih
                foreach ($selectedMachines as $mesinId) {
                    // Temukan mesin berdasarkan ID
                    $mesin = Mesin::findOrFail($mesinId);

                    // Hitung harga jual
                    $biaya = $mesin->pembulatan_biaya * $request->waktu;
                    $totalBiaya = $biaya + (($request->profit / 100) * $biaya);
                    $hargaJual = ceil($totalBiaya / 5000) * 5000;

                    // Tambahkan detail produksi
                    $detailProduksi = DetailProduksi::create([
                        'tanggal' => $today,
                        'note' => $pesanan->note,
                        'id_pemesan' => $pesanan->id_pemesan,
                        'jumlah_produksi' => $pesanan->jumlah,
                        'status' => 'dalam proses',
                        'waktu' => $request->waktu,
                        'petugas' => $request->petugas,
                        'id_produksi' => $produksi->id,
                        'kode_pesanan' => $pesanan->id,
                    ]);

                    // Tambahkan produk baru
                    Produk::create([
                        'nama_model' => $pesanan->nama_model,
                        'model' => $pesanan->model,
                        'id_bahan' => $pesanan->id_bahan,
                        'id_mesin' => $mesinId,
                        'berat' => $pesanan->berat,
                        'profit' => $request->profit,
                        'harga_jual' => $hargaJual,
                        'id_detail' => $detailProduksi->id,
                    ]);
                }
            }
        }

        // Ubah status pesanan menjadi "dalam proses"
        Pesanan::whereIn('id', $selectedItems)->update(['status' => 'dalam proses']);

        return redirect()->back()->with('message', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produksi = Produksi::find($id);
        $detail = DetailProduksi::where('id_produksi', '=', $id)->get();
        $pilih_jenis = JenisBahan::all();
        $produk = collect(); // Membuat koleksi kosong untuk menampung hasil

        foreach ($detail as $item) {
            $idd = $item->id; // Mengakses properti id dari setiap objek DetailProduksi
            $produk->push(Produk::where('id_detail', $idd)->get()); // Menambahkan hasil query ke dalam koleksi produk
        }
        return view('home.produksi.detail', compact('detail', 'pilih_jenis', 'produksi', 'produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $pilih_jenis = JenisBahan::all();
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
            'keterangan' => $request->keterangan,
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
        $idp = $item->id;
        // Cari detail produksi yang memiliki id_produksi yang sama dengan $idp
        $detail = DetailProduksi::where('id_produksi', '=', $idp)->get();

        // Loop melalui setiap detail produksi
        foreach ($detail as $det) {
            // Periksa apakah ada produk dengan id_detail yang sesuai
            $produk = Produk::where('id_detail', '=', $det->id)->first();
            if ($produk) {
                // Hapus produk jika ditemukan
                $produk->delete();
            }
            // Ganti status pesanan menjadi 'berhenti'
            $pesanan = Pesanan::find($det->kode_pesanan);
            if ($pesanan) {
                $pesanan->update([
                    'status' => 'berhenti'
                ]);
            }
            // Hapus detail produksi
            $det->delete();
        }

        // Hapus produksi
        $item->delete();

        return redirect()->back()->with('delete', 'Data Berhasil Dihapus');
    }


    public function utama()
    {
        $pilih_jenis = JenisBahan::all();
        $produksi = Produksi::all();
        return view('home.produksi.index', compact('pilih_jenis', 'produksi'));
    }

    public function createAdmin()
    {
        $petugas = User::where('level', '=', 'Petugas')->get();
        $mesin = Mesin::all();
        $pilih_jenis = JenisBahan::all();
        $order = Pesanan::where('status', '=', 'dalam antrian')->get();
        return view('home.produksi.proses', compact('petugas', 'order', 'pilih_jenis', 'mesin'));
    }

    public function cetak($id)
    {
        
        return view('home.produksi.cetak');
    }
}
