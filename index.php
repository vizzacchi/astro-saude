<?php
    include "inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Planos de Saúde</title>
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
    <meta name="description"  	content="Os melhores planos de saúde de São José dos Campos e Região em um portal completo para te auxiliar a tomar a sua decisão, faça uma simulação on-line e compare: valores, rede credenciada e benefícios." />
    <meta name="keywords" 		content="Planos de Saúde, planos de saúde São José dos Campos, Amil, Ativia Saúde, Bradesco Saúde, Hapvida, Plano Santa Casa Saúde, Sulamérica Saúde, Porto Saúde, Unimed São José dos Campos" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Planos de Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Os melhores planos de saúde de São José dos Campos e Região em um portal completo para te auxiliar a tomar a sua decisão, faça uma simulação on-line e compare: valores, rede credenciada e benefícios.">
    <meta property="og:image" 			content="https://www.astrosaude.com.br/imagens/facebook.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

	<!-- CSS -->
    <link rel="stylesheet" href=<?php echo $server.$url."/css/bootstrap.min.css";?>>
    <link rel="stylesheet" href=<?php echo $server.$url."/css/style.css";?>>
    <link rel="stylesheet" href=<?php echo $server.$url."/css/responsive.css";?>>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php
        include("./inc/scripts.php");
    ?>

