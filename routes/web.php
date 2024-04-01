<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\ColeAquiController;
use App\Http\Controllers\Aplic\ConectAPIController;
use App\Http\Middleware\BrowserViewMiddleware;

/*
Aleluia by Orlando
  Am  G/B  C        F   E
Aleluia A..leluia Alelu...ia 
  Am  G/B  C       F E Am
Aleluia A..leluia Alelu...ia 
Am G F E
C#m7(5-) G#Maj7 Bm7M
Deixa acontecer naturalmente
DMaj7 G7M F#7M Bm7 Bbm7
Eu não quero ver você chorar
 Am7 D7(9) G7M F#7 Bm7
Deixa que  o amor encontre a gente
 D7(9) F#maj7 B

 https://paletadecolores.online/pt/vintage/
*/


Route::middleware('browserView')->group(function() {

  Route::get('/', [ColeAquiController::class, 'exibirPageHome'])->name('home');
  Route::post('/outroTom', [ConectAPIController::class, 'outroTom'])->name('outroTom');

});

Route::post('/changed_chords', [ConectAPIController::class, 'changed_chords'])->name('changed_chords');

