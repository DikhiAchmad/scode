<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContentKelasController extends Controller
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
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }

        return view('users.dashboard.content_kelas.index');
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
        if (Auth::user()->status == 'admin') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $navbar = DB::table('study')
            ->select(DB::raw('study.id,urutan, kelas.nama_kelas, materi.judul'))
            ->leftJoin('kelas', 'kelas.id', '=', 'kelas_id')
            ->leftJoin('materi', 'materi.id', '=', 'materi_id')
            ->where('urutan', '=', $id)
            ->orderBy('urutan', 'ASC')
            ->get();
        $data = DB::table('study')
            ->select(DB::raw('study.id,urutan, kelas.nama_kelas, materi.judul'))
            ->leftJoin('kelas', 'kelas.id', '=', 'kelas_id')
            ->leftJoin('materi', 'materi.id', '=', 'materi_id')
            ->where('urutan', '=', $id)
            ->orderBy('urutan', 'ASC')
            ->get();
        return view('users.dashboard.content_kelas.index', compact('data'));
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