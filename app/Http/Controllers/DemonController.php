<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Demon;
use Illuminate\Http\Request;

class DemonController extends Controller
{
    public function graph(Request $request)
    {
        $data = [
            'demons' => Demon::all(),
            'xAxisProperty' => $request->x_axis_property,
            'yAxisProperty' => $request->y_axis_property,
        ];

        return view('graph')->with($data);
    }
}
