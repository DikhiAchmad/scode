<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaMateriController extends Controller
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
        if (Auth::user()->status == 'user') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'admin') {
            return redirect()->back();
        }
        $batas = 10;
        $data = Materi::paginate($batas);
        $no = $batas * ($data->currentPage() - 1);
        return view('pengajar.kelola_materi.index', [
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
        if (Auth::user()->status == 'user') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'admin') {
            return redirect()->back();
        }
        return view('pengajar.kelola_materi.create');
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
            'link_video' => $request->input('link_video'),
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
        ]);
        Materi::create($data);
        return redirect()->route('kelola_materi.index');
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
        $kelola = Materi::findOrFail($id);
        return view('pengajar.kelola_materi.edit', compact('kelola'));
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
            'link_video' => $request->input('link_video'),
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
        ]);
        Materi::findOrFail($id)->update($data);
        return redirect()->route('kelola_materi.index');
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

        $del = Materi::findOrFail($id);
        $del->delete();
        alert()->success('data telah dihapus', 'Selamat');
        return redirect()->route('kelola_materi.index');
    }
}