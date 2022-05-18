<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function index($kelas, $materi)
    {
        if (Auth::user()->status == 'admin') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $navbar = DB::table('study')
            ->select(DB::raw('kelas_id,materi_id ,materi.judul'))
            ->leftJoin('kelas', 'kelas.id', '=', 'kelas_id')
            ->leftJoin('materi', 'materi.id', '=', 'materi_id')
            ->where('kelas_id', '=', $kelas)
            ->orderBy('urutan', 'ASC')
            ->get();
        $data = DB::table('study')
            ->select(DB::raw('study.id,urutan,study.kelas_id, study.materi_id,kelas.*, materi.*'))
            ->leftJoin('kelas', 'kelas.id', '=', 'kelas_id')
            ->leftJoin('materi', 'materi.id', '=', 'materi_id')
            ->where('kelas_id', '=', $kelas)
            ->where('materi_id', '=', $materi)
            ->orderBy('urutan', 'ASC')
            ->get();
        // dd($data);
        return view('users.dashboard.content_kelas.index', compact('data', 'navbar'));
    }
}