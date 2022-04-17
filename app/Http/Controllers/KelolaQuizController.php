<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaQuizController extends Controller
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
        } elseif (Auth::user()->status == 'user') {
            return redirect()->back();
        }
        $data = Quiz::all();
        return view('pengajar.kelola_quiz.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->status == 'user') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'admin') {
            return redirect()->back();
        }
        return view('pengajar.kelola_quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->status == 'user') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'admin') {
            return redirect()->back();
        }

        $data = ([
            'pertanyaan' => $request->input('pertanyaan'),
            'pilihan_1' => $request->input('pilihan_1'),
            'pilihan_2' => $request->input('pilihan_2'),
            'pilihan_3' => $request->input('pilihan_3'),
            'pilihan_4' => $request->input('pilihan_4'),
            'jawaban_benar' => $request->input('jawaban_benar'),
        ]);
        Quiz::create($data);
        return redirect()->route('kelola_quiz.index');
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
        if (Auth::user()->status == 'user') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'admin') {
            return redirect()->back();
        }
        $kelola = Quiz::findOrFail($id);
        return view('pengajar.kelola_quiz.edit', compact('kelola'));
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
        if (Auth::user()->status == 'user') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'admin') {
            return redirect()->back();
        }

        $data = ([
            'pertanyaan' => $request->input('pertanyaan'),
            'pilihan_1' => $request->input('pilihan_1'),
            'pilihan_2' => $request->input('pilihan_2'),
            'pilihan_3' => $request->input('pilihan_3'),
            'pilihan_4' => $request->input('pilihan_4'),
            'jawaban_benar' => $request->input('jawaban_benar'),
        ]);
        Quiz::findOrFail($id)->update($data);
        return redirect()->route('kelola_quiz.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->status == 'user') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'admin') {
            return redirect()->back();
        }

        $del = Quiz::findOrFail($id);
        $del->delete();
        alert()->success('data telah dihapus', 'Selamat');
        return redirect()->route('kelola_quiz.index');
    }
}