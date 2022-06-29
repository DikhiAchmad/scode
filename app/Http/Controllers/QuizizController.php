<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Quiziz;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizizRequest;
use App\Http\Requests\UpdateQuizizRequest;

class QuizizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 10;
        $data = Quiziz::where('status',1)->paginate($batas);
        $no = $batas * ($data->currentPage() - 1);
        return view('admin.kelola_quiz.index', [
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
        return view('admin.kelola_quiz.create', [
            'materis'=>Materi::all(),
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'=>'required',
            'materi_id'=>'required',
            'nilai_soal'=>'required',
            'status'=>'required',
        ]);
        Quiziz::create($validateData);
        return redirect()->route('setting_quiz.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiziz  $quiziz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiziz $quiziz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiziz  $quiziz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiziz = Quiziz::findOrFail($id);

        return view('admin.kelola_quiz.edit', [
            'quiziz'=>$quiziz,
            'materis'=>Materi::all(),
            //
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizizRequest  $request
     * @param  \App\Models\Quiziz  $quiziz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama'=>'required',
            'materi_id'=>'required',
            'nilai_soal'=>'required',
            'status'=>'required',
        ];

        $validateData = $request->validate($rules);
        Quiziz::findOrFail($id)->update($validateData);
        return redirect()->route('setting_quiz.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiziz  $quiziz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quiziz::findOrFail($id)->delete();
        return redirect()->route('setting_quiz.index');
    }
}
