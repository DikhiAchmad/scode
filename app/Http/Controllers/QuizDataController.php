<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Quiziz;
use App\Models\QuizData;
use App\Models\QuizSoal;
use App\Models\QuizDetail;
use App\Models\QuizJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreQuizDataRequest;
use App\Http\Requests\UpdateQuizDataRequest;

class QuizDataController extends Controller
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
        // $navbar = Materi::where('kelas_id', $kelas)->get();
        // $data = Materi::where('id', $materi)->get();
        $data1 = $kelas;
        $data2 = $materi;
        $quiz = Quiziz::where('materi_id', $materi)->first();
        $quiz_soal = QuizSoal::where('quiziz_id', $quiz->id)->first();
        $quiz_jawaban = QuizJawaban::where('quiz_soal_id', $quiz_soal->id)->get();

        return view('users.dashboard.content_kelas.kuis', compact('data', 'navbar', 'quiz_soal', 'quiz_jawaban', 'quiz', 'data1', 'data2'));


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
     * @param  \App\Http\Requests\StoreQuizDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $materi)
    {
        $jawaban= QuizJawaban::where('jawaban_benar',1)->first();
        $quiziz = Quiziz::where('materi_id', $materi)->first();

        $validateData = $request->validate([
            'user_id'=>'required',
            'quiziz_id'=>'required',
        ]);

        $validateData['nilai_total'] = 0;
        QuizData::create($validateData);

        $validatedDatas = $request->validate([
            'materi_id' => 'required',
            'soal_id' => 'required',
            'jawaban_id' => 'required',
        ]);
        if ($validatedDatas['jawaban_id'] == $jawaban->id) {
            $validatedDatas['jawaban_benar'] = 1;
            $validatedDatas['nilai'] = $quiziz->nilai_soal;
        } else {
            $validatedDatas['jawaban_benar'] = 0;
            $validatedDatas['nilai'] = 0;
        }
        QuizDetail::create($validatedDatas);

        $quiz_data = QuizData::latest()->first();
        $validateDatass = QuizDetail::latest()->first();
        $validateDatass -> quiz_data_id = $quiz_data->id;
        $validateDatass -> update();

        $validateDatasss = QuizDetail::where('jawaban_benar', 1)->count();
        $quiz_data -> nilai_total = $validateDatasss * $quiziz->nilai_soal;
        $quiz_data -> update();

        return redirect()->route('grade');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizData  $quizData
     * @return \Illuminate\Http\Response
     */
    public function show(QuizData $quizData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizData  $quizData
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizData $quizData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizDataRequest  $request
     * @param  \App\Models\QuizData  $quizData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizDataRequest $request, QuizData $quizData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizData  $quizData
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizData $quizData)
    {
        //
    }
}
