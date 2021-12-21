<?php
  include("cabecalho.php");
?>

<!~~~~~~~~~~~~~~~~~~~~ Slider ~~~~~~~~~~~~~~~~~~~~ !>
<!~ Me "inspirei" nesse video // https://www.youtube.com/watch?v=VYsVOamdB0g // ~!>

      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">

	
              <!~~~~~~~~~~~~~ Primeira imagem ~~~~~~~~~~~~~>
              <img src="imagens/banner0.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
			
              <!~~~~~~~~~~~~~ Segunda imagem ~~~~~~~~~~~~~>
            <div class="carousel-item">
              <img src="imagens/banner01.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1>Second slide label</h1>
                <p>Escreva alguma coisa aqui </p>
              </div>
            </div>
      
               <!~~~~~~~~~~~~~ Terceira imagem ~~~~~~~~~~~~~>
            <div class="carousel-item">
              <img src="imagens/banner02.jpg" class="d-block w-100"  alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1></h1>
                <p> O que te impede de voar?</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

<!~~~~~~~~~~~~~~~~~~~~ Opçoes ~~~~~~~~~~~~~~~~~~~~ !>

<!~~~~~~ Class do Oferecimento ~~~~~~~~!>
          <br>
              <div class="container "> 
                <div class="col text-center">
                <button class="btn btn-default " align="center-top">Oferecimento</button>
              </div>
            </div>
 
<! ~~~~~~~~~~~~~ Parte do Meio ~~~~~~~~~~~!>
<section class="meiodoinicio" id="meioinicio">
            <div class="container ">

            <div class="row"> <!~~~~ O row serve para envolver colunas ~~~~!>
               <!~~~~~~~~~~~~~ Cursos ~~~~~~~~~~~~~>
      <div class="col-md-6 col-lg-4">
              <div class="card mb-4 box-shadow mx-auto ">
                <img class="card-img-top" src="imagens/index/cursos.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Cursos</h3>
                  <p class="card-text"> Temos uma gama absurda de cursos a oferecer! </p>
                  <div class="d-flex justify-content-between align-items-center">
                  
                    <div class="btn-group">
               <a href="Cursos.php" button type="button" class="btn btn-sm btn-default btn-block" >Saber mais</button> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
<!~~~~~~~~~~~~~ Palestras ~~~~~~~~~~~~~>
		<div class="col-md-6 col-lg-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="imagens/index/palestras.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Palestras</h3>
                  <p class="card-text"> Temos uma gama absurda de cursos a oferecer! </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
               <a href="#" button type="button" class="btn btn-sm btn-default btn-block" >Saber mais</button> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<!~~~~~~~~~~~~~ Workshop ~~~~~~~~~~~~~>
<div class="col-md-6 col-lg-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="imagens/index/workshop.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Workshops</h3>
                  <p class="card-text"> Temos uma gama absurda de cursos a oferecer! </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
               <a href="#" button type="button" class="btn btn-sm btn-default btn-block" >Saber mais</button> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!~~~~~~~~~~~~~ Sobre nós ~~~~~~~~~~~~~>
<div class="col-md-6 col-lg-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="imagens/index/quem.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Sobre nós</h3>
                  <p class="card-text"> Saiba quem somos nós, nossas missoes, valores e objetivos que nos estimulam! </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
               <a href="quemsomos.php" button type="button" class="btn btn-sm btn-default btn-block" >Saber mais</button> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
<!~~~~~~~~~~~~~ Trabalhe Conosco ~~~~~~~~~~~~~>
<div class="col-md-6 col-lg-4">
              <div class="card mb-4 box-shadow ">
                <img class="card-img-top" src="imagens/index/trab.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Trabalhe Conosco</h3>
                  <p class="card-text"> Faça parte em um dos institutos mais completo e respeitado por todo o Brasil!</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
               <a href="#" button type="button" class="btn btn-sm btn-default btn-block" >Saber mais</button> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
            </div>
          </div>
        </div>

  </section>





<?php
  include("rodape.php");
?>