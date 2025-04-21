<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function authUser(Request $request){
        $dados = $request->except('_token');
        if(Auth::attempt($dados)){
            return redirect('home')->with('success','Usuário Logado Com Sucesso!');
        }
        return redirect()->back()->with('error','Email ou Senha Incorretos');
    }

    public function logoutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index')->with('success','Usuário Deslogado com Sucesso');
    }

    public function showRegister(){
        return view('register');
    }
}
