<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Raw;
use App\Models\Rawat;
use App\Models\Ruang;

class ApiController extends Controller
{
    // Dokter
    public function createDokter(Request $request) {
        $dokters = new Dokter();
        $dokters->nama_dokter = $request->input('nama_dokter');
        $dokters->alamat_dokter = $request->input('alamat_dokter');
        $dokters->nomor_telepon = $request->input('nomor_telepon');
        $dokters->spesialis_dokter = $request->input('spesialis_dokter');
        $dokters->save();
        return response()->json($dokters);
    }

    public function showDokter(){
        $dokters = Dokter::all();
        return response()->json($dokters);
    }

    public function deleteDokter($id) {
        $dokters = Dokter::find($id);
        $dokters->delete();
        return response()->json($dokters);
    }

    public function updateDokter(Request $request, $id) {
        $dokters = Dokter::find($id);
        $dokters->nama_dokter = $request->input('nama_dokter');
        $dokters->alamat_dokter = $request->input('alamat_dokter');
        $dokters->nomor_telepon = $request->input('nomor_telepon');
        $dokters->spesialis_dokter = $request->input('spesialis_dokter');

        $dokters->save();
        return response()->json($dokters);
    }

    // Pasien
    public function createPasien(Request $request) {
        $pasiens = new Pasien();
        $pasiens->nama_pasien = $request->input('nama_pasien');
        $pasiens->alamat_pasien = $request->input('alamat_pasien');
        $pasiens->nomor_telepon = $request->input('nomor_telepon');
        $pasiens->umur = $request->input('umur');
        $pasiens->keluhan_pasien = $request->input('keluhan_pasien');
        $pasiens->id_dokter = $request->input('id_dokter');

        $pasiens->save();
        return response()->json($pasiens);
    }

    public function showPasien(){
        $pasiens = Pasien::all();

        return response()->json($pasiens);
    }

    public function deletePasien($id) {
        $pasiens = Pasien::find($id);
        $pasiens->delete();
        return response()->json($pasiens);
    }

    public function updatePasien(Request $request, $id) {
        $pasiens = Pasien::all($id);
        $pasiens->nama_pasien = $request->input('nama_pasien');
        $pasiens->alamat_pasien = $request->input('alamat_pasien');
        $pasiens->nomor_telepon = $request->input('nomor_telepon');
        $pasiens->umur = $request->input('umur');
        $pasiens->keluhan_pasien = $request->input('keluhan_pasien');
        $pasiens->id_dokter = $request->input('id_dokter');

        $pasiens->save();
        return response()->json($pasiens);
    }

    //Ruang
    public function createRuang(Request $request) {
        $ruangs = new Ruang();
        $ruangs->nama_ruang = $request->input('nama_ruang');
    
        $ruangs->save();
        return response()->json($ruangs);
    }

    public function showRuang(){
        $ruangs = Ruang::all();

        return response()->json($ruangs);
    }

    public function deleteRuang($id) {
        $ruangs = Ruang::find($id);
        $ruangs->delete();
        return response()->json($ruangs);
    }

    public function updateRuang(Request $request, $id) {
        $ruangs = Ruang::all($id);
        $ruangs->nama_ruang = $request->input('nama_ruang');
    
        $ruangs->save();
        return response()->json($ruangs);
    }

    // Rawat Inap
    public function createRawat(Request $request) {
        $rawats = new Rawat();
        $rawats->id_pasien = $request->input('id_pasien');
        $rawats->id_dokter = $request->input('id_dokter');
        $rawats->id_ruang = $request->input('id_ruang');

        $rawats->save();
        return response()->json($rawats);
    }

    public function showRawat(){
        $rawats = Rawat::all();

        return response()->json($rawats);
    }

    public function deleteRawat($id) {
        $rawats = Rawat::find($id);
        $rawats->delete();
        return response()->json($rawats);
    }

    public function updateRawat(Request $request, $id) {
        $rawats = Rawat::all($id);
        $rawats->id_pasien = $request->input('id_pasien');
        $rawats->id_dokter = $request->input('id_dokter');
        $rawats->id_ruang = $request->input('id_ruang');

        $rawats->save();
        return response()->json($rawats);
    }

    // Petugas
    public function createPetugas(Request $request) {
        $petugas = new Petugas();
        $petugas->nama_petugas = $request->input('nama_petugas');
        $petugas->alamat_petugas = $request->input('alamat_petugas');
        $petugas->nomor_telepon = $request->input('nomor_telepon');

        $petugas->save();
        return response()->json($petugas);
    }

    public function showPetugas(){
        $petugas = Petugas::all();

        return response()->json($petugas);
    }

    public function deletePetugas($id) {
        $petugas = Petugas::find($id);
        $petugas->delete();
        return response()->json($petugas);
    }

    public function updatePetugas(Request $request, $id) {
        $petugas = Petugas::all($id);
        $petugas->nama_petugas = $request->input('nama_petugas');
        $petugas->alamat_petugas = $request->input('alamat_petugas');
        $petugas->nomor_telepon = $request->input('nomor_telepon');

        $petugas->save();
        return response()->json($petugas);
    }

    // Pembayaran
    public function createPembayaran(Request $request) {
        $pembayarans = new Pembayaran();
        $pembayarans->id_pasien = $request->input('id_pasien');
        $pembayarans->id_petugas = $request->input('id_petugas');
        $pembayarans->biaya = $request->input('biaya');

        $pembayarans->save();
        return response()->json($pembayarans);
    }

    public function showPembayaran(){
        $pembayarans = Pembayaran::all();

        return response()->json($pembayarans);
    }

    public function deletePembayaran($id) {
        $pembayarans = Pembayaran::find($id);
        $pembayarans->delete();
        return response()->json($pembayarans);
    }

    public function updatePembayaran(Request $request, $id) {
        $pembayarans = Pembayaran::all($id);
        $pembayarans->id_pasien = $request->input('id_pasien');
        $pembayarans->id_petugas = $request->input('id_petugas');
        $pembayarans->biaya = $request->input('biaya');

        $pembayarans->save();
        return response()->json($pembayarans);
    }
}   