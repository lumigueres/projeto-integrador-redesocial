<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

  public function pesquisar(Request $request)
  {
    $_query = $request->input('query');
    $query = "%".$_query."%";

    $result = DB::table('user_info')
    ->where('status', 'active')
    ->where(function($subquery) use ($query) {
      $subquery->where('name', 'like', $query)
      ->orWhere('last_name', 'like', $query)
      ->orWhere('area', 'like', $query)
      ->orWhere('email', 'like', $query)
      ->orWhere('position', 'like', $query)
      ->orWhere('phone', 'like', $query)
      ->orWhere('number', 'like', $query)
      ->orWhere('mini_bio', 'like', $query);
    })
    ->get();

    return view ('search', [ 'result' => $result]);


  }
}
