<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('page.auth.login');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'username wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);
        if (Auth::attempt($request->only('username', 'password'))) {;
            return redirect('/lanjut')->with('message', 'Berhasil Login');
        } else {
            return redirect()->back()->with('error', 'Username atau Password Salah')
            ->with('message', 'Username atau Password Salah');
        };
    }

    public function register()
    {
        return view('page.auth.register');
    }

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

        return redirect()->back()->with('message', 'Data Berhasil Ditambahkan')->with($validated);
    }

    public function logout()
    {
        Auth::logout();
        return view('page.auth.login');
    }
}
