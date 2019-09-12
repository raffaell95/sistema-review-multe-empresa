<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Painel\Produto;   

class PainelController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Produto $produto)
    {
       
        $produtos = $produto->all();
        
        return view('painel.index', compact('produtos'));
    }

 

    public function loginPainel()
    {
        return view('auth.login-painel');
    }

    public function postLogin(Request $request)
    {
        $validator = validator($request->all(), [
            'email'=> 'required|min:3|max:100',
            'password'=> 'required|min:3|max:100',
        ]);
        
        if($validator->fails()){
            return redirect('/admin/login')->withErrors($validator)->withInput();
        }

        $credentials = ['email_company' => $request->get('email'), 'password' => $request->get('password')];

        if(auth()->guard('admin')->attempt($credentials)){

            return redirect('/admin');

        }else{
            return redirect('/admin/login')->withErrors(['errors' => 'Invalid login!'])->withInput();
        }

    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('/admin/login');
    }


}
