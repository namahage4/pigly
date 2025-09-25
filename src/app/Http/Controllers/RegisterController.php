<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use App\Models\Register;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    // register.blade.php呼び出し
    public function register()
    {
        return view('auth.register');
    }
    // 追加機能
    public function create(RegisterRequest $request)
    {
        $form = $request->all();
        register::create($form);
        return redirect('auth.register');
    }

    // login.blade.php呼び出し
    public function login()
    {
        return view('auth.login');
    }
   
    // index.blade.php呼び出し
    public function index()
    {
        return view('index');
    }

}
