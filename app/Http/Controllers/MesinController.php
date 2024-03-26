<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesin;
use App\Models\DetailProduksi;
use App\Models\JenisBahan;

class MesinController extends Controller
{

    public function hitungPembulatanBiaya($total_biaya)
    {
        return ceil($total_biaya / 500) * 500;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilih_jenis = JenisBahan::all();
        $mesin = Mesin::all();
        return view('page.mesin.index',compact('mesin','pilih_jenis'));
        //
    }

    public function detail($id)
    {
        $pilih_jenis = JenisBahan::all();
        $mesin = Mesin::find($id);

        $nilai_otw = $mesin->harga_buku * (pow((1 + ($mesin->inflansi / 100)), $mesin->umur));
        $jam_thn = $mesin->jam_bln * 12;
        $total_jam = $jam_thn * $mesin->umur;

        $deprisiasi = $nilai_otw / $total_jam;
        $perawatan = 0.15 * $deprisiasi;
        $bunga = (0.0 * $nilai_otw) / $jam_thn;
        $ruang = ($mesin->kebutuhan_ruang * $mesin->by_ruang) / $mesin->jam_bln;
        $biaya_listrik = ($mesin->daya_mesin * $mesin->biaya_listrik);
        $biaya_lain = 0.1 * $deprisiasi;

        return view('page.mesin.detail',compact('mesin','pilih_jenis','total_jam','nilai_otw','jam_thn','deprisiasi','perawatan','bunga','ruang','biaya_listrik','biaya_lain'));
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
        return view('page.mesin.create',compact('pilih_jenis'));
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
        // $pembulatan_biaya = ceil($total_biaya / 500) * 500;

        $validated = $request->validate([
            'nama' => 'required',
            'jenis_mesin' => 'required',
            'tgl_beli' => 'required|date',
            'harga_asli' => 'required|numeric',
            'umur' => 'required|numeric',
            'inflansi' => 'required|numeric',
            'jam_bln' => 'required|numeric',
            'kebutuhan_ruang' => 'required|numeric',
            'by_ruang' => 'required|numeric',
            'daya_mesin' => 'required|numeric',
            'biaya_listrik' => 'required|numeric',
            'biaya_operator' => 'required|numeric',
        ]);

        $harga_buku = ($request->harga_asli / 2) ;
        $nilai_otw = $harga_buku * (pow((1 + ($request->inflansi / 100)), $request->umur));
        $jam_thn = $request->jam_bln * 12;
        $total_jam = $jam_thn * $request->umur;

        $deprisiasi = $nilai_otw / $total_jam;
        $perawatan = 0.15 * $deprisiasi;
        $bunga = (0.0 * $nilai_otw) / $jam_thn;
        $ruang = ($request->kebutuhan_ruang * $request->by_ruang) / $request->jam_bln;
        $biaya_listrik = ($request->daya_mesin * $request->biaya_listrik);
        $biaya_lain = 0.1 * $deprisiasi;

        $total_biaya = $deprisiasi + $perawatan + $bunga + $ruang + $biaya_listrik + $request->biaya_operator + $biaya_lain;
        // $pembulatan_biaya = round($total_biaya);
        $pembulatan_biaya = ceil($total_biaya / 10000) * 10000;
        // $pembulatan_biaya = $mesin->hitungPembulatanBiaya($total_biaya);

        Mesin::create([
            'nama' => $request->nama,
            'jenis_mesin' => $request->jenis_mesin,
            'tgl_beli' => $request->tgl_beli,
            'harga_asli' => $request->harga_asli,
            'harga_buku' => $harga_buku,
            'umur' => $request->umur,
            'inflansi' => $request->inflansi,
            'jam_bln' => $request->jam_bln,
            'kebutuhan_ruang' => $request->kebutuhan_ruang,
            'by_ruang' => $request->by_ruang,
            'daya_mesin' => $request->daya_mesin,
            'biaya_listrik' => $request->biaya_listrik,
            'biaya_operator' => $request->biaya_operator,
            'total_biaya' => $total_biaya,
            'pembulatan_biaya' => $pembulatan_biaya,
        ]);

        return redirect('/machine')->with('message','data berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $mesin = Mesin::find($id);
        return view('page.mesin.edit',compact('mesin','pilih_jenis'));
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
        $validated = $request->validate([
            'nama' => 'required',
            'jenis_mesin' => 'required',
            'tgl_beli' => 'required|date',
            'harga_asli' => 'required|numeric',
            'umur' => 'required|numeric',
            'inflansi' => 'required|numeric',
            'jam_bln' => 'required|numeric',
            'kebutuhan_ruang' => 'required|numeric',
            'by_ruang' => 'required|numeric',
            'daya_mesin' => 'required|numeric',
            'biaya_listrik' => 'required|numeric',
            'biaya_operator' => 'required|numeric',
        ]);

        $harga_buku = ($request->harga_asli / 2) ;
        $nilai_otw = $harga_buku * (pow((1 + ($request->inflansi / 100)), $request->umur));
        $jam_thn = $request->jam_bln * 12;
        $total_jam = $jam_thn * $request->umur;

        $deprisiasi = $nilai_otw / $total_jam;
        $perawatan = 0.15 * $deprisiasi;
        $bunga = (0.0 * $nilai_otw) / $jam_thn;
        $ruang = ($request->kebutuhan_ruang * $request->by_ruang) / $request->jam_bln;
        $biaya_listrik = ($request->daya_mesin * $request->biaya_listrik);
        $biaya_lain = 0.1 * $deprisiasi;

        $total_biaya = $deprisiasi + $perawatan + $bunga + $ruang + $biaya_listrik + $request->biaya_operator + $biaya_lain;
        // $pembulatan_biaya = round($total_biaya);
        $pembulatan_biaya = ceil($total_biaya / 10000) * 10000;

        $mesin = Mesin::find($id);
        $mesin->update([
            'nama' => $request->nama,
            'jenis_mesin' => $request->jenis_mesin,
            'tgl_beli' => $request->tgl_beli,
            'harga_asli' => $request->harga_asli,
            'harga_buku' => $harga_buku,
            'umur' => $request->umur,
            'inflansi' => $request->inflansi,
            'jam_bln' => $request->jam_bln,
            'kebutuhan_ruang' => $request->kebutuhan_ruang,
            'by_ruang' => $request->by_ruang,
            'daya_mesin' => $request->daya_mesin,
            'biaya_listrik' => $request->biaya_listrik,
            'biaya_operator' => $request->biaya_operator,
            'total_biaya' => $total_biaya,
            'pembulatan_biaya' => $pembulatan_biaya,
        ]);

        return redirect('machine')->with('update','data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesin = Mesin::find($id);
        $detail = DetailProduksi::where('id_mesin','=',$mesin->id)->get();
        $detail->update([
            'status' => 'berhenti',
            'id_mesin' => 404,
        ]);
        $mesin->delete();
        return redirect()->back()->with('delete','data berhasil dihapus!');
    }
}
