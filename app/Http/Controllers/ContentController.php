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
        $navbar = DB::table('materi')
            ->select(DB::raw('kelas_id,materi.*'))
            ->leftJoin('kelas', 'kelas.id', '=', 'kelas_id')
            ->where('kelas_id', '=', $kelas)
            ->get();
        $data = DB::table('materi')
            ->select(DB::raw('kelas_id,materi.*'))
            ->leftJoin('kelas', 'kelas.id', '=', 'kelas_id')
            ->where('materi.id', '=', $materi)
            ->get();
        $quiz = DB::table('quiz')
            ->select(DB::raw('quiz.*'))
            ->leftJoin('materi', 'materi.id', '=', 'quiz.materi_id')
            ->where('materi_id', '=', $materi)
            ->get();
        return view('users.dashboard.content_kelas.index', compact('data', 'navbar', 'quiz'));
    }
}