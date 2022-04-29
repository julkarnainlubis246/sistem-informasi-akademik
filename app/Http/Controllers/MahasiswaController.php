<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Pekerjaan;
use App\Models\Wali;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mahasiswa.index', [
            'mahasiswas' => Mahasiswa::all(),
            'jurusans' => Jurusan::all(),
            'pekerjaans' => Pekerjaan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mahasiswa.index', [
            'jurusans' => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|unique:mahasiswas',
            'nim' => 'required|unique:mahasiswas',
            'jurusan_id' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|unique:mahasiswas',
        ]);
        $validatedData2 = $request->validate([
            'nama_wali' => 'required|unique:walis',
            'alamat_wali' => 'required',
            'pekerjaan_id' => 'required',
            'no_hp_wali' => 'required|unique:walis',
        ]);

        Mahasiswa::create($validatedData);
        Wali::create($validatedData2);

        return redirect('/data/mahasiswa')->with('success', 'New category has been addes!');
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
