<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColeAquiController extends Controller
{
  public function exibirPageHome(Request $request)
  {
    $agentUser = $request['agentUser'];
    $page = 'body/' . $agentUser . '/coleaqui';
    return view($page);
  }


}
