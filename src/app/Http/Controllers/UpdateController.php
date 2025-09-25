<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use App\Models\Weight;

class UpdateController extends Controller
{
    // update.blade.php呼び出し
    public function index()
    {
        return view('update');
    }
    // 更新機能
    public function update(UpdateRequest $request)
    {
        $form = $request->all();
        Weight::find($request->id)->update($form);
        return redirect('index');
    }
}
