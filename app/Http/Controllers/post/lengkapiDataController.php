<?php
namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LengkapiDataController extends Controller
{
    public function postData(Request $request)
    {
        $user = Auth::user(); 

        $request->validate([
            'phone_number' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'portofolio' => 'required',
        ]);

        // Perbarui data pengguna yang sudah login
        $user->update([
            'phone_number' => $request->phone_number,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'portfolio' => $request->portofolio,
        ]);

        session(['formSubmitted' => true]);

        return redirect()->route('dashboard');
    }
}
