<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    // Menampilkan semua data rumah sakit
    public function index()
    {
        return response()->json(Hospital::all());
    }

    // Menampilkan data berdasarkan ID
    public function show($id)
    {
        $hospital = Hospital::find($id);
        if (!$hospital) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($hospital);
    }

    // Menyimpan data rumah sakit baru
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_rumah_sakit'  => 'required',
            'alamat_lengkap'    => 'required',
            'no_telepon'        => 'required',
            'type_rumah_sakit'  => 'required',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
        ]);

        $hospital = Hospital::create($request->all());
        return response()->json($hospital, 201);
    }

    // Mengupdate data rumah sakit
    public function update(Request $request, $id)
    {
        $hospital = Hospital::find($id);
        if (!$hospital) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $hospital->update($request->all());
        return response()->json($hospital);
    }

    // Menghapus data rumah sakit
    public function destroy($id)
    {
        $hospital = Hospital::find($id);
        if (!$hospital) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $hospital->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
