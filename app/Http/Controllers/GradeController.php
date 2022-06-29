<?php

namespace App\Http\Controllers;

use App\Models\Quiziz;
use App\Models\Jawaban;
use App\Models\QuizData;
use App\Models\QuizSoal;
use App\Models\QuizDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('jawaban')
        //     ->select(DB::raw('quiz.pertanyaan, jawaban.validasi_jawaban'))
        //     ->leftJoin('quiz', 'quiz.id', '=', 'jawaban.quiz_id')
        //     ->where('user_id', '=', Auth::user()->id)
        //     ->get();
        // $data_quiz = QuizData::all();
        $data_quiz = QuizData::where('user_id', Auth::user()->id)->first();

        $data_detail = QuizDetail::where('quiz_data_id', $data_quiz->id)->get();
        // dd($data_detail);
        $pertanyaan = QuizSoal::where('quiziz_id', $data_quiz->quiziz->id)->count();
        $jwb_benar = QuizDetail::where('quiz_data_id', $data_quiz->id)->where('jawaban_benar',1)->count();
        $jwb_salah = QuizDetail::where('quiz_data_id', $data_quiz->id)->where('jawaban_benar',0)->count();
        //  $data = QuizDetail::where('materi_id', $quiz_detail-)->get();
        // $quiz = Quiziz::where('materi_id', $materi)->first();

        return view('users.dashboard.content_kelas.grade', compact('data_quiz','data_detail', 'pertanyaan', 'jwb_benar', 'jwb_salah'));
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
