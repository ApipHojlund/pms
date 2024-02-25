<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\JenisBahan;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilih_jenis = JenisBahan::all();
        // $admin = 'Admin';
        $user = User::all();
        return view('home.user.index',compact('user','pilih_jenis'));
    }
    public function admin()
    {
        $pilih_jenis = JenisBahan::all();
        $admin = 'Admin';
        $user = User::where('level','=',$admin)->get();
        return view('home.user.index',compact('user','pilih_jenis'));
    }

    public function petugas()
    {
        $pilih_jenis = JenisBahan::all();
        $petugas = 'Petugas';
        $user = User::where('level','=',$petugas)->get();
        return view('home.user.index',compact('user','pilih_jenis'));
    }

    public function customer()
    {
        $pilih_jenis = JenisBahan::all();
        $customer = 'Customer';
        $user = User::where('level','=',$customer)->get();
        return view('home.user.index',compact('user','pilih_jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilih_jenis =JenisBahan::all();
        return view('home.user.create',compact('pilih_jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('foto');
        $nama = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $nama.'.'.$ext;
        $img->move('image/user/',$foto);

        $validated = $request->validate([
            'nama' => 'required | max:250 | min:1',
            'username' => 'required | max:250 | min:1',
            'password' => 'required | max:250 | min:5',
            'alamat' => 'required | min:15',
            'no_telp' => 'required | min:4 ',
        ]);

        User::create([
            'nama' => $request -> nama,
            'username' => $request -> username,
            'password' => bcrypt($request -> password),
            'level' => $request -> level,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp,
            'foto' => $foto
        ]);

        return redirect('/user/all')->with($validated);
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
        $user = User::find($id);
        return view('home.user.edit',compact('pilih_jenis','user'));
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

        $user = User::find($id);

        $validated = $request->validate([
            'nama' => 'required | max:250 | min:1',
            'username' => 'required | max:250 | min:1',
            'alamat' => 'required | min:1',
            'no_telp' => 'required | min:1 | max:14',
        ]);

        if ($request->hasFile('foto')) {
            $this->hapusGambarLama($user->foto);

            $img = $request->file('foto');
            $nama = hexdec(uniqid());
            $ext = strtolower($img->getClientOriginalExtension());
            $foto = $nama.'.'.$ext;
            $img->move('image/user/',$foto);

            $user->update([
                'nama' => $request -> nama,
                'username' => $request -> username,
                'password' => $user->password,
                'level' => $request -> level,
                'alamat' => $request -> alamat,
                'no_telp' => $request -> no_telp,
                'foto' => $foto
            ]);
        } else {
            $user->update([
                'nama' => $request -> nama,
                'username' => $request -> username,
                'password' => $user->password,
                'level' => $request -> level,
                'alamat' => $request -> alamat,
                'no_telp' => $request -> no_telp,
            ]);
        }

        return redirect('/user/all')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    private function hapusGambarLama($namaGambar)
    {
        // Hapus gambar lama dari direktori
        $path = public_path('image/user/' . $namaGambar);
        if (file_exists($path)) {
            unlink($path);
        }
    }

    public function profile($id)
    {
        $pilih_jenis = JenisBahan::all();
        $user = User::find($id);
        return view('home.user.setting',compact('pilih_jenis','user'));
    }

    public function password($id)
    {
        $pilih_jenis = JenisBahan::all();
        return view('home.user.password',compact('pilih_jenis'));
    }

    public function changePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cari user berdasarkan ID
        $user = User::findOrFail($id);

        // Periksa apakah password lama cocok
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }

        // Update password baru
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/dashboard')->with('success', 'Password has been changed successfully');
    }
}
