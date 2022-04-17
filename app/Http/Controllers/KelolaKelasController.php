<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KelolaKelasController extends Controller
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
        $data = Kelas::where('user_id', '=', Auth::user()->id)->paginate($batas);
        $no = $batas * ($data->currentPage() - 1);

        return view('pengajar.kelola_kelas.index', [
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
        return view('pengajar.kelola_kelas.create');
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
            'nama_kelas' => $request->input('nama_kelas'),
            'deskripsi' => $request->input('deskripsi'),
            'user_id' => Auth::user()->id,
        ]);
        if ($request->hasFile('gambar')) {
            $foto = $request->file('gambar');
            $ext = $foto->getClientOriginalExtension();
            if ($request->file('gambar')->isValid()) {
                $nama_foto = Str::random(10) . ".$ext";
                $upload_path = 'assets/image/';
                $foto->move($upload_path, $nama_foto);
                $data['gambar'] = $nama_foto;
            }
        }
        Kelas::create($data);
        return redirect()->route('kelola_kelas.index');
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
        $kelola = Kelas::findOrFail($id);
        return view('pengajar.kelola_kelas.edit', compact('kelola'));
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
            'nama_kelas' => $request->input('nama_kelas'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        if ($request->hasFile('gambar')) {
            $foto = $request->file('gambar');
            $ext = $foto->getClientOriginalExtension();
            if ($request->file('gambar')->isValid()) {
                $nama_foto = Str::random(10) . ".$ext";
                $upload_path = 'assets/image/';
                $foto->move($upload_path, $nama_foto);
                $data['gambar'] = $nama_foto;
            }
        }
        Kelas::findOrFail($id)->update($data);
        return redirect()->route('kelola_kelas.index');
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

        $del = Kelas::findOrFail($id);
        $del->delete();
        alert()->success('data telah dihapus', 'Selamat');
        return redirect()->route('kelola_kelas.index');
    }
}