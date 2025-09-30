<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produk' , function () {
    return response()->json([
       ['id' => 1, 'nama' => 'Laptop Gaming'],
       ['id' => 2, 'nama' => 'Mechanical Keyboard'],
       
    ]);
});

Route ::get('/fakultas', function () {
    return response()->json([
        ["kode" => "FRI", "nama_fakultas" => "Fakultas Rekayasa Industri"],
        ["kode" => "FTE", "nama_fakultas" => "Fakultas Teknik Elektro"],
        ["kode" => "FIF", "nama_fakultas" => "Fakultas Informatika"],
        ["kode" => "FEB", "nama_fakultas" => "Fakultas Ekonomi dan Bisnis"],
        ["kode" => "FIK", "nama_fakultas" => "Fakultas Industri Kreatif"],
        ["kode" => "FIT", "nama_fakultas" => "Fakultas Ilmu Terapan"],
    ]);
});