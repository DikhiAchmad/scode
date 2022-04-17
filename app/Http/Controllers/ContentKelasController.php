<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContentKelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->status == 'admin') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }

        return view('users.dashboard.content_kelas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->status == 'admin') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $data = Study::where('kelas_id', '=', $id)->orderBy('urutan', 'ASC')->get();

        // $data = Study::join('kelas', 'kelas.id', '=', 'study.kelas_id')
        //     ->join('materi', 'materi.id', '=', 'study.materi_id')
        //     ->join('quiz', 'quiz.id', '=', 'study.quiz_id')
        //     ->where('kelas_id', '=', $id)
        //     ->get([
        //         'kelas.id', 'kelas.gambar', 'kelas.nama_kelas', 'kelas.deskripsi', 'materi.id',
        //         'materi.link_video', 'materi.judul', 'materi.isi', 'quiz.pertanyaan', 'quiz.pilihan_1',
        //         'quiz.pilihan_2', 'quiz.pilihan_3', 'quiz.pilihan_4', 'jawaban_benar'
        //     ]);
        // dd($data);
        return view('users.dashboard.content_kelas.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}