<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class KelolaPengajarController extends Controller
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
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $batas = 10;
        $data = User::where('status', '=', 'pengajar')->paginate($batas);
        $no = $batas * ($data->currentPage() - 1);
        return view('admin.kelola_pengajar.index', [
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
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        return view('admin.kelola_pengajar.create');
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
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $this->validate($request, [
            'name' => 'required|string',
            'telp' => 'required|numeric|digits_between:8,15',
            'jenis_kelamin' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $data = ([
            'name' => $request->input('name'),
            'telp' => $request->input('telp'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'status' => 'pengajar',
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        User::create($data);
        return redirect()->route('kelola_pengajar.index');
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
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $user = User::findOrFail($id);
        return view('admin.kelola_pengajar.edit', compact('user'));
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
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $this->validate($request, [
            'name' => 'required|string',
            'telp' => 'required|numeric|digits_between:8,15',
            'jenis_kelamin' => 'required',
            'password' => 'required|min:8'
        ]);

        $data = ([
            'name' => $request->input('name'),
            'telp' => $request->input('telp'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        User::findOrFail($id)->update($data);
        return redirect()->route('kelola_pengajar.index');
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
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        $del = User::findOrFail($id);
        $del->delete();
        return redirect()->route('kelola_pengajar.index');
    }
}