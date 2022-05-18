<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Study;
use Illuminate\Support\Facades\DB;

class KelolaUrutanController extends Controller
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
        $data = DB::table('study')
            ->select(DB::raw('study.id,urutan, kelas.nama_kelas, materi.judul'))
            ->leftJoin('kelas', 'kelas.id', '=', 'kelas_id')
            ->leftJoin('materi', 'materi.id', '=', 'materi_id')
            ->get();
        // dd($data);
        return view('pengajar.kelola_urutan.index', compact('data'));
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
        $kelas = Kelas::all();
        $materi = Materi::all();
        return view('pengajar.kelola_urutan.create', compact('kelas', 'materi'));
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
            'urutan' => $request->input('urutan'),
            'kelas_id' => $request->input('kelas_id'),
            'materi_id' => $request->input('materi_id'),
        ]);
        Study::create($data);
        return redirect()->route('kelola_urutan.index');
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
        $kelola = Study::findOrFail($id);
        $kelas = Kelas::all();
        $materi = Materi::all();
        return view('pengajar.kelola_urutan.edit', compact('kelola', 'kelas', 'materi'));
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
            'urutan' => $request->input('urutan'),
            'kelas_id' => $request->input('kelas_id'),
            'materi_id' => $request->input('materi_id'),
        ]);
        Study::findOrFail($id)->update($data);
        return redirect()->route('kelola_urutan.index');
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

        $del = Study::findOrFail($id);
        $del->delete();
        alert()->success('data telah dihapus', 'Selamat');
        return redirect()->route('kelola_urutan.index');
    }
}