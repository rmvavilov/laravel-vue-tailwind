<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GridController extends Controller
{
    public function getGridState()
    {
        $grid = [];
        for ($i = 0; $i < 3; $i++) {
            $row = [];
            for ($j = 0; $j < 3; $j++) {
                $row[] = rand(0, 1) ? 'blue' : 'red';
            }
            $grid[] = $row;
        }

        return response()->json(['grid' => $grid]);
    }

    public function handleSquareClick(Request $request)
    {
        $grid = $request->input('grid');
        $row = $request->input('row');
        $col = $request->input('col');

        $color = $grid[$row][$col];
        $newColor = $color === 'red' ? 'blue' : 'red';
        $grid[$row][$col] = $newColor;

        $adjacentIndices = [
            [-1, 0], [1, 0], [0, -1], [0, 1]
        ];

        foreach ($adjacentIndices as $indices) {
            $adjRow = $row + $indices[0];
            $adjCol = $col + $indices[1];
            if (isset($grid[$adjRow][$adjCol]) && $grid[$adjRow][$adjCol] === $color) {
                $grid[$adjRow][$adjCol] = $newColor;
            }
        }

        return response()->json(['grid' => $grid]);
    }
}
