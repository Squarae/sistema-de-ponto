<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link rel="icon" href="imagens/209-2090954_transparent-finger-print-vector-png-download-fingerprint-icon.png">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body class="bg-body-secondary">
  <a name="topo">
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary nav-bar-gradient">
        <div class="container-fluid">
        <p class="display-6 painel-titulo">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-fingerprint" viewBox="0 0 16 16">
  <path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z"/>
  <path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115V7Zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z"/>
  <path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z"/>
  <path d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z"/>
  <path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49Z"/>
</svg> Painel de controle</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-opcoes">
              <li class="nav-item"> 
              <li class="navbar-entrar"><a class="dropdown-item" href="index.php">Entrar no sistema</a></li>
              </li>
              <li class="nav-item"> 
              <li class="navbar-sair"><a class="dropdown-item" href="logout.php">Sair do sistema</a></li>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Entrar/Sair
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.php">Entrar no sistema</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">Sair do sistema</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
  <input type="hidden" name="qnt_janelaFlutante" id="qnt_janelaFlutante">
  <input type="hidden" name="qnt_Cad" id="qnt_Cad">
      <div class="container-fluid w-auto p-3 bg-dark-subtle">
        <div class="relogio">
        <p class="display-6">Hora atual</p>
      <div class="display-4" id="horaAtual" name="horaAtual" onload="horarioAtual();">
      </div>
  </div>
  </div>
  <form method="POST" action="">
            <div class="pesquisa-box border border-secondary">
            <div>
            <p class="lead">Pesquisar por . . .</p>
            <div>
            <input id="nomeBusca" name="nomeBusca" class="form-control me-1" type="search" placeholder="Insira um nome . . ." aria-label="Search">
            </div>
            <div class="form-check">
            <input id="faltanteBusca" name="faltanteBusca" class="form-check-input" type="checkbox" value="Faltantes">
            <label class="form-check-label" for="flexCheckDefault">
                Faltantes
            </label>
            </div>
            <div class="form-check">
            <input id="presenteBusca" name="presenteBusca" class="form-check-input" type="checkbox" value="Presentes">
            <label class="form-check-label" for="flexCheckChecked">
                Presentes
            </label>
            </div>
            <div class="form-check">
            <input id="aguardoBusca" name="aguardoBusca" class="form-check-input" type="checkbox" value="Aguardo">
            <label class="form-check-label" for="flexCheckChecked">
                No aguardo
            </label>
            </div>
            <button type="button" id="busca-btn" name="busca-btn" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg> Pesquisar</button>
        <button type="button" id="cad-btn" name="cad-btn" class="btn btn-primary" onclick="novoCad();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg> Cadastrar</button>
        <hr>
        <a href="painel-de-controle.php#topo" class="arrow-up" title="Voltar ao topo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
        </svg></a>
  </div>
</div>
  </form>
  <form method="POST" action="">
  <div class="select-tbl-box border border-secondary">
    <div>
  <p class="lead">Selecionar por . . .</p>
  <table>
<th>
  <select id="selecionaTabl" name="selecionaTabl" class="form-select selcTbl" aria-label="Default select example">
  <option value="1">Estudantes</option>
  <option value="2">Funcionários</option>
  <option value="3">Visitantes</option>
</select>
</th>
<th>
<input type="submit" id="selecTbl" name="selecTbl" class="btn btn-success selcTbl" value="Selecionar" title="Selecionar tabela">
</th>
</table>
</div>
  </div>
</form>
  <div id="newJanelaInfo" name="newJanelaInfo">
  </div>
<dialog id="dialogEditInfo" >
  <form method="POST" action="">
<div>
<div id="newEditInfo" name="newEditInfo">
</div>
  <hr>
  <input type="submit" id="submitEditInfo" name="submitEditInfo" class="btn btn-success" value="Confirmar" title="Confirmar edição">
  <input type="reset" id="cancel" name="cancel" class="btn btn-danger" value="Cancelar" title="Cancelar edição">
</div>
</form>
</dialog>
        <div class="table-responsive bg-secondary-subtle tbl">
    <table class="table table-striped table-hover border border-secondary">
  <thead>
    <tr>
      <th scope="col"><button type="button" id="adicionaCad-btn" name="adicionaCad-btn" class="btn btn-primary" onclick="novoCad();" title="Novo cadastro"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></button></th>
      <th scope="col" class="h4 text-center">Estudantes</th>
      <th scope="col" class="h4 text-center">|</th>
      <th scope="col" class="h4 text-center">Horário de entrada</th>
      <th scope="col" class="h4 text-center">Horário de saída</th>
      <th scope="col" class="h4 text-center">Horário de retorno</th>
      <!-- <th scope="col" class="h4 text-center">Biometria</th> -->
      <th scope="col" class="h4 text-center"></th>
      <th scope="col" class="h4 text-center"></th>
    </tr>
  </thead>
  <tbody id="newPerfil" name="newPerfil">
    <tr class="perfil-tbl">
      <th scope="row" id="numId" name="numId" class="lead">Nº: 1</th>
      <td colspan="1" id="nome" name="nome">Lorem ipsum dolor sit amet.</td>
      <td colspan="1"></td>
      <td colspan="1" id="horaEntrada" name="horaEntrada">00:00:00.</td>
      <td colspan="1" id="horaSaida" name="horaSaida">00:00:00.</td>
      <td colspan="1" id="horaRetorno" name="horaRetorno">00:00:00.</td>
      <td colspan="1"><button type="button" id="abrirPerfil" name="abrirPerfil" class="btn btn-info"  onclick="janelaFlutuante();" title="Abrir janela flutuante"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-stack" viewBox="0 0 16 16">
  <path d="M4.5 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM6 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
  <path d="M12 1a2 2 0 0 1 2 2 2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2 2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10ZM2 12V5a2 2 0 0 1 2-2h9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1Zm1-4v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V8H3Zm12-1V5a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2h12Z"/>
</svg></button></td>
<td colspan="1"><button type="button" id="edit-btn" name="edit-btn" class="btn btn-warning" onclick="janelaEdit();" title="Editar informações"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></button></td>
  </tr>
  </tbody>
</table>
</div>  
    </main>
    <footer>
    <div class="text-center text-light bg-black">
<span class="lead">
Sistema de ponto eletrônico | Desenvolvendo em parceria com a instituição acadêmica Estácio de Sá.
</span>
</div>
    </footer>
    <script src="scripts/main.js" type="text/javascript"></script>
    <script src="scripts/perfis.js" type="text/javascript"></script>
</body>
</html>