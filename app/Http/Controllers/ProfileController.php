<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function exibir($user_email){
        $user = DB::table('usuario')
          ->where("e-mail", urldecode($user_email))
          ->get();

        return view ('profile', [ 'user' => $user ]);
    }
}
