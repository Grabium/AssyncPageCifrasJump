<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BrowserViewMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
   * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
   */



  public function handle(Request $request, Closure $next)
  {
    $agentUsersPossibles = ['Windows', 'Android'];
    $agentUserHTTP = $request->server->get('HTTP_USER_AGENT');

    foreach($agentUsersPossibles as $agentUser){
      if(str_contains($agentUserHTTP, $agentUser)){
        $request['agentUser'] = strtolower($agentUser);
        return $next($request);
      }
    }

    //return $next($request);
    //return response('middleware conectado corretamente');
  }
}
