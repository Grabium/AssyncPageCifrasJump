

function intervalo(operacao){ //recebe "+" ou "-".
  event.preventDefault();  //previne recarregamento de página.
  var st = document.getElementById("fator").value; //captura valor atual de fator
  st = parseInt(st); //converte a inteiro.
  if((st>-11)&&(operacao == "-")){ //diminui o valor. limite de -11.
    st = st - 1;
  }else if((st<11)&&(operacao == "+")){ //aumenta o valor. limite de 11.
    st = st + 1;
  }
  document.getElementById("fator").value = st;  //atribui o valor calculado a id="fator"
  document.getElementById("lab_fator").innerHTML = document.getElementById("fator").value; //resolvi exivbir o valor numa label, por estética, e deixar o imput com display:none; no CSS.
}

function slideValue(val){
  document.getElementById("fator").value = val;  //atribui o valor calculado a id="fator"
  document.getElementById("lab_fator").innerHTML = document.getElementById("fator").value;
}