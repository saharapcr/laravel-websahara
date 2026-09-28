<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function create()
    {
        return "Menampilkan form tambah matakuliah";
    }

    public function store(Request $request)
    {
        return "Menyimpan data matakuliah";
    }

    public function show(string $kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        } else {
            return "Masukkan kode matakuliah!";
        }
    }

    public function edit(string $kode)
    {
        return "Menampilkan form edit matakuliah " . $kode;
    }

    public function update(Request $request, string $kode)
    {
        return "Mengubah data matakuliah " . $kode;
    }

    public function destroy(string $kode)
    {
        return "Menghapus data matakuliah " . $kode;
    }
}