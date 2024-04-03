<?php

namespace App\Http\Controllers\Aplic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConectAPIController extends Controller
{
  public function changed_chords(Request $request)
  {
    //trata
    $fator = $request['fator'];
    $texto = $request['textoNovo'];
    $page = 'body/' . $request['agentUser'] . '/coleaqui';

    
    //dd($request->all());
    //solicita
    $response =  Http::post(
      'https://288c64e8-3af4-4158-9f50-cd00e3b677fb-00-2265w61h05qm0.picard.replit.dev/api/',
      ['fator' => $fator, 'texto' => $texto]
    );
//dd($response['lines']);   
//dd($response->body());
//dd($response->json());
    //responde
    return view( $page, [
                'lines' => $response['lines'],
                'cifers' => $response['cifers'], 
                'textoAntigoString' => $texto,
                'fatorAntigo' => $fator
                ]);
  }

  public function outroTom(Request $request)
  {
    $fatorNovoInteger = intval($request['fator']);
    $fatorAntigoInteger = intval($request['fatorAntigo']);
    $fator = ($fatorAntigoInteger + $fatorNovoInteger);
    $request['fator'] = strval($fator);

    if($request['textoAntigo'] != '!0!'){
      $request['textoNovo'] = $request['textoAntigo'];
    }

    $request['textoAntigo'] = null;
    $request['fatorAntigo'] = null;
    
    
    return $this->changed_chords($request);
  }
}
