function horarioAtual() {

    let hora = new Date().toLocaleTimeString();
    document.getElementById('horaAtual').innerHTML=hora;
    // console.log(hora);
  }
  setInterval(horarioAtual, 1000);
