<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Users;

class ProfileController extends Controller
{
    public function exibirProfile($identifier, Request $request){
        $logged_user = $request->user();
        $user = Users::where("email", urldecode($identifier))
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
          $mini_bio = $request->mini_bio;
//corrigir os nomes das colunas no banco

// Storage::put('../public/images/uploaded/file.jpg', $image);
          $user_info = [
            'name' => $name,
            'last_name' => $last_name,
            'phone' => $phone,
            'area' => $area,
            'position' => $position,
            'number' => $number,
            'mini_bio' => $mini_bio,
        ];

        if($request->image != null && $request->image->isValid()) {
          $image = $request->image->store('profile_images', ['disk' => 'public']);
          $user_info['image'] = $image;
        }


          Users::where("email", urldecode($identifier))
            ->update($user_info);

        }

        return redirect('/profile/'.$identifier);
    }

    public function delete(){
      $user = auth()->user();
      Users::find($user->user_id)->delete();
      return redirect('/home');
   }
}
