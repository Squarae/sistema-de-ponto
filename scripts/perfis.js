(function() {
  var updateButton = document.getElementById('edit-btn');
  var cancelButton = document.getElementById('cancel');
  var msgAviso = document.getElementById('msgAviso');

  // O botão Update abre uma Dialog
  updateButton.addEventListener('click', function() {
    msgAviso.showModal();
  });

  // O botão cancelButtom fecha uma Dialog
  cancelButton.addEventListener('click', function() {
    msgAviso.close();
  });
})();


window.onclick = function () {
    Dragable(document.getElementById("foo"));
};

//Adiciona eventos pra navegadores modernos e antigos
function addEvent(el, type, callback)
{
    if (el.addEventListener) {
       el.addEventListener(type, callback);
    } else if (el.attachEvent) {
       el.attachEvent("on" + type, callback);
    }
}

function Dragable(el)
{
    var isMove = false, //Verifica se esta se movendo
        x = 0, y = 0, //Pega as coordenadas do mouse
        xel = 0, yel = 0; // ultima posição do elemento

    addEvent(el, "mousedown", function (e) {
        isMove = true;

        el.className += " isMoving";

        x = window.event ? window.event.clientX : e.pageX;
        y = window.event ? window.event.clientY : e.pageY;

        xel = x - el.offsetLeft;
        yel = y - el.offsetTop;
    });

    addEvent(document, "mousemove", function (e) {
        if (isMove) {
            e.preventDefault();

            x = window.event ? window.event.clientX : e.pageX;
            y = window.event ? window.event.clientY : e.pageY;

            el.style.left = (x - xel) + 'px';
            el.style.top  = (y - yel) + 'px';
        }
    });

    addEvent(document, "mouseup", function () {
        el.className = String(el.className).replace(/(^|\s)isMoving(\s|$)/g, " ");
        isMove = false;
    });
};



var controleNovoCad = 1;
function novoCad(){
  document.getElementById('newPerfil').insertAdjacentHTML('beforeend','<tr id="novoCadastro('+controleNovoCad+')" name="novoCadastro('+controleNovoCad+')"><th scope="row"class="lead">Nº: '+controleNovoCad+'</th><td colspan="1"><input type="text" id="nome('+controleNovoCad+')" name="nome('+controleNovoCad+')" class="form-control" placeholder="Lorem ipsum dolor sit amet."></td><td colspan="1"></td><td colspan="1"><input type="time"  id="horaEntrada('+controleNovoCad+')" name="horaEntrada('+controleNovoCad+')" class="form-control"></td><td colspan="1"><input type="time" id="horaSaida('+controleNovoCad+')" name="horaSaida('+controleNovoCad+')" class="form-control"></td><td colspan="1"><input type="time" id="horaRetorno('+controleNovoCad+')" name="horaRetorno('+controleNovoCad+')" class="form-control"></td><td colspan="1"><button type="button" id="abrirPerfil" name="abrirPerfil" class="btn btn-danger"  onclick="removeNovoCad('+controleNovoCad+');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg></button></td><td colspan="1"><button type="submit" id="confirmCad" name="confirmCad" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/></svg></button></td></tr>');
  controleNovoCad++
  document.getElementById('qnt_Cad').value = controleNovoCad;
}

function removeNovoCad(idCad){
  document.getElementById('novoCadastro('+idCad+')').remove();
}

