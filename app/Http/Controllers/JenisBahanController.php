<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBahan;
use App\Models\Bahan;

class JenisBahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilih_jenis = JenisBahan::all();
        $jenis = JenisBahan::all();
        return view('page.jenis.index',compact('jenis','pilih_jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilih_jenis = JenisBahan::all();

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
        $validated = $request->validate([
            'tipe' => 'required | min:5 | max:250',
        ]);
        JenisBahan::create([
            'tipe' => $request->tipe,
        ]);
        return redirect('/material-type')->with($validated);
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
        $jenis = JenisBahan::find($id);
        $validated = $request->validate([
            'tipe' => 'required | min:5 | max:250',
        ]);
        $jenis->update([
            'tipe' => $request->tipe,
        ]);
        return redirect('/material-type')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = JenisBahan::find($id);
        // $material = Bahan::where('id_jenis','=',$id)->first();
        // $material->delete();

        $jenis->delete();

        return redirect()->back();
    }
}
