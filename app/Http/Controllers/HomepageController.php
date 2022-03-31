<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all()->take(3);
        return view('users.homepage.index', compact('kelas'));
    }

    public function kelas()
    {
        $kelas = Kelas::all();
        return view('users.homepage.kelas.index', compact('kelas'));
    }
    public function show($id)
    {
        $details = Kelas::find($id);
        return view('users.homepage.kelas.detail', compact('details'));
    }
}