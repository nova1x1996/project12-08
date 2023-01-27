<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function getInfor($social)
    {

        return Socialite::driver('facebook')->redirect();
    }
    public function checkInfor($social)
    {
        $infor = Socialite::driver($social)->user();
        dd($infor);
    }
}
