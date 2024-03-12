<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\JenisBahan;
use App\Models\User;
use App\Models\Mesin;
use App\Models\DetailProduksi;
use Auth;

class DashboardController extends Controller
{
    public function lanjut()
    {
        if (Auth()->User()->level !== 'Admin') {
            return redirect('/dashboard');
        } else {
            return redirect('/admin/dashboard');
        }

    }

    public function index()
    {
        // $adm = 'Admin';
        $user = User::where('level','=','admin')->get();
        return view('page.desktop',compact('user'));
    }
    public function dashboard()
    {
        $idu = Auth()->User()->id;
        $jumlah_customer = User::where('level','=','Customer')->get()->count();
        $jumlah_model = DetailProduksi::where('status','=','Selesai')->get()->count();
        $jumlah_mesin = Mesin::count();
        $jumlah_diproses = Pesanan::where('id_pemesan','=',$idu)->get()
                                    ->count();
        $jumlah_diajukan = Pesanan::where('id_pemesan','=',$idu)
                                    ->where('status','=','dalam proses')->get()
                                    ->count();
        $jumlah_selesai = Pesanan::where('id_pemesan','=',$idu)
                                    ->where('status','=','selesai')->get()
                                    ->count();
        $pilih_jenis = JenisBahan::all();
        return view('page.dashboard',compact('jumlah_model','jumlah_mesin','pilih_jenis','jumlah_diajukan','jumlah_diproses','jumlah_selesai','jumlah_customer'));
    }

    public function admin()
    {
        $selesai = DetailProduksi::where('status','=','selesai')->get()
                        ->count();
        $ditahan = DetailProduksi::where('status','=','ditahan')->get()
                        ->count();
        $berhenti = DetailProduksi::where('status','=','berhenti')->get()
                        ->count();
        $dalam_proses = DetailProduksi::where('status','=','dalam proses')->get()
                        ->count();
        $statuses = [ 'dalam proses',  'berhenti','ditahan', 'selesai'];
        $data = [];

        foreach ($statuses as $status) {
            $count = DetailProduksi::where('status', $status)->count();
            $data[] = $count;
        }
        $pilih_jenis=JenisBahan::all();
        // dd($data);
        // dd($statuses);
        return view('home.dashboard',compact('pilih_jenis','data','statuses','dalam_proses','ditahan','selesai','berhenti'));
    }
}
