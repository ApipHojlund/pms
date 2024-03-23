<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\JenisBahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilih_jenis = JenisBahan::all();
        $user = User::all();
        return view('page.user.index',compact('user','pilih_jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilih_jenis = JenisBahan::all();
        return view('page.user.create',compact('pilih_jenis'));
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

        return redirect('/user')->with($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $pilih_jenis = JenisBahan::all();
        $user = User::find($id);
        return view('page.user.edit',compact('user','pilih_jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        // $user = User::find($id);
        // $img = $request->file('foto');
        // $nama = hexdec(uniqid());
        // $ext = strtolower($img->getClientOriginalExtension());
        // $foto = $nama.'.'.$ext;
        // $img->move('image/user/',$foto);

        // $user->update([
        //     'nama' => $request -> nama,
        //     'username' => $request -> username,
        //     'password' => $user->password,
        //     'level' => $request -> level,
        //     'alamat' => $request -> alamat,
        //     'no_telp' => $request -> no_telp,
        //     'foto' => $foto
        // ]);

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

        return redirect('/user')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
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
        return view('page.user.setting',compact('pilih_jenis','user'));
    }

    public function setting(User $user, $id)
    {
        $pilih_jenis = JenisBahan::all();
        $user = User::find($id);
        return view('page.user.profile',compact('user','pilih_jenis'));
    }
    public function changePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'confirmed'
        ],[
            'old_password.required' => 'password lama tidak boleh kosong',
            'new_password.required' => 'password baru tidak boleh kosong',
            'new_password_confirmation.confirmed' => 'password baru tidak valid',
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

        return redirect('/admin/dashboard')->with('success', 'Password has been changed successfully');
    }
    public function updateProfile(Request $request, User $user, $id)
    {
        // $user = User::find($id);
        // $img = $request->file('foto');
        // $nama = hexdec(uniqid());
        // $ext = strtolower($img->getClientOriginalExtension());
        // $foto = $nama.'.'.$ext;
        // $img->move('image/user/',$foto);

        // $user->update([
        //     'nama' => $request -> nama,
        //     'username' => $request -> username,
        //     'password' => $user->password,
        //     'level' => $request -> level,
        //     'alamat' => $request -> alamat,
        //     'no_telp' => $request -> no_telp,
        //     'foto' => $foto
        // ]);

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

        return redirect('/dashboard')->with($validated);
    }

    public function password($id)
    {
        $pilih_jenis = JenisBahan::all();
        return view('page.user.password',compact('pilih_jenis'));
    }
}
