<?php

namespace App\Http\Controllers;

use App\Models\QuizDetail;
use App\Http\Requests\StoreQuizDetailRequest;
use App\Http\Requests\UpdateQuizDetailRequest;

class QuizDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreQuizDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizDetail  $quizDetail
     * @return \Illuminate\Http\Response
     */
    public function show(QuizDetail $quizDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizDetail  $quizDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizDetail $quizDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizDetailRequest  $request
     * @param  \App\Models\QuizDetail  $quizDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizDetailRequest $request, QuizDetail $quizDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizDetail  $quizDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizDetail $quizDetail)
    {
        //
    }
}
