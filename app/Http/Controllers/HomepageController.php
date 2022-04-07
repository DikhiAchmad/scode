<?php

namespace App\Http\Controllers;

use App\Models\HavingClass;
use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomepageController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all()->take(3);
        return view('users.homepage.index', compact('kelas'));
    }

    public function kelas()
    {
        $kelas = Kelas::all();
        return view('users.homepage.kelas.index', compact('kelas'));
    }
    public function show($id)
    {
        $details = Kelas::find($id);
        return view('users.homepage.kelas.detail', compact('details'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->status == 'admin') {
            return redirect()->back();
        } elseif (Auth::user()->status == 'pengajar') {
            return redirect()->back();
        }
        HavingClass::create([
            'user_id' => Auth::user()->id,
            'kelas_id' => $request->input('kelas_id'),
        ]);
        Alert::success('Congrats', 'Successfully');
        return redirect()->route('dashboard.index');
    }
}