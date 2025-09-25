<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use App\Models\Register2;
use App\Http\Requests\Register2Request;
use Illuminate\Http\Request;

class Register2Controller extends Controller
{
    // register2.blade.php呼び出し
    public function register2()
    {
        return view('register2');
    }
    // 追加機能
    public function create(Register2Request $request)
    {
        $form = $request->all();
        register2::create($form);
        return redirect('/register/step2');
    }

}
