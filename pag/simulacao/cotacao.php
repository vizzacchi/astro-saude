<?php
session_start();
include "../../inc/inc_coneccao.php";
if(isset($_POST['txtNome']) && $_POST['txtNome']!=""){ $nome = $_POST['txtNome'];} else{ $nome = ""; }
if(isset($_POST['txtEmail']) && $_POST['txtEmail']!=""){ $email = $_POST['txtEmail']; }else{ $email = "";}
if(isset($_POST['txtTelefone']) && $_POST['txtTelefone']!=""){ $telefone = $_POST['txtTelefone'];} else{ $telefone = ""; }
if(isset($_POST['cboTipoPessoa']) && $_POST['cboTipoPessoa']!=""){
   if ($_POST['cboTipoPessoa']=='PF'){
    $condicaoTipoPessoa = "(tipo_plano = 'PF' or tipo_plano = 'AD')"  ;
    $tipoPessoa = "Pessoa Física - CPF";
    $tipo = 'PF';
    $compulsorio = "";
    $umTitular = "";
    $tipoTabela = " (id_tipo_tabela = 1 OR
                     id_tipo_tabela = 2) AND ";
   }else{
	  $condicaoTipoPessoa = "tipo_plano = 'PJ' ";
	  $tipoPessoa = 'Pessoa Jurídica - CNPJ';
	  $tipo = 'PJ';
    if(isset($_POST['cboNaturezaJuridica']) && $_POST['cboNaturezaJuridica']!=""){ ;
      $tipoTabela = $_POST['cboNaturezaJuridica'];
      $tipoTabela = " (id_tipo_tabela = '$tipoTabela' OR
                       id_tipo_tabela = '1') AND " ;
    } else{
      $tipoTabela = " id_tipo_tabela = '1' AND ";
    }
    if(isset($_POST['cboContratacao']) && $_POST['cboContratacao']!=""){
      $compulsorio = $_POST['cboContratacao'];
      $compulsorio = " (compulsorio = '$compulsorio' OR
                        compulsorio = '') AND " ;
    } else{
      $compulsorio = " (compulsorio = '0' OR
                       compulsorio = '') AND " ;
    }
    if(isset($_POST['cboNumTitular']) && $_POST['cboNumTitular']!=""){
      $umtitular = $_POST['cboNumTitular'];
      $umTitular = " (umTitular = '$umTitular' OR
                      umTitular = '') AND " ;
    } else{
      $umTitular = " (umTitular = '1' OR
                      umTitular = '') AND " ;
    }

  }
}
if(isset($_POST['cboTipoAcomodacao']) && $_POST['cboTipoAcomodacao']!="" && $_POST['cboTipoAcomodacao']!="I"){
   $tipoAcomodacao = $_POST['cboTipoAcomodacao'];
   $tipoAcomodacao = " acomodacao = '$tipoAcomodacao' AND" ;
} else{
  $tipoAcomodacao = "";
}
/*
if(isset($_POST['cboCoparticipacao']) && $_POST['cboCoparticipacao']!="" && $_POST['cboCoparticipacao']!="I"){
  $coparticipacao = $_POST['cboCoparticipacao'];
  $coparticipacao = " coparticipacao = '$coparticipacao' AND" ;
} else{
 $coparticipacao = "";
}
*/
 $coparticipacao = "";

