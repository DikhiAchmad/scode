<?php

namespace App\Http\Controllers;

use App\Models\QuizJawaban;
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
        //
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
     * @param  \App\Http\Requests\StoreQuizJawabanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizJawabanRequest $request)
    {
        //
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
    public function edit(QuizJawaban $quizJawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizJawabanRequest  $request
     * @param  \App\Models\QuizJawaban  $quizJawaban
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizJawabanRequest $request, QuizJawaban $quizJawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizJawaban  $quizJawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizJawaban $quizJawaban)
    {
        //
    }
}
