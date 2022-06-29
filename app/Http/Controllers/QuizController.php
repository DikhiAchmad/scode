<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kelas, $materi)
    {
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
        $data1 = $kelas;
        $data2 = $materi;
        return view('users.dashboard.content_kelas.quiziz', compact('data', 'navbar', 'quiz', 'data1', 'data2'));
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
    public function store($kelas, $materi, Request $request)
    {
        $quiz = DB::table('quiz')
            ->select(DB::raw('quiz.*'))
            ->leftJoin('materi', 'materi.id', '=', 'quiz.materi_id')
            ->where('materi_id', '=', $materi)
            ->get();
        for ($i = 0; $i < count($quiz); ++$i) {
            if ($request->input('jawaban' . $i + 1) === $quiz[$i]->jawaban_benar) {
                $data = ([
                    'quiz_id' => $quiz[$i]->id,
                    'user_id' => Auth::user()->id,
                    'validasi_jawaban' => true,
                ]);
                Jawaban::create($data);
            } else {
                $data = ([
                    'quiz_id' => $quiz[$i]->id,
                    'user_id' => Auth::user()->id,
                    'validasi_jawaban' => false,
                ]);
                Jawaban::create($data);
            }
        }
        return redirect()->route('grade');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
