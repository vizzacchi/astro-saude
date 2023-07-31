<?php
  session_start();
  if(isset($_SESSION['idCidade'])){
    $id = $_SESSION['idCidade'];
    $cidade = $_SESSION['nomeCidade'];
  }else{
    $id = 0;
    $cidade = "Selecione uma Cidade...";
  }

    include "./inc/inc_coneccao.php"
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astro Saúde | Os Melhores Planos de Saúde</title>

    <!-- Search -->
    <meta name="googlebot" 	content="index, follow"/>
    <meta name="slurp" 		content="index, follow"/>
    <meta name="msnbot" 	content="index, follow"/>
    <meta name="robots" 	content="index, follow"/>
    <meta name="googlebot" 	content="noarchive"/>
    <meta name="slurp" 		content="noarchive"/>
    <meta name="msnbot" 	content="noarchive"/>
    <meta name="robots" 	content="noarchive"/>
    <meta name="googlebot" 	content="noodp"/>
    <meta name="slurp" 		content="noodp"/>
    <meta name="msnbot" 	content="noodp"/>
    <meta name="robots" 	content="noodp"/>

    <!-- META -->
    <meta name="author" content="Douglas Vizzacchi"/>
    <meta name="description" content="Aqui você encontra uma seleção das melhores operadoras de planos de saúde do estado de São Paulo, acesse, simule e compare." />
    <meta name="keywords" content="planos de saúde, planos de saúde individuais, planos de saúde empresariais, ameplan, amil, ana costa, ativia, biovida, bluemed. bradesco, garantia de saúde, hapvida, notredame intermédica, oeste saúde, pessoal saúde, santa casa de maúa, santa casa de são josé dos campos, santa helena saúde, são cristovão saúde, sulamérica, total medcare, unimed guarulhos, unimed jundiaí, unimed santos, unimed são josé dos campos, vera cruz" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Operadoras de Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:type" 			content="website">
    <meta property="og:description" 	content="Aqui você encontra as melhores operadoras de planos de saúde do estado de São Paulo, acesse, simule e compare.">
    <meta property="og:image" 			content="https://www.astrosaude.com.br/img/planos-de-saude-pilon.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styleSimulacao.css">

    <?php
        include "./inc/scripts.php";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  </head>
  <body>
  <header>
    <!------------------------------------------------------------------------
                                NAVBAR
    ------------------------------------------------------------------------------>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php"><img src="./img/logo-astro-saude.webp" class="img-logo" alt="Logo Astro Saúde" title="Logo Astro Saúde"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-douglas mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pag/cidade">Cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pag/perguntasERespostas/">Perguntas e Respostas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pag/simulacao/">Simulação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pag/sobre/">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!------------------------------------------------------------------------
                                Fim Navbar
    ------------------------------------------------------------------------------>

    <div class="container main-simulacao row">
      <div class="col-lg-6 col-md-6 col-sm-12">

      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 text-center">
          <a href="./pag/simulacao/" class="bt-simulacao clearfix" title="Faça uma Simulação Online Agora">
              <p><i class="bi bi-calculator"></i></p>
              SIMULAÇÃO ONLINE!
          </a>
          <a href="./pag/simulacao/" class="bt2-simulacao clearfix" title="Simulação Online">
              Faça a simulação online, compare valores na hora.
          </a>
      </div>
    </div><!-- .container -->

  </header>
  <!------------------------------------------------------------------------
                                Fim Header
  ------------------------------------------------------------------------------>
  <?php
  $qsqlCidades = "select DISTINCT CC.id_cidade, CC.cidade from tb_operadora as TE
                    JOIN tb_plano TP          	on TP.id_operadora      = TE.id
                    JOIN tb_tabela TT         	on TT.id_plano			= TP.id
                    JOIN tb_cidade_regiao TCR 	on TCR.id_regiao       	= TT.id_regiao
                    JOIN cepbr_cidade CC		    on CC.id_cidade		    = TCR.id_cidade
                  WHERE CC.uf = 'SP'
                  order by CC.cidade";
  ?>
  <section id="operadoras" class="container">
    <h1 class="title">Reunimos as principais operadoras de saúde do Estado de São Paulo</h1>
    <form>
      <label for="cboCidades" class="form-label">Veja as opções de planos da cidade de sua residência ou do seu CNPJ:</label>
      <?php
      if($resultCidades = mysqli_query($conn, $qsqlCidades)){ ?>
    <select id="cboCidades" name="cboCidades" onChange="window.location.href=this.value" class="form-select select js-example-basic-single">
        <option disabled<?php if($id==0) echo "selected";?>>Selecione uma cidade...</option>
        <?php
        while($regCidades = mysqli_fetch_assoc($resultCidades)){ ?>
          <option <?php if($id==$regCidades['id_cidade']) echo "selected";?> value="./pag/cidades/?id=<?php echo $regCidades['id_cidade'];?>&cidade=<?php echo $regCidades['cidade'];?>"><?php echo $regCidades['cidade'];?></option>
        <?php
        } ?>
    </select>
    <?php
   }
    ?>
    </form>
    <!-- Listagem das operadoras -->
    <?php
      $qsql = "SELECT DISTINCT TE.id, TE.slug, TE.id_situacao, TE.nome_abrev, TC.cobertura, TE.plano_individual, TE.plano_adesao, TE.plano_empresarial, TE.logo
                FROM tb_operadora as TE
                JOIN tb_cobertura TC on TC.id = TE.cobertura
                WHERE TE.tipo    = 1
                ORDER BY TE.nome_abrev asc";
      if($result = mysqli_query($conn, $qsql)){ ?>
          <div class="row justify-content-center">
          <?php
          while($reg=mysqli_fetch_array($result)){
            $id_operadora = $reg['id'];
            $nome_abrev = $reg['nome_abrev'];
            $cobertura = $reg['cobertura'];
            $plano_individual = $reg['plano_individual'];
            $plano_adesao = $reg['plano_adesao'];
            $plano_empresarial = $reg['plano_empresarial'];
            $logo = $reg['logo'];
            $id_situacao = $reg['id_situacao'];
            $slug = $reg['slug'];
        ?>

            <!--- CARD OPERADORA -->
            <div class="col-12 col-md-6 col-lg-3">
			<?php if($id_situacao==1){ ?>
              <a href="./pag/operadoras/<?php echo  $slug; ?>">
				  <?php } ?>
                  <div class="card my-3 mx-2" style="width: 16rem; height:24rem" >
                      <div class="d-flex justify-content-center align-items-center my-2">
                          <img class="img-fluid" src="./img/logos/<?php echo $logo;?>" alt="Logo <?php echo $nome_abrev;?>" title= "Logo <?php echo $nome_abrev;?>">
                      </div>

                      <ul class="m-2 my-4">
                          <?php echo "<li>Cobertura ".$cobertura."</li>"; ?>
                          <?php if($plano_individual==1) echo "<li>Planos individuais</li>";?>
                          <?php if($plano_adesao==1)echo "<li>Planos para profissionais liberais e estudantes</li>";?>
                          <?php if($plano_empresarial>=1)echo "<li>Planos empresariais a partir de ".$plano_empresarial." vidas</li>";?>
                      </ul>

                      <div class="btn-card">
                        <?php
                        if($id_situacao==1){ ?>
                          <p><a href="./pag/operadoras/<?php echo  $slug; ?>" class="">+INFORMAÇÕES</a> </br>
                        <?php
                        } ?>
                          <a href="./pag/simulacao" class="">COTAÇÃO ON-LINE</a></p>
                        </div>

                  </div>
              </a>
            </div>
          <?php
              } //while
          } //if
              ?>
          </div>
    </section>

    <section class="container">
      <div class="row my-5">
        <div class="col-12 col-md-6 text-center my-4">
          <a href="./pag/simulacao/" class="btn__botoes"><i
                  class="bi bi-calculator px-2"></i>Simulação Online</a>
        </div>
        <div class="col-12 col-md-6 text-center my-4">
          <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                  class="bi bi-whatsapp px-2"></i> Converse WhatsApp</a>
        </div>
      </div>
    </section>

    <footer class="rodape container-fluid p-2">
    	<div class="container contatos">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 ">
            	<div class="rd-title">
                  <h2>Central de atendimento</h2>
                  <span><a href="https://www.astrosaude.com.br">Astro Saúde</a></span>
              </div><!-- .rd-title -->
                  <div class="my-3">
                    <i class="bi bi-telephone"></i>Telefones:
                    <div class="d-flex flex-column justify-content-start align-items-start">
                      PABX: (12) 3307-5375<br />
                      <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow">WhatsApp: (12) 3307-5375 </a>
                    </div>
                  </div>
					        <div class="d-flex align-items-center my-3">
                    <i class="bi bi-envelope"></i>
                      <a href="mailto:comercial@astrosaude.com.br">E-mail: comercial@astrosaude.com.br</a><br />
                  </div>
                	<div class="d-flex align-items-center my-3" >
                    <i class="bi bi-chat"></i></i>
                    <a href="#" onclick="jivo_api.open();" rel="nofollow"> Chat Online</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a href="../politica_privacidade.pdf" title="Política de privacidade - Pilon Vida e Saúde" target="_blank"> Conheça nossa política de privacidade</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a href="../remocao.php" title="Remoção de dados" target="_blank"> Solicite remoção de dados pessoais.</a>
                  </div>
            </div><!-- contato -->

            <div class="col-lg-4 col-md-4 col-sm-12 mapa">
            	<div class="rd-title">
                    <h2>Localização</h2>
                    <span>Visite o nosso escritório comercial e tire suas dúvidas com nossos consultores.</span>
				      </div><!-- .rd-title -->
              <div class="local-map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.4007960680406!2d-45.88814968530901!3d-23.192059884867444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4a154915d207%3A0xf11b32196b25eff2!2sR.+Eucl%C3%ADdes+Miragaia%2C+660+-+Centro%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP%2C+12245-820!5e0!3m2!1spt-BR!2sbr!4v1558961312327!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div><!-- rodape-map -->
            <div class="col-lg-4 col-md-4 col-sm-12 forms">
                <div class="rd-title">
                    <h2>Mensagem Rápida</h2>
                    <span>Preencha o formulário abaixo e nossos consultores entrarão em contato.</span>
                </div><!-- .rd-title -->
                <form action="./envia-form.php" method="post">
                	<input name="nome" type="text" placeholder="Nome" class="form-control my-2">
                  <input name="email" type="text" placeholder="E-mail" class="form-control my-2" >
                  <input name="telefone" type="text" placeholder="Telefone" class="form-control my-2">
                  <textarea name="mensagem" cols="" rows="4" placeholder="Mensagem" class="form-control my-2"></textarea>
                  <input class="form-control btn btn-primary my-2" name="submit" type="submit" value=" ENVIAR MENSAGEM ">
                </form>
            </div><!-- contato-forms -->
          </div>
		</div><!-- contatos -->

    <div class="rodape-direitos">
        <div class="container-fluid text-center p-1">
            <p>© 2023 Todos os direitos reservados Astro Saúde</p>
        </div>
    </div>

   </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./js/jsGeral.js">

    </script>
  </body>
</html>
