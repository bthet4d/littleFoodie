<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index () {
        return view('charts');
    }

    public function show () {
        return view('charts/{chart}');
    }

    /**
     * Functionality
     *  Create/Save
     *  Complete
     *      -> Celebrate
     *  update
     *      - mark off a square
     */
}
