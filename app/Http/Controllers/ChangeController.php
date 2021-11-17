<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeRequest;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    public function change(ChangeRequest $request)
    {
        $text = $request->input('text');
        return view('changed', compact('text'));
        //配列に変換して渡す
    }
}
