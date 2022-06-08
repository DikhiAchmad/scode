<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('users.dashboard.content_kelas.quiziz', compact('data', 'navbar', 'quiz'));
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
