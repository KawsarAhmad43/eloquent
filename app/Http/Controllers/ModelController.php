<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function allData(){
        $user = User::find(1);
        $profile = $user->profile;
        dd($profile->address);
    }
}
