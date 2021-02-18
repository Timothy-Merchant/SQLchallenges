<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Owner;

class HomeController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $morningStart = Carbon::createFromTimeString('4:00');
        $afternoonStart = Carbon::createFromTimeString('12:00');
        $eveningStart = Carbon::createFromTimeString('18:00');

        if ($now->between($morningStart, $afternoonStart)) {
            $greeting = 'Good morning!';
        } else if ($now->between($afternoonStart, $eveningStart)) {
            $greeting = 'Good afternoon!';
        } else {
            $greeting = 'Good evening!';
        }

        $ownersFromDb = Owner::all();
        return view('welcome', ['owners' => $ownersFromDb, 'greeting' => $greeting]);
    }

    
}
