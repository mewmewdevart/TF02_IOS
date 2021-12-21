<?php
	include("cabecalho.php");
	include("cadastro.php");
?>
<br><br><br>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action=""> 
          <h6>Login</h6> 
          <p> 
            <label for="email_login">E-mail</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="ex. pikachu@rosa.com"/>
          </p>
           
          <p> 
            <label for="senha_login">Senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Entrar" /> 
          </p>
           
          <p class="link">
            Ainda nao tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="cadastro.php" id="corpo">
          <h6>Cadastro</h6> 
           
          <p> 
            <label class="nome">Nome</label>
            <input class="nome" id="nome" name="nome" required="required" type="text" placeholder="ex. Pikachu" />
          </p>
		  
		  <p> 
            <label class="sobrenome">Sobrenome</label>
            <input class="sobrenome" id="sobrenome" name="sobrenome" required="required" type="text" placeholder="ex. Rosa"/>
          </p>
           
          <p> 
            <label class="email">E-mail</label>
            <input class="email" id="email" name="email" required="required" type="email" placeholder="ex. pikachu@rosa.com"/> 
          </p>
           
          <p> 
            <label class="endereco">Endereço</label>
            <input class="endereco" id="endereco" name="endereco" required="required" type="text" placeholder="ex. Rua Palet"/>
          </p>
		  
		  <p> 
            <label class="cpf">CPF</label>
            <input class="cpf" id="cpf" name="cpf" required="required" type="number" placeholder="ex. 000.000.000-00"/>
          </p>
		  <p> 
            <label class="senha">Senha</label>
            <input class="senha" id="senha" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>
		  <p> 
            <label class="senha">Confirmar senha</label>
            <input class="senha" id="senha" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	include("rodape.php");
?>