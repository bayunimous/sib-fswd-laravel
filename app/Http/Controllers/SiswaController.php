<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::orderBy('id', 'DESC')->get();
        return view('siswa.index', compact('siswa'));
    }

    public function landing()
    {
        $siswa = Siswa::all();
        return view('welcome', compact('siswa'));
    }
}
