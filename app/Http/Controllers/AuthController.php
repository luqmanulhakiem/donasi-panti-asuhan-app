<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request) {
        // request data
        $data = $request->validated();
        
        // cari berdasarkan email
        $find = User::where('email', $data['email'])->first();
        if ($find) {
            // check password
            if (Hash::check($data['password'], $find->password)) {
                // lakukan login
                Auth::attempt($data);
                return redirect()->route('dashboard');
            }else{
                // password salah
                return redirect()->back()->withInput();
            }
        }else{
            // email tidak ditemukan
            return redirect()->back()->withInput();
        }
    }

    public function logout() {
        // logout
        Auth::logout();
        // pergi ke login
        return redirect()->route('login');
    }
}
