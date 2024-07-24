<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenController extends Controller
{
    public function loadScreen(Request $request)
    {
        $screen = $request->input('screen');
        $message = 'This is screen ' . $screen;

        return response()->json(['message' => $message]);
    }
}
