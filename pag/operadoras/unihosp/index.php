<?php
   include "../../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | UniHosp Saúde</title>
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
    <meta name="description"  	content="Unihosp, uma linha completa de planos de saúde com a melhor relação custo benefício." />
    <meta name="keywords" 		content="Unihosp, planos de saúde unihosp, convênio médico unihosp, convênio unihosp, planos unihosp" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | UniHosp Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Unihosp, uma linha completa de planos de saúde com a melhor relação custo benefício.">
    <meta property="og:image" 			content="https://www.astrosaude.com.br/img/planos-de-saude-pilon.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

    <!-- CSS -->
    <link rel="shortcut icon" href="../../../img/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <?php
        include("../../../inc/scripts.php");
    ?>
</head>
<body>
<header>
    <!------------------------------------------------------------------------
                                NAVBAR
    ------------------------------------------------------------------------------>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../../index.php"><img src="../../../img/logo-astro-saude.webp" class="img-logo" alt="Logo Astro Saúde" title="Logo Astro Saúde"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-douglas mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../../../index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../cidade">Cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../perguntasERespostas/">Perguntas e Respostas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../simulacao/">Simulação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../sobre/">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!------------------------------------------------------------------------
                                Fim Navbar
    ------------------------------------------------------------------------------>

  </header>
  <!------------------------------------------------------------------------
                                Fim Header
  ------------------------------------------------------------------------------>
    <p>&nbsp;</p>
    <section class="container main-home">
      <!--------------- Breadcumb ---------------->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="m-5">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="link_operadoras" href="../../../">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Unihosp Saúde</li>
            </ol>
        </nav>

		  <div class="clear">
            <h1 class="title">Unihosp Saúde<br>
                <span class="h2">Uma linha completa de planos de saúde com a melhor relação entre custo e benefício.</span></h1>
            <!-- Listagem das operadoras -->
            <div class="row m-5">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-2">
                <img src="../../../img/logos/unihosp.webp" alt="Logo Unihosp" title="Logo Unihosp">
            </div>
            <div class="col-12 col-md-6">
                <p>A <strong>Unihosp</strong> é uma operadora de planos de saúde fundada em 1996 e localizada no estado de São Paulo. A <strong>Unihosp</strong> possui uma linha completa de planos de saúde, com melhor custo-benefício do mercado, consolidada em tradição e credibilidade. Dispõe de vasta rede credenciada de clínicas, laboratórios, hospitais e centros médicos, todos modernos e prontos para atender os beneficiários com excelência.</p>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-12 col-md-6">
                <h2 class="subtitle">Diferenciais dos Planos UniHosp</h2>
                <ul class="mx-1">
                  <li>Vivaz – programa de proteção à saúde: acolhimento e monitoramento da saúde dos beneficiários.</li>
                  <li>Teleorientação em saúde.</li>
                  <li>Troque sua receita: para renovar uma receita de medicação de uso contínuo, sem sair de casa, por meio de um e-mail exclusivo para esse diferencial.</li>
                  <li>Rastreio Cognitivo: junção de testes e escalas reconhecidas pelos órgãos de saúde, que avaliam o funcionamento cognitivo do adulto e do idoso, com o objetivo de ser um facilitador na investigação, no diagnóstico e no tratamento de quadros demenciais como o Alzheimer e Ansiedade Generalizada.</li>
                  <li>DH Care: núcleo responsável pelo monitoramento e acompanhamento de beneficiários a partir de 45 anos, diagnosticados com diabetes e/ou hipertensão.</li>
                  <li>Onco Care: equipe responsável por monitorar e acompanhar beneficiários no processo de transição entre o diagnóstico oncológico e o tratamento terapêutico estabelecido pelo médico de referência. Pacientes oncológicos e seus familiares são assistidos por essa equipe com o propósito de desenvolver qualidade de vida e bem-estar aos pacientes e a diminuição dos efeitos colaterais biopsicossociais.</li>
                  <li>Prev Quedas: monitora e acompanha beneficiários com 45 anos ou mais, com quadro de quedas e/ou diagnósticos indicativos para a ocorrência de quedas, como: amputações, osteoporose, cirurgias de artroplastias joelho, quadril e tornozelo.</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div class="header--img">
                    <img src="../../../img/diferenciais.jpeg" alt="Diferenciais do Plano de Saúde" title="Diferenciais do Plano de Saúde" class="img-fluid img-diferenciais">
                </div>
            </div>
        </div>
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
        <hr>
        <!--- Listar Hospitais que atendem o plano -->
        <div class="operadoras">
            <div>
        <?php
            $qsqlHospitais = "SELECT DISTINCT TE.id, TE.slug, TE.nome_abrev, TE.numero, TE.complemento, TE.telefone,
                                              TC.cep, TC.tipo_logradouro, TC.logradouro,TB.bairro, TD.cidade
                              FROM tb_operadora as TOP
                              INNER JOIN tb_relacionamento TR on TOP.id = TR.id_operadora
                              INNER JOIN tb_empresas_planos TEP on TR.id_plano = TEP.id_plano
                              INNER JOIN tb_empresa TE on TEP.id_empresa = TE.id
                              INNER JOIN cepbr_endereco TC on TC.cep = TE.cep
                              INNER JOIN cepbr_cidade TD on TD.id_cidade = TC.id_cidade
                              JOIN cepbr_bairro TB on TB.id_bairro = TC.id_bairro
                              WHERE TOP.id = 49
                              ORDER BY TE.destaque DESC, TE.nome_abrev";

            if($rsHospitais = mysqli_query($conn, $qsqlHospitais)){?>
                <div class="row justify-content-center">
                    <?php
                while($regHospital = mysqli_fetch_array($rsHospitais)){
                    $nome = $regHospital['nome_abrev'];
                    $telefone = $regHospital['telefone'];
                    $endereco = $regHospital['tipo_logradouro']." ".$regHospital['logradouro'].", ".$regHospital['numero'].", ".
                                $regHospital['complemento']." - ".$regHospital['bairro']." - ".
                                "Cep: ".$regHospital['cep'];
                    $slug = $regHospital['slug'];
                    $id = $regHospital['id'];
            ?>
                <!--- CARD Hospital -->

                <div class="col-sm-12 col-md-6 col-lg-3"  >
                    <div class="operadora">
                        <div class="card card-hospitalcard my-3 mx-2" style="width: 16rem; height:18rem">
                            <div class="card-body">
                                <p class="card-title text-center h5"><?php echo $nome;?></p>
                                <p class="card-text"><i class="bi bi-telephone"></i> <?php echo " ".$telefone;?> </p>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><?php echo " ".$endereco;?></p>

                            </div>
                            <div class="operadora-logo btn-card">
                                        <?php
                                            $maps = "https://www.google.com.br/maps/place/".$endereco;
                                            echo "<p><a class='link_operadoras' href='$maps' target='_blank' rel='noopener noreferrer'>VER NO MAPA</a></br>";
                                            echo "<a  class='link_operadoras' href='../../hospitais/?id=".$id."&hospital=".$nome."'>PLANOS QUE ATENDE</a></p>";
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                } ?>
                </div>
            <?php
            }
         ?>
          </div>
         </div>


    	</div>
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
    	<div class="contatos">
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
                      <a  href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow">WhatsApp: (12) 3307-5375 </a>
                    </div>
                  </div>
					        <div class="d-flex align-items-center my-3">
                    <i class="bi bi-envelope"></i>
                      <a class="link_operadoras" href="mailto:comercial@astrosaude.com.br">E-mail: comercial@astrosaude.com.br</a><br />
                  </div>
                	<div class="d-flex align-items-center my-3" >
                    <i class="bi bi-chat"></i></i>
                    <a class="link_operadoras" href="#" onclick="jivo_api.open();" rel="nofollow"> Chat Online</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a href="../../../politica_privacidade.pdf" title="Política de privacidade - Pilon Vida e Saúde" target="_blank"> Conheça nossa política de privacidade</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a  href="../../../remocao.php" title="Remoção de dados" target="_blank"> Solicite remoção de dados pessoais.</a>
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
    <script src="../../../js/jquery.js"></script>
</body>
</html>
