<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class ScreenController extends Controller
{
    public function loadScreen(Request $request)
    {
        $screen = $request->input('screen');
        $message = 'This is screen ' . $screen;

        return response()->json(['message' => $message]);
    }

    public function getRecords(Request $request)
    {
        $query = Record::query();

        if ($search = $request->input('search')) {
            $query->where('id', 'like', "%$search%")
                ->orWhere('title', 'like', "%$search%")
                ->orWhere('notes', 'like', "%$search%");
        }

        $records = $query->paginate(20);
        return response()->json($records);
    }
}