</head>
<body>
<a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow"><i class="bi bi-whatsapp whatsapp"></i></a>
	<header class="main-banner banner banner-top" style="background:#00A8C5 url(<?php echo $server.$url.'/img/banner/banner-home-astro-saude.webp'?>) no-repeat;">
		<?php
            include ("./inc/nav.php");
        ?>

        <div class="container main-simulacao">
            <div class="col-lg-6 col-md-6 col-sm-12">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <a href="./pag/simulacao/" class="bt-simulacao clearfix" title="Faça uma Simulação Online Agora">
                    <i class="bi bi-calculator"></i>
                    QUERO FAZER UMA SIMULAÇÃO ONLINE
                </a>

                <a href="./pag/simulacao/" class="bt2-simulacao clearfix" title="Simulação Online">
                    Faça a simulação online, compare valores na hora.
                </a>
            </div>
        </div><!-- .container -->
	</header>
    <p>&nbsp;</p>

    <section class="container main-home">
		<div class="clear">
            <h1>Os melhores planos de saúde de <br/>São José dos Campos</h1>
            <!-- Listagem das operadoras -->
            <div class="operadoras">
                <div>
            <?php
                $qsql = "SELECT DISTINCT TE.id, TE.nome_abrev, TC.cobertura, TE.plano_individual, TE.plano_adesao, TE.plano_empresarial, TE.logo, TCRG.id_regiao_geografica as regiao_geografica
                        FROM tb_operadora as TE
                        JOIN tb_cobertura TC       on TC.id			            = TE.cobertura
                        JOIN tb_relacionamento TR  on TR.id_operadora        	= TE.id
                        JOIN tb_plano TP           on TP.id                  	= TR.id_plano
                        LEFT JOIN tb_empresa TA    on TA.id                     = TR.id_administradora
                        JOIN tb_tabela TT          on  TT.id_relacionamento  	= TR.id
                        JOIN tb_cidade_regiao TCR  on TCR.id_regiao          	= TT.id_regiao
                        JOIN tb_cidade_regiao_geografica TCRG on TCRG.id_cidade = TCR.id_cidade
                        WHERE TCR.id_cidade = 9660
                        ORDER BY TE.nome_abrev";
                if($result = mysqli_query($conn, $qsql)){
                    while($reg=mysqli_fetch_array($result)){
                        $id_operadora = $reg['id'];
                        $nome_abrev = $reg['nome_abrev'];
                        $cobertura = $reg['cobertura'];
                        $plano_individual = $reg['plano_individual'];
                        $plano_adesao = $reg['plano_adesao'];
                        $plano_empresarial = $reg['plano_empresarial'];
                        $logo = $reg['logo'];
                        $regiao_geografica = $reg['regiao_geografica'];
                ?>
                <!--- CARD OPERADORA -->
                <div class="col-sm-12 col-md-6 col-lg-3"  >
                    <div class="operadora">
                        <a href=".pag/operadoras/<?php echo  $nome_abrev; ?>">
                            <div class="card card-operadora" style="width: 15rem;">
                                <div class="operadora-logo m-t-1 m-b-2">
                                    <img class="card-img-top" src="img/logos/<?php echo $logo;?>" alt="Logo <?php echo $nome_abrev;?>" title= "Logo <?php echo $nome_abrev;?>">
                                </div>
                                <div class="card-body">
                                    <ul class="m-l-3">
                                        <?php echo "<li>Cobertura ".$cobertura."</li>"; ?>
                                        <?php if($plano_individual==1) echo "<li>Planos individuais</li>";?>
                                        <?php if($plano_adesao==1)echo "<li>Planos para profissionais liberais e estudantes</li>";?>
                                        <?php if($plano_empresarial>=1)echo "<li>Planos empresariais a partir de ".$plano_empresarial." vidas</li>";?>
                                    </ul>

                                    <div class="btn-card">
                                        <p><a href="./pag/operadoras/<?php echo  $nome_abrev; ?>" class="">+INFORMAÇÕES</a> </br>
                                        <a href="./pag/simulacao" class="">COTAÇÃO ON-LINE</a></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
                }
            }
            ?>
                </div>
            </div>
    	</div>
    </section><!-- .container -->
    <section class="container main-home">
        <h2 class="titles">Principais Hospitais de São José dos Campos</h2>
        <!--- Listar Hospitais de São José dos Campos -->
        <div class="operadoras">
            <div>
        <?php
            $qsqlHospitais = "SELECT TE.id, TE.slug, TE.nome_abrev, TE.telefone, TE.numero, TE.complemento, TC.cep, TC.tipo_logradouro, TC.logradouro,TB.bairro, TE.destaque, TD.cidade as cidades FROM `tb_empresa` as TE
                                JOIN cepbr_endereco TC on TC.cep = TE.cep
                                JOIN cepbr_cidade TD on TD.id_cidade = TC.id_cidade
                                JOIN tb_cidade_regiao_geografica TR on TR.id_cidade = TC.id_cidade
                                JOIN cepbr_bairro TB on TB.id_bairro = TC.id_bairro
                                WHERE TR.id_regiao_geografica = 21 and
                                    TC.id_cidade = 9660          and
                                    TE.destaque >= 1
                                ORDER BY destaque desc, cidades asc, nome_abrev asc";
            if($rsHospitais = mysqli_query($conn, $qsqlHospitais)){
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
                        <div class="card card-hospital" style="width: 15rem;">
                            <div class="card-body">
                                <p class="card-title"><?php echo $nome;?></p>
                                <p class="card-text"><i class="bi bi-telephone"></i> <?php echo " ".$telefone;?> </p>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><?php echo " ".$endereco;?></p>
                                <div class="btn-card">
                                        <?php
                                            $maps = "https://www.google.com.br/maps/place/".$endereco;
                                            echo "<p><a class='' href='$maps' target='_blank' rel='noopener noreferrer'>VER NO MAPA</a></br>";
                                            echo "<a class='' href='./pag/hospitais/?id=".$id."&hospital=".$nome."'>PLANOS QUE ATENDE</a></p>";
                                        ?>
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

        </section>
        <section class="botoes container">
          <!--<a href="" class="btn__botoes"><i
                  class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
          -->

          <a href="./pag/simulacao/" class="btn__botoes"><i
                  class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
          <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                  class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
        </section>
        <section class="container main-home">
            <h2 class="titles">Principais Hospitais da Região de São José dos Campos</h2>
            <!--- Listar Hospitais de São José dos Campos -->
            <div class="operadoras">
                <div>
            <?php
                $qsqlRegiao = "SELECT TE.id, TE.slug, TE.nome_abrev, TE.telefone, TE.numero, TE.complemento, TC.cep, TC.tipo_logradouro, TC.logradouro,TB.bairro, TE.destaque, TD.cidade as cidades, TD.uf FROM `tb_empresa` as TE
                                    JOIN cepbr_endereco TC on TC.cep = TE.cep
                                    JOIN cepbr_cidade TD on TD.id_cidade = TC.id_cidade
                                    JOIN tb_cidade_regiao_geografica TR on TR.id_cidade = TC.id_cidade
                                    JOIN cepbr_bairro TB on TB.id_bairro = TC.id_bairro
                                    WHERE TR.id_regiao_geografica = 21 and
                                        TC.id_cidade <> 9660          and
                                        TE.destaque >= 1
                                    ORDER BY destaque desc, cidades asc, nome_abrev asc";
                if($rsRegiao = mysqli_query($conn, $qsqlRegiao)){
                    while($regRegiao = mysqli_fetch_array($rsRegiao)){
                        $nome = $regRegiao['nome_abrev'];
                        $telefone = $regRegiao['telefone'];
                        $endereco = $regRegiao['tipo_logradouro']." ".$regRegiao['logradouro'].", ".$regRegiao['numero'].", ".
                                    $regRegiao['complemento']." - ".$regRegiao['bairro']." - ".$regRegiao['cidades'].
                                    " - ".$regRegiao['uf'];
                ?>
                    <!--- CARD Hospital -->
                    <div class="col-sm-12 col-md-6 col-lg-3"  >
                        <div class="operadora">
                            <div class="card card-hospital" style="width: 15rem;">
                                <div class="card-body">
                                    <p class="card-title"><?php echo $nome;?></p>
                                    <p class="card-text"><i class="bi bi-telephone"></i> <?php echo " ".$telefone;?> </p>
                                    <p class="card-text"><i class="bi bi-geo-alt"></i><?php echo " ".$endereco;?></p>
                                    <div class="operadora-logo btn-card">
                                        <?php
                                            $maps = "https://www.google.com.br/maps/place/".$endereco;
                                            echo "<p><a class='' href='$maps' target='_blank' rel='noopener noreferrer'>VER NO MAPA</a></p>";
                                            ?>
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
        </section>
        <div class="clear">
            <p class="m-x-3 m-y-2">Não importa a sua necessidade a nossa equipe está pronta para te ajudar, converse com um especialista pelo WhatsApp, ou faça uma simulação e tenha as opções e valores dos planos na hora.</p>
        <section class="botoes container">
          <!--<a href="" class="btn__botoes"><i
                  class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
          -->

          <a href="./pag/simulacao/" class="btn__botoes"><i
                  class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
          <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                  class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
        </section>
      </div>

	<?php include("./inc/footer.php");?>
</body>
</html>
