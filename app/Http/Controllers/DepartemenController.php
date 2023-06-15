<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;

class DepartemenController extends Controller
{
    public function index() {
        $departemens = Departemen::all();

        // dd($departemens);

        return response()->json($departemens);
    }

    public function store(Request $request) {
        $newDepartemen = Departemen::create([
            'nama' => $request->nama,
        ]);

        return redirect('/api/departemen');
    }

    public function show($id) {
        $departemens = Departemen::find($id);

        // dd($departemens);

        return response()->json($departemens);
    }

    public function update(Request $request, $id) {
        $updatedDepartemen = Departemen::where('id', $id)->update([
            'nama' => $request->nama,
        ]);

        return redirect('/api/departemen');
    }

    public function destroy($id) {
        $deletedDepartemen = Departemen::where('id', $id)->delete();

        return redirect('/api/departemen');
    }

}
