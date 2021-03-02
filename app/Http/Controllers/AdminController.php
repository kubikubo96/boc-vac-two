<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->first();
        $visitDay = visits('App\Post')->period('day')->count();
        $visitWeek = visits('App\Post')->period('week')->count();
        $visitMonth = visits('App\Post')->period('month')->count();
        $visitYear = visits('App\Post')->period('year')->count();
        $visitAll = visits('App\Post')->count();

        return view('admin.index',
            [
                'user' => $user,
                'visitDay' => $visitDay,
                'visitWeek' => $visitWeek,
                'visitMonth' => $visitMonth,
                'visitYear' => $visitYear,
                'visitAll' => $visitAll
            ]
        );
    }
}