if(isset($_POST['cboCidades'])  && $_POST['cboCidades']!=""){
  $idCidade = $_POST['cboCidades'];
  $qsqlCidade = "select cidade from cepbr_cidade where id_cidade = $idCidade";
  $rsCidade = mysqli_query($conn, $qsqlCidade);
  $rowCidade = mysqli_fetch_array($rsCidade);
  $nomeCidade = $rowCidade['cidade'];
} else{
  $idCidade = 0;
}
if(isset($_POST['txt00a18']) && $_POST['txt00a18']!=""){ $faixa1 = $_POST['txt00a18'] ;} else{$faixa1 = 0;}
if(isset($_POST['txt19a23']) && $_POST['txt19a23']!=""){ $faixa2 = $_POST['txt19a23'] ; }else{ $faixa2 = 0;}
if(isset($_POST['txt24a28']) && $_POST['txt24a28']!=""){ $faixa3 = $_POST['txt24a28'] ; }else{ $faixa3 = 0;}
if(isset($_POST['txt29a33']) && $_POST['txt29a33']!=""){ $faixa4 = $_POST['txt29a33'] ; }else{ $faixa4 = 0;}
if(isset($_POST['txt34a38']) && $_POST['txt34a38']!=""){ $faixa5 = $_POST['txt34a38'] ; }else{ $faixa5 = 0;}
if(isset($_POST['txt39a43']) && $_POST['txt39a43']!=""){ $faixa6 = $_POST['txt39a43'] ; }else{ $faixa6 = 0;}
if(isset($_POST['txt44a48']) && $_POST['txt44a48']!=""){ $faixa7 = $_POST['txt44a48'] ; }else{ $faixa7 = 0;}
if(isset($_POST['txt49a53']) && $_POST['txt49a53']!=""){ $faixa8 = $_POST['txt49a53'] ; }else{ $faixa8 = 0;}
if(isset($_POST['txt54a58']) && $_POST['txt54a58']!=""){ $faixa9 = $_POST['txt54a58'] ; }else{ $faixa9 = 0;}
if(isset($_POST['txt59a65']) && $_POST['txt59a65']!=""){ $faixa10 = $_POST['txt59a65'] ;} else{ $faixa10 = 0;}
if(isset($_POST['txt66a69']) && $_POST['txt66a69']!=""){ $faixa11 = $_POST['txt66a69'] ; }else{ $faixa11 = 0;}
if(isset($_POST['txt70']) && $_POST['txt70']!=""){ $faixa12 = $_POST['txt70'] ; }else{ $faixa12 = 0;}
$totalVidas = $faixa1 + $faixa2 + $faixa3 + $faixa4 + $faixa5 + $faixa6 + $faixa7 + $faixa8 + $faixa9 + $faixa10 + $faixa11 + $faixa12;
$faixaFim = $faixa10+$faixa11+$faixa12;

  $agora = date('Y-m-d H:i:s', time());
  $qsqlIndicacao = "INSERT INTO `tbi_indicacao` (`id`, `nome`, `telefone`, `email`, `cidade`, `origem`, `data`,`situacao`, `faixa1`, `faixa2`, `faixa3`, `faixa4`, `faixa5`, `faixa6`, `faixa7`, `faixa8`, `faixa9`, `faixa10`, `tipo`) VALUES (NULL, '$nome', '$telefone', '$email', '$nomeCidade', 'astro saúde','$agora', 1, '$faixa1', '$faixa2', '$faixa3', '$faixa4', '$faixa5', '$faixa6', '$faixa7', '$faixa8', '$faixa9','$faixaFim', '$tipo');";

  $rsIndicacao = mysqli_prepare($conn2 ,$qsqlIndicacao);
  $rsIndicacao = mysqli_stmt_execute($rsIndicacao);
  $last_id = mysqli_insert_id($conn2);

  $qsqlAgenda = "Insert Into tbi_agenda (id, data, agenda, situacao, id_indicacao) values (NULL, '$agora', 'Criação', 1, $last_id)";

  $rsAgenda = mysqli_query($conn2, $qsqlAgenda);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Planos de Saúde | Cotação Planos de Saúde</title>
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
    <meta name="description"  	content="Cotação personalizada Astro Saúde" />
    <meta name="keywords" 		content="Cotação astro saúde, Cotação plano de saúde" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Planos de Saúde | Simulação Planos de Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Cotação personalizada Astro Saúde.">
    <meta property="og:image" 			content="https://www.astrosaude.com.br/img/planos-de-saude-pilon.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

	<!-- CSS -->
  <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/styleSimulacao.css">
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
              <a class="nav-link" href="../cidade">Cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../perguntasERespostas/">Perguntas e Respostas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./">Simulação</a>
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
  <!--------------- Breadcumb ---------------->
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="m-5">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../../">Home</a></li>
      <li class="breadcrumb-item"><a href="../../">Simulação</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cotação Plano de Saúde</li>
    </ol>
  </nav>
  <section class="container">
    <h1 class="title">Cotação Planos de Saúde</h1>
    <p class="text-center"><i class="bi bi-file-earmark-text"></i> Veja as opções de planos que selecionamos para a cidade de <?php echo $nomeCidade." em ".date('d/m/Y'); ?></p>
    <p><span class="text-cotacao">Cliente:</span> <?php echo $nome;?><br>
    <span class="text-cotacao">Total de Vidas:</span> <?php echo $totalVidas;?></br>
    <span class="text-cotacao">Tipo Contratação:</span> <?php echo $tipoPessoa;?></p>
  </section>

  <?php
  $qsqlCotacao= "SELECT TB.*, TP.*, TE.logo as 'logoOper', TA.logo as 'logoAdm' FROM `tb_cidade_regiao` as TCR
                    INNER JOIN tb_tabela TB on TB.id_regiao = TCR.id_regiao
                    INNER JOIN tb_plano TP on TP.id = TB.id_plano
                    INNER JOIN tb_operadora TE on TE.id = TP.id_operadora
                    LEFT JOIN tb_operadora TA on TA.id = TB.id_administradora
                    WHERE
                      TCR.id_cidade = $idCidade AND
                      $condicaoTipoPessoa AND
                      $tipoAcomodacao
                      $coparticipacao
                      $compulsorio
                      $tipoTabela
                      TB.vidas_ini <= $totalVidas AND
                      TB.vidas_fim >= $totalVidas AND
                      TB.validade_fim >= Now() AND
                      TP.id_situacao = 1 AND
                      TB.id_situacao = 1
                    ORDER BY `TP`.id_operadora, TB.tipo_plano, TP.id ASC";

                    echo $qsqlCotacao;
  ?>
  <div class="container d-flex justify-content-center">
    <div class="resultado-cotacao">
      <div class="accordion" id="accordionCotacao">
        <?php
          if($rsCotacao = mysqli_query($conn,$qsqlCotacao)){
            $idOperadora = 0;
            $idAdministradora = 0;
            while($regCotacao = mysqli_fetch_assoc($rsCotacao)){
              if(($idOperadora!=$regCotacao['id_operadora'] &&
                 $regCotacao['id_administradora'] == 0) ||
                 ($idOperadora != $regCotacao['id_operadora'] &&
                 $idAdministradora != $regCotacao['id_administradora']) ||
                 ($idOperadora != $regCotacao['id_operadora'] &&
                 $idAdministradora== $regCotacao['id_administradora']) ||
                  ($idOperadora == $regCotacao['id_operadora'] &&
                  $idAdministradora != $regCotacao['id_administradora'])
                 ){
                  if($idOperadora!=0){
                    echo "</div> </div> </div>";
                  }
                $idOperadora = $regCotacao['id_operadora'];
                $idAdministradora = $regCotacao['id_administradora'];
                $idPlano = $regCotacao['id_plano'];
                $valorPlano = $faixa1 * $regCotacao['faixa1'] +
                              $faixa2 * $regCotacao['faixa2'] +
                              $faixa3 * $regCotacao['faixa3'] +
                              $faixa4 * $regCotacao['faixa4'] +
                              $faixa5 * $regCotacao['faixa5'] +
                              $faixa6 * $regCotacao['faixa6'] +
                              $faixa7 * $regCotacao['faixa7'] +
                              $faixa8 * $regCotacao['faixa8'] +
                              $faixa9 * $regCotacao['faixa9'] +
                              $faixaFim * $regCotacao['faixa10'];
                ?>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#op<?php echo $regCotacao['id_operadora'];?>Ad<?php echo $regCotacao['id_administradora'];?>" aria-expanded="false" aria-controls="collapseOne" id="btn<?php echo $idPlano;?>">
                        <?php
                          if($regCotacao['logoAdm']){ ?>
                            <div class="d-flex flex-column">
                              <div class="d-flex justify-content-center align-itens-center">
                                <img src="../../img/logos/<?php echo $regCotacao['logoAdm'];?>" alt="" class="logo-adm-cotacao">
                                <img src="../../img/logos/<?php echo $regCotacao['logoOper'];?>" alt="" class="logo-oper-cotacao">
                              </div>
                              <div class="text-result-cotacao">
                                Planos por adesão para profissionais liberais ou estudantes a partir da 1° série ensino fundamental.
                              </div>
                            </div>

                        <?php }else{ ?>
                          <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-center align-itens-center">
                              <img src="../../img/logos/<?php echo $regCotacao['logoOper'];?>" alt="" class="logo-oper-cotacao"><br>
                            </div>
                            <div class="text-result-cotacao">
                              Planos individuais e familiares para qualquer pessoa.
                            </div>
                          </div>
                        <?php } ?>

                    </button>
                  </h2>
                  <div id="op<?php echo $regCotacao['id_operadora'];?>Ad<?php echo $regCotacao['id_administradora'];?>" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                  <div class="accordion-body">


              <div class="accordion" id="planoAc<?php echo $idPlano;?>">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#plano<?php echo $idPlano;?>" aria-expanded="true" aria-controls="plano<?php echo $idPlano;?>" id="btn2<?php echo $idPlano;?>">
                      <div class="d-flex w-100">
                        <div class="px-2">
                          <span class="valor-cotacao"><strong><?php echo $regCotacao['plano'];?> - </strong> R$ <?php echo number_format($valorPlano, 2, ',', '.');?></span>
                        </div>
                        <div class="px-2 me-0 ms-auto">
                          <p class="text-center">
                            <input type="button" class="btn btn-secondary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="personalizaModalVenda('<?php echo $idPlano; ?>','<?php echo $last_id;?>')" value="Contrate Online" id="btnV1<?php echo $idPlano;?>" >
                          </p>
                        </div>
                      </div>
                    </button>
                  </h2>

                  <div id="plano<?php echo $idPlano;?>" class="accordion-collapse collapse" data-bs-parent="#planoAc<?php echo $idPlano;?>">
                    <div class="accordion-body">
                      <div class="d-flex justify-content-center flex-column">
                            <table class="table table-sm table-striped text-center">
                              <thead>
                                <tr>
                                  <th scope="col">Faixa Etária</th>
                                  <th scope="col">Vidas</th>
                                  <th scope="col">Valor Unitário</th>
                                  <th scope="col">Valor Total</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php if($faixa1 != 0){ ?>
                                <tr>
                                  <td>00 a 18</td>
                                  <td><?php echo $faixa1;?></td>
                                  <td><?php echo number_format($regCotacao['faixa1'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa1 * $regCotacao['faixa1'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa2 != 0){ ?>
                                <tr>
                                  <td>19 a 23</td>
                                  <td><?php echo $faixa2;?></td>
                                  <td><?php echo number_format($regCotacao['faixa2'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa2 * $regCotacao['faixa2'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa3 != 0){ ?>
                                <tr>
                                  <td>24 a 28</td>
                                  <td><?php echo $faixa3;?></td>
                                  <td><?php echo number_format($regCotacao['faixa3'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa3 * $regCotacao['faixa3'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa4 != 0){ ?>
                                <tr>
                                  <td>29 a 33</td>
                                  <td><?php echo $faixa4;?></td>
                                  <td><?php echo number_format($regCotacao['faixa4'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa4 * $regCotacao['faixa4'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa5 != 0){ ?>
                                <tr>
                                  <td>34 a 38</td>
                                  <td><?php echo $faixa5;?></td>
                                  <td><?php echo number_format($regCotacao['faixa5'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa5 * $regCotacao['faixa5'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa6 != 0){ ?>
                                <tr>
                                  <td>39 a 43</td>
                                  <td><?php echo $faixa6;?></td>
                                  <td><?php echo number_format($regCotacao['faixa6'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa6 * $regCotacao['faixa6'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa7 != 0){ ?>
                                <tr>
                                  <td>44 a 48</td>
                                  <td><?php echo $faixa7;?></td>
                                  <td><?php echo number_format($regCotacao['faixa7'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa7 * $regCotacao['faixa7'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa8 != 0){ ?>
                                <tr>
                                  <td>49 a 53</td>
                                  <td><?php echo $faixa8;?></td>
                                  <td><?php echo number_format($regCotacao['faixa8'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa8 * $regCotacao['faixa8'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa9 != 0){ ?>
                                <tr>
                                  <td>54 a 58</td>
                                  <td><?php echo $faixa9;?></td>
                                  <td><?php echo number_format($regCotacao['faixa9'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa9 * $regCotacao['faixa9'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixaFim != 0){ ?>
                                <tr>
                                  <td>59 ou mais</td>
                                  <td><?php echo $faixaFim;?></td>
                                  <td><?php echo number_format($regCotacao['faixa10'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixaFim * $regCotacao['faixa10'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                            <p class="text-center">
                              <span class="link_cotacao"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="personalizaModal('<?php echo $idPlano; ?>','<?php echo $regCotacao['plano'];?>')"> Hospitais que atendem</span> | Carências e Regras de aceitação
                            </p>
                            <p class="text-center">
                              <input type="button" class="btn btn-secundary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="personalizaModalVenda('<?php echo $idPlano; ?>','<?php echo $last_id;?>')" value="Contrate Online" id="btnV2<?php echo $idPlano;?>" disabled>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php
              }else{
                $idPlano = $regCotacao['id_plano'];
                $valorPlano = $faixa1 * $regCotacao['faixa1'] +
                              $faixa2 * $regCotacao['faixa2'] +
                              $faixa3 * $regCotacao['faixa3'] +
                              $faixa4 * $regCotacao['faixa4'] +
                              $faixa5 * $regCotacao['faixa5'] +
                              $faixa6 * $regCotacao['faixa6'] +
                              $faixa7 * $regCotacao['faixa7'] +
                              $faixa8 * $regCotacao['faixa8'] +
                              $faixa9 * $regCotacao['faixa9'] +
                              $faixaFim * $regCotacao['faixa10'];?>

              <div class="accordion" id="planoAc<?php echo $idPlano;?>">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#plano<?php echo $idPlano;?>" aria-expanded="true" aria-controls="plano<?php echo $idPlano;?>" id="btn3<?php echo $idPlano;?>">
                      <div class="d-flex w-100">
                        <div class="px-2">
                          <span class="valor-cotacao"><strong><?php echo $regCotacao['plano'];?> - </strong> R$ <?php echo number_format($valorPlano, 2, ',', '.');?></span>
                        </div>
                        <div class="px-2 me-0 ms-auto">
                          <input type="button" class="btn btn-secondary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="personalizaModalVenda('<?php echo $idPlano; ?>','<?php echo $last_id;?>')" value="Contrate Online" id="btnV3<?php echo $idPlano;?>"  >
                        </div>
                      </div>
                    </button>
                  </h2>

                  <div id="plano<?php echo $idPlano;?>" class="accordion-collapse collapse" data-bs-parent="#planoAc<?php echo $idPlano;?>">
                    <div class="accordion-body">
                      <div class="d-flex justify-content-center flex-column">
                            <table class="table table-sm table-striped text-center">
                              <thead>
                                <tr>
                                  <th scope="col">Faixa Etária</th>
                                  <th scope="col">Vidas</th>
                                  <th scope="col">Valor Unitário</th>
                                  <th scope="col">Valor Total</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php if($faixa1 != 0){ ?>
                                <tr>
                                  <td>00 a 18</td>
                                  <td><?php echo $faixa1;?></td>
                                  <td><?php echo number_format($regCotacao['faixa1'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa1 * $regCotacao['faixa1'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa2 != 0){ ?>
                                <tr>
                                  <td>19 a 23</td>
                                  <td><?php echo $faixa2;?></td>
                                  <td><?php echo number_format($regCotacao['faixa2'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa2 * $regCotacao['faixa2'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa3 != 0){ ?>
                                <tr>
                                  <td>24 a 28</td>
                                  <td><?php echo $faixa3;?></td>
                                  <td><?php echo number_format($regCotacao['faixa3'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa3 * $regCotacao['faixa3'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa4 != 0){ ?>
                                <tr>
                                  <td>29 a 33</td>
                                  <td><?php echo $faixa4;?></td>
                                  <td><?php echo number_format($regCotacao['faixa4'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa4 * $regCotacao['faixa4'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa5 != 0){ ?>
                                <tr>
                                  <td>34 a 38</td>
                                  <td><?php echo $faixa5;?></td>
                                  <td><?php echo number_format($regCotacao['faixa5'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa5 * $regCotacao['faixa5'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa6 != 0){ ?>
                                <tr>
                                  <td>39 a 43</td>
                                  <td><?php echo $faixa6;?></td>
                                  <td><?php echo number_format($regCotacao['faixa6'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa6 * $regCotacao['faixa6'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa7 != 0){ ?>
                                <tr>
                                  <td>44 a 48</td>
                                  <td><?php echo $faixa7;?></td>
                                  <td><?php echo number_format($regCotacao['faixa7'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa7 * $regCotacao['faixa7'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa8 != 0){ ?>
                                <tr>
                                  <td>49 a 53</td>
                                  <td><?php echo $faixa8;?></td>
                                  <td><?php echo number_format($regCotacao['faixa8'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa8 * $regCotacao['faixa8'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixa9 != 0){ ?>
                                <tr>
                                  <td>54 a 58</td>
                                  <td><?php echo $faixa9;?></td>
                                  <td><?php echo number_format($regCotacao['faixa9'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixa9 * $regCotacao['faixa9'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                                <?php if($faixaFim != 0){ ?>
                                <tr>
                                  <td>59 ou mais</td>
                                  <td><?php echo $faixaFim;?></td>
                                  <td><?php echo number_format($regCotacao['faixa10'], 2, ',', '.');?></td>
                                  <td><?php echo number_format($faixaFim * $regCotacao['faixa10'], 2, ',', '.');?></td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                            <p class="text-center">
                              <span class="link_cotacao"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="personalizaModal('<?php echo $idPlano; ?>','<?php echo $regCotacao['plano'];?>')"> Hospitais que atendem</span> | Carências e Regras de aceitação
                            </p>
                            <p class="text-center">
                              <input type="button" class="btn btn-secondary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="personalizaModalVenda('<?php echo $idPlano; ?>','<?php echo $last_id;?>')" value="Contrate Online" id="btnV4<?php echo $idPlano;?>">
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
              }
            }
            ?>
                </div>
              </div>
            </div>
        <?php
          }
        ?>
      </div>
    </div>
  </div>

  <section class="container">
    <div class="d-flex justify-content-center my-3">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-person"></i> Fale com um de nossos especialistas</h5>
            <p class="card-text">Nossos especialistas estão prontos para te atender.</p>
            <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" class="btn btn-simula"><i class="bi bi-whatsapp"></i> Fale com um especialista</a>
          </div>
        </div>
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
                    <a href="../politica_privacidade.pdf" title="Política de privacidade - Pilon Vida e Saúde" target="_blank"> Conheça nossa política de privacidade</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a  href="../remocao.php" title="Remoção de dados" target="_blank"> Solicite remoção de dados pessoais.</a>
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



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="bodyModal"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Venda-->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal2" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="bodyModalVenda"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="../../js/jquery.js"></script>
  <script src="../../js/pages/cotacao.js"></script>

</body>
</html>





