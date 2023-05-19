<nav class="navbar main-navigation">
  <div class="container menu-container">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://www.astrosaude.com.br"><img src="<?php echo $server.$url.'/img/logo-astro-saude.webp'?>" class="logo" alt="Logo Astro Saúde" title="Logo Astro Saúde"/></a>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#PilonNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse menu" id="PilonNavbar">
      <ul class="nav navbar-nav">
        <li><a href="https://www.astrosaude.com.br">Início</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Operadoras e Seguradoras<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $server.$url.'/pag/operadoras/amil';?>">Amil</a></li>
            <li><a href="<?php echo $server.$url.'/pag/operadoras/ativia-saude';?>">Ativia</a></li>
            <li><a href="<?php echo $server.$url.'/pag/operadoras/bradesco-saude';?>">	Bradesco</a></li>
            <li><a href="<?php echo $server.$url.'/pag/operadoras/hapvida';?>">Hapvida</a></li>
            <li><a href="<?php echo $server.$url.'/pag/operadoras/plano-santa-casa-saude';?>">Plano Santa Casa Saúde</a></li>
            <li><a href="<?php echo $server.$url.'/pag/operadoras/porto-saude';?>">Porto Saúde</a></li>
            <li><a href="<?php echo $server.$url.'/pag/operadoras/sulamerica-saude';?>">Sulamérica Saúde</a></li>
			      <li><a href="<?php echo $server.$url.'/pag/operadoras/unimed-sao-jose-dos-campos';?>">	Unimed S. José Campos</a></li>
		      </ul>
        </li>
        <li><a href="<?php echo $server.$url.'/pag/perguntas-e-respostas';?>">Perguntas e Respostas</a></li>
        <li><a href="<?php echo $server.$url.'/pag/simulacao';?>">Simulação</a></li>
        <li><a href="<?php echo $server.$url.'/pag/astro-saude';?>">Sobre</a></li>
      </ul>
    </div>
  </div><!-- .container -->
</nav>