function janelaFlutuante(){
  document.getElementById('newJanelaInfo').insertAdjacentHTML('afterbegin', '<div id="janelaInfo('+controleNovoCad+')" name="janelaInfo('+controleNovoCad+')"><div id="foo" class="border border-dark janelaFlutuante-outbox"><table><thead><th><div id="fecharJanelaInfo('+controleNovoCad+')" name="fecharJanelaInfo('+controleNovoCad+')" class="x-fechar" onclick="removeJanelaFlutuante('+controleNovoCad+')"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/></svg></div></th><th><div class="lead">Informações</div></th></thead></table><hr><table><thead></thead><tbody class="perfil-flutuante"><tr id="perfilNome('+controleNovoCad+')" name="perfilNome('+controleNovoCad+')"><th scope="row" class="h5">Lorem ipsum dolor sit amet.</th></tr><tr id="perfilEntrada('+controleNovoCad+')" name="perfilEntrada('+controleNovoCad+')"><td colspan="1">Entrada:</td></tr><tr id="perfilSaida('+controleNovoCad+')" name="perfilSaida('+controleNovoCad+')"><td colspan="1">Saída:</td><tr><tr id="perfilRetorno('+controleNovoCad+')" name="perfilRetorno('+controleNovoCad+')"><td colspan="1">Retorno:</td></tr><tr id="perfilTipo('+controleNovoCad+')" name="perfilTipo('+controleNovoCad+')"><td colspan="1">Tipo:</td></tr></tbody></table></div></div>');
  document.getElementById('qnt_janelaFlutante').value = controleNovoCad;
}

function removeJanelaFlutuante(idCampo){
  document.getElementById('janelaInfo('+idCampo+')').remove();
  controleNovoCad--;
}

function removeTodasJanelasFlutuantes(idCampo){  
  while(controleNovoCad > 0){
  document.getElementById('janelaInfo('+idCampo+')').remove();
  controleNovoCad--;
  }
}

const controleJanelaDeEdição = 0;
function janelaEdit(){
  document.getElementById('').getElementById('', '<div id="editInfo('+controleJanelaDeEdição+')" name="editInfo('+controleJanelaDeEdição+')" class="editInfo-box border border-secondary"><form method="POST" action=""><p class="lead">Editar informações</p><label for="NomePerfil">Nome:</label><input type="text" id="nome('+controleJanelaDeEdição+')" name="nome('+controleJanelaDeEdição+')" class="form-control"><label for="Entrada">Horario de Entrada:</label><input type="time" id="horaEntrada('+controleJanelaDeEdição+')" name="horaEntrada('+controleJanelaDeEdição+')" class="form-control"><label for="Saida">Horario de Saida:</label><input type="time" id="horaSaida('+controleJanelaDeEdição+')" name="horaSaida('+controleJanelaDeEdição+')" class="form-control"><label for="Retorno">Horario de Retorno:</label><input type="time" id="horaRetorno('+controleJanelaDeEdição+')" name="horaRetorno('+controleJanelaDeEdição+')" class="form-control"><label for="Tipo">Tipo:</label><input type="text" id="tipo('+controleJanelaDeEdição+')" name="tipo('+controleJanelaDeEdição+')" class="form-control"><hr><table><thead><tr><th><input type="submit" id="cancel('+controleJanelaDeEdição+')" name="cancel('+controleJanelaDeEdição+')" class="btn btn-success" value="Submeter"></th><th><input type="button" onclick="removejanelaDeEdição('+controleJanelaDeEdição+');" class="btn btn-success" value="Voltar"></th><th><input type="reset" id="limpar('+controleJanelaDeEdição+')" name="limpar('+controleJanelaDeEdição+')" class="btn btn-warning" value="Resetar"></th><tr></thead></table></form></div>');
  controleJanelaDeEdição++;
}



  // const perfil = document.getElementById('perfil');

  // perfil.addEventListener("mouseover", function(){
  //     this.innerHTML="<div>Perfil</div>";
  //   },false);
  //   perfil.addEventListener("mouseleave", function(){
  //     this.innerHTML="";
  //   },false);
  
  // perfil.addEventListener("mouseover", function(event) {
      // highlight the mouseover target
      // event.target.document.createElement("p");
  
      // reset the color after a short delay
    //   setTimeout(function() {
    //     event.target.innerHTML= "Lorem ipsum dolor sit amet.";    
    //   }, 1000);
    // }, false);