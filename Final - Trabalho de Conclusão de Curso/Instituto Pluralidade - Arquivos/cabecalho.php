<!Doctype html>
<html lang=”pt-br”> 
<head>
<meta charset="UTF-8">
<Title> Instituto Pluralidade </title>

<!~~~~~~~~~~~~~~~~~~~~ Icone do Site ~~~~~~~~~~~~~~~~~~~!>
<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />

<!~~~~~~~~~~~~~~~~~~~~ Linkando no Bootstrap ~~~~~~~~~~~~~~~~~~~~!>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/freelancer.min.css" rel="stylesheet">
<!~~~~~~~~~~ JS, Popper.js and Query ~~~~~~~~~~~~~/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!~~~~~~~~~~~~~~~~~~~~~~~~~~ Linkando no Css ~~~~~~~~~~~~~~~~~~~~~~~~!>
<link rel="stylesheet" type="text/css" href="estilo.css"/>

<!~~~~~~~ Essa parte percente ao Todos os Cursos ~~~~~~~!>
<link rel="stylesheet" type="text/css" href="estilocursos.css"/>

<!~~~~~~~ Essa parte percente ao Quem Somos ~~~~~~~!>
<link rel="stylesheet" type="text/css" href="estiloquemsomos.css"/>
  <link rel="stylesheet" href="css/simple-line-icons.css">

<!~~~~~~~ Essa parte percente ao Login/Cadastro ~~~~~~~!>
<link rel="stylesheet" type="text/css" href="cd.css"/>



<!~~~~~~~~~~~~~~~~~~~~~ Linkando no Javascript ~~~~~~~~~~~~~~~~!>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!~~~~~~~~~~~~~~~~~~~~ Linkando no google fonts ~~~~~~~~~~~~~~~~~~~~!>
<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

<!~~~~~~~~~~~~~~~~~~~~ Onde pegar os Icons do Quem somos~~~~~~~~~~~~~~~~~~~!>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


</head>

<!~~~~~~~~~~~~~~~~~~~~ [Botão acessibilidade - Baixa Visão 1/2] Mencionado no Javascript ~~~~~~~~~~~~~~~~~~~~!>
<script>
  //https://www.youtube.com/watch?v=rvjVMk-1T60 site q mostra como fazer 
  function tamanho(a){
    var elemento = document.getElementById("teste2");
    var atual = elemento.style.fontSize;
    if(a == 's'){
      atual = parseInt(atual)+10+'px';
    }else{
      atual = parseInt(atual)+(-10)+'px';
    }
    elemento.style.fontSize=atual;
  }
</script>

<body>
<!~~~~~~~~~~~~~~~~~~~~ [Botão acessibilidade - Baixa Visão 2/2] Mencionado no Html ~~~~~~~~~~~~~~~~~~~~!>
  <div >
    <button onclick="tamanho('s');">A+</button>
    <button onclick="tamanho('d');">A-</button>
  </div>
    <div id="teste2"  style="font-size:15px;">


<!~~~~~~~~~~~~~~~~~~~~ [Botão acessibilidade - Surdos 1/1] ~~~~~~~~~~~~~~~~~~~~!>
<div class="imgsurdo ">
  <img src="imagens/iconsurdo.png" width="60" height="60" class="rounded float-right" alt="...">
</div>


<!~~~~~~~~~~~~~~~~~ Navegamento/Menu ~~~~~~~~~~~~~~~~~!>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
          <img src="imagens/logo.png" width="40" class="img-responsive" alt="Responsive image">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link disabled" href="#">&nbsp;Instituto Pluralidade</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> Inicio <span class="sr-only">(página atual)</span></a>
      </li> <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cursos
        </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="tecnologia.php">Tecnologia</a>
              <a class="dropdown-item" href="musica.php">Musica</a>
              <a class="dropdown-item" href="libras.php">Libras</a>
              <a class="dropdown-item" href="braile.php">Braille</a>
              <a class="dropdown-item" href="administracao.php">Administração/Gestão</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="cursos.php">Todos os Cursos</a>
            </div>
      </li>

          <li class="nav-item active">
              <a class="nav-link" href="quemsomos.php"> Sobre nós<span class="sr-only">(página atual)</span></a>
      </li>
          <li class="nav-item active  space-right">



<!~~~~~~~~~~~~~~~~~ ? ~~~~~~~~~~~~~~~~~!>
		<?php 
			if(isset($_COOKIE['masterdaweb'])){
				?>
				<a class="nav-link" href="relogar.php"> Sair <span class="sr-only">(página atual)</span></a>
				<?php
				
			}else{
		?>
        <a class="nav-link" href="cd.php"> Login/Cadastro <span class="sr-only">(página atual)</span></a>
		<?php
			}
			?>
      </li>

<!~~~~~~~~~~~~~~~~~ Navegamento/Menu - [Barra de Pesquisa] ~~~~~~~~~~~~~~~~~!>
    </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
      <button class="btn btn btn-default my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>



