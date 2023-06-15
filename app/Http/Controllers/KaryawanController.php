<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index() {
        $karyawans = Karyawan::all();

        // dd($karyawans);

        return response()->json($karyawans);
    }

    public function store(Request $request) {
        $newKaryawan = Karyawan::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'tahun_masuk' => $request->tahun_masuk,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
            'departemen_id' => $request->departemen_id,
        ]);

        return redirect('/api/karyawan');
    }

    public function show($id) {
        $karyawans = Karyawan::find($id);

        // dd($karyawans);

        return response()->json($karyawans);
    }

    public function update(Request $request, $id) {
        $updatedKaryawan = Karyawan::where('id', $id)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'tahun_masuk' => $request->tahun_masuk,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
            'departemen_id' => $request->departemen_id,
        ]);

        return redirect('/api/karyawan');
    }

    public function destroy($id) {
        $deletedKaryawan = Karyawan::where('id', $id)->delete();

        return redirect('/api/karyawan');
    }
}
