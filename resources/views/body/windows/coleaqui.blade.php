@extends('layouts/top')
@section('content')

<?php 
  $fator = (isset($fator)) ? $fator : 0 ; 
  $fatorAntigo = (isset($fatorAntigo)) ? $fatorAntigo : "0" ;
  $textoAntigoString = (isset($textoAntigoString)) ? $textoAntigoString : "!0!" ;
?>

<form action="{{ route('changed_chords') }}" method='POST'> 
  @csrf
  <div class="justify-content-center" >
    <label for="fator" class="form-label">Alterar: </label>
    <label class="form-label" id="lab_fator">0</label>
    <label for="fator" class="form-label"> semi-tons.</label>
  </div>
  
  <div>
    <input 
      type="range" 
      class="form-range" 
      value="{{ $fator }}" 
      id="fator" 
      min="-11" max="11" step="1" 
      onchange="slideValue(this.value)"  
      oninput="slideValue(this.value)"/> <!-- em tempo real mas, não comatível com IE -->
  </div>

  <div class='invisible'>
    <input name="fator" id="fator" value="{{ $fator }}" /> 
    <input name="fatorAntigo" id="fatorAntigo" value="{{ $fatorAntigo }}"/>
    <textarea name="textoAntigo" id="textoAntigo" rows="5" cols="60">{{ $textoAntigoString }}</textarea>
  </div>
    
  
  @if(isset($lines)) 
    @foreach($lines as $line) 
      <label id='lab_resultado' style="color:{{ ($line['cifer']) ? 'orange' : 'black' }}">{{ $line['content'] }}</label><br />
    @endforeach 
  @elseif($textoAntigoString == "!0!")
    <div>
      <label>Cole ou digite a música cifrada aqui:</label><br />
      <textarea name="textoNovo" id="textoNovo" rows="5" cols="60"></textarea>
    </div>
  @endif
  
</form>


@endsection