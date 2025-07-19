<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return karyawan::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'tempat_tinggal' => 'required|string',
            'nip' => 'required|integer|digits:8|unique:karyawans' ,
            'email' => 'required|email|unique:karyawans' ,
        ]);
        return karyawan::create($request->all());
    }
/** */
    /**
     * Display the specified resource.
     */
    public function show(karyawan $karyawan)
    {
        return $karyawan();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, karyawan $karyawan)
    {
        $request->validate([
            'nama' => 'required|string',
            'tempat_tinggal' => 'required|string',
            'nip' => 'required|integer|digits:8|unique:karyawans,nip,' .$karyawan->id,
            'email' => 'required|string|unique:karyawans,email,' .$karyawan->id,
        ]);
        $karyawan->update($request->all());
        return $karyawan;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(karyawan $karyawan)
    {
        $karyawan->delete();
        return response()->json(['message' => 'Data Dihapus']);
    }
}
