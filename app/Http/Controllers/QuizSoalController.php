<?php

namespace App\Http\Controllers;

use App\Models\Quiziz;
use App\Models\QuizSoal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizSoalRequest;
use App\Http\Requests\UpdateQuizSoalRequest;

class QuizSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 10;
        $data = QuizSoal::where('status',1)->paginate($batas);
        $no = $batas * ($data->currentPage() - 1);
        return view('admin.kelola_soal.index', [
            'data' => $data,
            'no' => $no
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelola_soal.create', [
            'quiziz'=>Quiziz::all(),
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizSoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'quiziz_id'=>'required',
            'pertanyaan'=>'required',
            'status'=>'required',
        ]);
        QuizSoal::create($validateData);
        return redirect()->route('setting_soal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizSoal  $quizSoal
     * @return \Illuminate\Http\Response
     */
    public function show(QuizSoal $quizSoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizSoal  $quizSoal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz_soal = QuizSoal::findOrFail($id);

        return view('admin.kelola_soal.edit', [
            'quiz_soal'=>$quiz_soal,
            'quiziz'=>Quiziz::all(),
            //
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizSoalRequest  $request
     * @param  \App\Models\QuizSoal  $quizSoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'quiziz_id'=>'required',
            'pertanyaan'=>'required',
            'status'=>'required',
        ];

        $validateData = $request->validate($rules);
        QuizSoal::findOrFail($id)->update($validateData);
        return redirect()->route('setting_soal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizSoal  $quizSoal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        QuizSoal::findOrFail($id)->delete();
        return redirect()->route('setting_soal.index');
    }
}
