@extends('layouts/top')
@section('content')

<?php $fator = 0; ?>

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
  </div>
  <div>

    <textarea id="texto" name="texto" rows="5" cols="33">
Cole ou Escreva a música cifrada aqui.
    </textarea>
    
  </div>
</form>


@endsection