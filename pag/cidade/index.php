<?php
  if(isset($_GET['id']) && isset($_GET['cidade'])){
    $id = $_GET['id'];
    $cidade = $_GET['cidade'];
    if (!isset($_SESSION)){
      session_start();
      $_SESSION['idCidade'] = $id;
      $_SESSION['nomeCidade'] = $cidade;
    }else{
      $_SESSION['idCidade'] = $id;
      $_SESSION['nomeCidade'] = $cidade;
    }
  } else{
    session_start();
    $id = 0;
    $regiao_geografica = 0;
  }
  include "../../inc/inc_coneccao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Planos de Saúde | Planos de Saúde para todas as regiões do estado de São Paulo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

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
    <meta name="author" 		content="Douglas Vizzacchi"/>
    <meta name="description"  	content="Os melhores planos de saúde do estado de São Paulo." />
    <meta name="keywords" 		content="Planos de Saúde, planos de saúde estado de São Paulo" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Os melhores planos de saúde do estado de São Paulo">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Planos de Saúde para todas as regiões do estado de São Paulo.">
    <meta property="og:image" 			content="https://www.astrosaude.com.br/img/planos-de-saude-pilon.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

	<!-- CSS -->
  <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/styleSimulacao.css">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <?php
        include "../../inc/scripts.php";
    ?>
</head>
<body>
<header>
    <!------------------------------------------------------------------------
                                NAVBAR
    ------------------------------------------------------------------------------>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php"><img src="../../img/logo-astro-saude.webp" class="img-logo" alt="Logo Astro Saúde" title="Logo Astro Saúde"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-douglas mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../../index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../perguntasERespostas/">Perguntas e Respostas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../simulacao/">Simulação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../sobre/">Sobre</a>
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
          <a href="../simulacao/" class="bt-simulacao clearfix" title="Faça uma Simulação Online Agora">
              <p><i class="bi bi-calculator"></i></p>
              SIMULAÇÃO ONLINE!
          </a>
          <a href="../simulacao/" class="bt2-simulacao clearfix" title="Simulação Online">
              Faça a simulação online, compare valores na hora.
          </a>
      </div>
    </div><!-- .container -->

  </header>

  <!------------------------------------------------------------------------
                                Fim Header
  ------------------------------------------------------------------------------>
  <!--------------- Breadcumb ---------------->
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="m-5">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../../">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cidades</li>
    </ol>
  </nav>

    <section class="container main-home">
		<div class="clear">
    <h1 class="title">Opção em Planos de Saúde para todas regiões do estado de São Paulo</h1>
    <p class="text-center">Selecione uma cidade e veja as opções de planos de saúde disponíveis:</p>

    <!-- Listagem das Cidades -->
    <?php
        $qsqlCidades = "select DISTINCT CC.id_cidade, CC.cidade from tb_operadora as TE
                          JOIN tb_plano TP          	on TP.id_operadora  = TE.id
                          JOIN tb_tabela TT         	on TT.id_plano			= TP.id
                          JOIN tb_cidade_regiao TCR 	on TCR.id_regiao   	= TT.id_regiao
                          JOIN cepbr_cidade CC		    on CC.id_cidade		  = TCR.id_cidade
                        WHERE CC.uf = 'SP'
                        order by CC.cidade";
    ?>
          <form>
          <!--<label for="cboCidades" class="form-label">Veja as opções de planos da cidade de sua residência ou do seu CNPJ:</label> -->
          <?php
          if($resultCidades = mysqli_query($conn, $qsqlCidades)){ ?>
        <select id="cboCidades" name="cboCidades" onChange="window.location.href=this.value" class="form-select select js-example-basic-single">
            <option disabled<?php if($id==0) echo "selected";?>>Selecione uma cidade...</option>
            <?php
            while($regCidades = mysqli_fetch_assoc($resultCidades)){ ?>
              <option <?php if($id==$regCidades['id_cidade']) echo "selected";?> value="../cidades/?id=<?php echo $regCidades['id_cidade'];?>&cidade=<?php echo $regCidades['cidade'];?>"><?php echo $regCidades['cidade'];?></option>
            <?php
            } ?>
        </select>
        <?php
       }
        ?>
        </form>
        <?php
        $qsql = "Select DISTINCT TG.*, TR.regiao_geografica, TG.cidade from cepbr_cidade as TG
                  INNER JOIN tb_cidade_regiao TC on TC.id_cidade = TG.id_cidade
                  INNER JOIN tb_regiao_geografica TR on TR.id = TG.id_regiao_geografica
                  INNER JOIN tb_tabela TT on TT.id_regiao = TC.id_regiao
                  INNER JOIN tb_plano TP on TP.id = TT.id_plano
                where TP.id_operadora <> 9 AND
                      TP.id_operadora <> 26 And
                      TP.id_operadora <> 4 And
                      TT.id_situacao = 1
                Order by TG.id_regiao_geografica, TG.cidade ASC";

        if($result = mysqli_query($conn, $qsql)){
          $regiao_geografica = ""; ?>
            <div class="row justify-content-center">
              <?php
            while($reg=mysqli_fetch_array($result)){
                $id_cidade = $reg['id_cidade'];
                $cidade = $reg['cidade'];

                if($regiao_geografica != $reg['regiao_geografica'] || $regiao_geografica == ""){
                  if($regiao_geografica == ""){
                    $regiao_geografica = $reg['regiao_geografica'];
                    echo "<div class='col-lg-4 col-md-6 col-12'>";
                    echo "<h2 class='title'>$regiao_geografica</h2>";
                    echo "<ul>";
                    echo "<li><a href='../cidades/?id=$id_cidade&cidade=$cidade'>Plano para $cidade</a></li>";
                  }else{
                    $regiao_geografica = $reg['regiao_geografica'];
                    echo "</div><div class='col-lg-4 col-md-6 col-12'>";
                    echo "<h2 class='title'>$regiao_geografica</h2>";
                    echo "</ul><ul>";
                    echo "<li><a href='../cidades/?id=$id_cidade&cidade=$cidade'>Planos para $cidade</a></li>";
                  }
                }else{
                  echo "<li><a href='../cidades/?id=$id_cidade&cidade=$cidade'>Planos para $cidade</a></li>";
                }

            }
            echo "</ul>";

            echo "</div></div>";
          }
        ?>

    </div>
    </section><!-- .container -->


    <section class="container">
      <div class="row my-5">
        <div class="col-12 col-md-6 text-center my-4">
          <a href="../simulacao/" class="btn__botoes"><i
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
                    <a href="../../politica_privacidade.pdf" title="Política de privacidade - Pilon Vida e Saúde" target="_blank"> Conheça nossa política de privacidade</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a href="../../remocao.php" title="Remoção de dados" target="_blank"> Solicite remoção de dados pessoais.</a>
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
    <script src="../../js/jsGeral.js"></script>
</body>
</html>




