<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // controller home
    public function home()
    {
        $jam = now()->hour;

        // logika waktu
        if ($jam < 12){
            $waktu = 'Pagi';
        } elseif ($jam < 15) {
            $waktu = 'Siang';
        } elseif ($jam < 18) {
            $waktu = 'Sore';
        } else {
            $waktu = 'Malam';
        }

        return view('landingpage', compact('waktu'));
    }
}
