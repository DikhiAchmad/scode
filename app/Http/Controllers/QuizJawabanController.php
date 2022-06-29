<?php

namespace App\Http\Controllers;

use App\Models\QuizSoal;
use App\Models\QuizJawaban;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizJawabanRequest;
use App\Http\Requests\UpdateQuizJawabanRequest;

class QuizJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 10;
        $data = QuizJawaban::where('status',1)->paginate($batas);
        $no = $batas * ($data->currentPage() - 1);
        return view('admin.kelola_jawaban.index', [
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
        return view('admin.kelola_jawaban.create', [
            'quiz_soal'=>QuizSoal::all(),
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizJawabanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'quiz_soal_id'=>'required',
            'jawaban'=>'required',
            'jawaban_benar'=>'required',
            'status'=>'required',
        ]);
        $soal_id = $validateData['quiz_soal_id'];
        QuizJawaban::create($validateData);

        $this->validate($request, [
            'jawaban_2' => 'required',
            'jawaban_benar_2' => 'required',
            'status_2' => 'required',
        ]);
        $data = ([
            'quiz_soal_id' => $soal_id,
            'jawaban' => $request->input('jawaban_2'),
            'jawaban_benar' => $request->input('jawaban_benar_2'),
            'status' => $request->input('status_2'),
        ]);
        QuizJawaban::create($data);

        $this->validate($request, [
            'jawaban_3' => 'required',
            'jawaban_benar_3' => 'required',
            'status_3' => 'required',
        ]);
        $datas = ([
            'quiz_soal_id' => $soal_id,
            'jawaban' => $request->input('jawaban_3'),
            'jawaban_benar' => $request->input('jawaban_benar_3'),
            'status' => $request->input('status_3'),
        ]);
        QuizJawaban::create($datas);

        $this->validate($request, [
            'jawaban_4' => 'required',
            'jawaban_benar_4' => 'required',
            'status_4' => 'required',
        ]);
        $datase = ([
            'quiz_soal_id' => $soal_id,
            'jawaban' => $request->input('jawaban_4'),
            'jawaban_benar' => $request->input('jawaban_benar_4'),
            'status' => $request->input('status_4'),
        ]);
        QuizJawaban::create($datase);
        return redirect()->route('setting_jawaban.index');

         // $quiz_jawaban = new QuizJawaban;
        // if(QuizJawaban::where('jawaban', null)){
        //     QuizJawaban::create($validateData);
        // }
        // else
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizJawaban  $quizJawaban
     * @return \Illuminate\Http\Response
     */
    public function show(QuizJawaban $quizJawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizJawaban  $quizJawaban
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz_jawaban = QuizJawaban::findOrFail($id);
        return view('admin.kelola_jawaban.edit', [
            'quiz_jawaban'=>$quiz_jawaban,
            'quiz_soal'=>QuizSoal::all(),
            //
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizJawabanRequest  $request
     * @param  \App\Models\QuizJawaban  $quizJawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'quiz_soal_id'=>'required',
            'jawaban'=>'required',
            'jawaban_benar'=>'required',
            'status'=>'required',
        ];

        $validateData = $request->validate($rules);
        QuizJawaban::findOrFail($id)->update($validateData);
        return redirect()->route('setting_jawaban.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizJawaban  $quizJawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        QuizJawaban::findOrFail($id)->delete();
        return redirect()->route('setting_jawaban.index');
    }
}
