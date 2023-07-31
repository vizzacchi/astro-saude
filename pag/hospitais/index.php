<?php include '../../inc/inc_coneccao.php';
if(isset($_GET['id'])){
  $id_hospital = $_GET['id'];
  $hospital = $_GET['hospital'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | <php echo $hospital;?></php> </title>
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
    <meta name="description"  	content="Veja os planos que o hospital <?php echo $hospital; ?> atende," />
    <meta name="keywords" 		content="<?php echo $hospital; ?>" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | <?php echo $hospital; ?>">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="<?php echo $hospital; ?>">
    <meta property="og:image" 			content="https://www.astrosaude.com.br/img/planos-de-saude-pilon.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

	<!-- CSS -->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/style.css">
    <?php
        include("../../inc/scripts.php");
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
              <a class="nav-link active" href="../cidade/">Cidades</a>
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

  </header>
  <!------------------------------------------------------------------------
                                Fim Header
  ------------------------------------------------------------------------------>
    <p>&nbsp;</p>
    <section class="container main-home">
      <!--------------- Breadcumb ---------------->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="m-5">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a  href="../../">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hospitais</li>
            </ol>
        </nav>

    <section class="container main-home">
      <h1 class="title"><?php echo $hospital; ?></h1>

      <div class="hospitais">
      <p>Confira as operadoras e os planos que são atendidos no <?php echo $hospital; ?>.</p>
      <p>A rede de cada plano pode mudar sem prévio aviso, essa consulta é apenas uma referencia, converse com um de nossos especialistas para confirmar o atendimento do plano no respectivo hospital.</p>
      <?php
        $qsql = "SELECT DISTINCT TP.id_operadora, TE.logo, TE.nome_abrev, E.nome_abrev as hospital, TP.plano, TEP.* FROM tb_empresas_planos as TEP
                  INNER JOIN tb_plano TP on TP.id = TEP.id_plano
                  INNER JOIN tb_empresa E on E.id = TEP.id_empresa
                  INNER JOIN tb_operadora TE on TE.id= TP.id_operadora
                  WHERE TEP.id_empresa = $id_hospital AND
                        TP.id_situacao = 1
                  ORDER BY TP.id_operadora, TP.id";

        $rs = mysqli_query($conn, $qsql);

        if( $rs && mysqli_num_rows($rs) > 0){
          $operadora = "";
          $count = 0;
          while ($reg=mysqli_fetch_array($rs)) {
            if($reg['id_operadora'] != $operadora){
              if($count <> 0) echo "</tbody></table></div>
              <section class='container'>
                <div class='row my-5'>
                    <div class='col-12 col-md-6 text-center my-4'>
                    <a href='../simulacao/' class='btn__botoes'><i
                            class='bi bi-calculator px-2'></i>Simulação Online</a>
                    </div>
                    <div class='col-12 col-md-6 text-center my-4'>
                    <a href='https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?' rel='nofollow' class='btn__botoes'><i
                            class='bi bi-whatsapp px-2'></i> Converse WhatsApp</a>
                    </div>
                </div>
              </section>


              </div>";
              $operadora = $reg['id_operadora'];
              $count++;
              echo "<p><img src='../../img/logos/".$reg['logo']."' title = 'Logo ".$reg['nome_abrev']."' alt='Logo ".$reg['nome_abrev']."' class='m-y-3'></p>";
              ?>
              <div class="table-responsive tabela">
                <div>
              <table class="table table-sm table-striped table-responsive">
                <thead>
                  <tr>
                    <th scope="col">Plano</th>
                    <th scope="col">HG</th>
                    <th scope="col">HD</th>
                    <th scope="col">HE</th>
                    <th scope="col">MAT</th>
                    <th scope="col">PSG</th>
                    <th scope="col">PSI</th>
                    <th scope="col">PSE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
            }
              ?>
                <tr>
                    <td><?php echo $reg['plano']; ?></td>
                    <td><?php if($reg['hospital_geral']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['hospital_dia']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['hospital_especializado']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['maternidade']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['pronto_socorro_geral']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['pronto_socorro_infantil']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['pronto_socorro_especializado']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                </tr>
        <?php

        } ?>
          </tbody>
            </table>
            </div>
          </div>

        <?php
        }else{ ?>
          <p class="text-center"><strong>Estamos atualizando o cadastro deste Hospital.</strong></p>
          <p>Converse com um de nossos especialistas para saber todos os planos que são atendidos no <?php echo $hospital; ?></p>
        <?php
        }



        ?>
        </div>
    </section>
    <?php } ?>
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
  </section><!-- .container -->

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
                    <a href="../../politica_privacidade.pdf" title="Política de privacidade - Pilon Vida e Saúde" target="_blank"> Conheça nossa política de privacidade</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a  href="../../remocao.php" title="Remoção de dados" target="_blank"> Solicite remoção de dados pessoais.</a>
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
