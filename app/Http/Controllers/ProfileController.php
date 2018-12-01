<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function exibirProfile($identifier, Request $request){
        $logged_user = $request->user();
        $user = DB::table('user_info')
          ->where("email", urldecode($identifier))
          ->get();

        if ($user->isEmpty()) {
          return abort(404);
        }

        $isOwner = $user[0]->email == urldecode($logged_user->email);

        return view ('profile', [ 'user' => $user[0], 'isOwner' => $isOwner]);
    }

    public function updateProfile($identifier, Request $request) {
        if ($request->user()->email == urldecode($identifier)) {
          $name = $request->name;
          $last_name = $request->last_name;
          $email = $request->email;
          $phone = $request->phone;
          $area = $request->area;
          $position = $request->position;
          $number = $request->number;
//corrigir os nomes das colunas no banco

          DB::table('user_info')
            ->where("email", urldecode($identifier))
            ->update(['name' => $name]);
        }

        return redirect('/profile/'.$identifier);
    }
}
