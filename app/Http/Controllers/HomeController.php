<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pageData['username']   = 'Heroku';
        $pageData['last_login'] = date('Y-m-d H:i:s');
        $pageData['list_pendidikan'] = ['SD','SMP','SMA','S1','S2','S3'];									    
        return view('simple-home', $pageData);
    }

    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}

    // ============================
    // SIGNUP LAMA (TIDAK DIHAPUS)
    // ============================
    public function signup(Request $request)
    {
        //dd($request->all());

        $pageData['name']     = $request->name;
        $pageData['email']    = $request->email;
        $pageData['password'] = $request->password;
        return view('signup-success', $pageData);

        $request->validate([
            'name'  => 'required|max:10',
            'email' => ['required','email'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        ]);
    }

    // =====================================================
    // ⭐ LOGIN KHUSUS NAMA_KELAS (DITAMBAHKAN TANPA MENGUBAH)
    // =====================================================
    public function loginNamaKelas(Request $request)
    {
        session(['nama_kelas' => $request->nama_kelas]);

        return redirect()->route('home');
    }
}
