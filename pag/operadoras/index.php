<?php
   include "../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Operadoras de Saúde</title>
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
    <meta name="description"  	content="Só trabalhamos com as melhores operadoras de planos de saúde, fça uma simulação on-line e compare valores e rede-credenciada na hora." />
    <meta name="keywords" 		content="Planos de Saúde, Operadoras de planos de saúde, Seguros Saúde, Planos de saúde individual, planos de saúde empresariais" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Operadoras de Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Só trabalhamos com as melhores operadoras de planos de saúde, fça uma simulação on-line e compare valores e rede-credenciada na hora.">
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
        include("../../inc/scripts.php");
    ?>

</head>
<body>
<a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow"><i class="bi bi-whatsapp whatsapp"></i></a>
	<header class="main-banner banner banner-top" style="background:#00A8C5 url(<?php echo $server.$url.'/img/banner/banner-home-astro-saude.webp'?>) no-repeat;">
		<?php
           include ("../../inc/nav.php");
        ?>
	</header>
    <p>&nbsp;</p>
    <section class="container main-home">
    <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <span class="text-muted">Operadoras</span></p>
		<div class="clear">
            <h1>As melhores opções de planos de saúde!<br>
                <span class="h2">Faça uma simulação on-line e compare valores e rede credenciada</span></h1>
            <!-- Listagem das operadoras -->
            <div class="operadoras">
                <div>
            <?php
                $qsql = "SELECT DISTINCT TE.id, TE.id_situacao, TE.nome_abrev, TC.cobertura, TE.plano_individual, TE.plano_adesao, TE.plano_empresarial, TE.logo
                        FROM tb_operadora as TE
                        JOIN tb_cobertura TC       on TC.id = TE.cobertura
                        WHERE TE.tipo    = 1
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
                        $id_situacao = $reg['id_situacao'];
                ?>
                <!--- CARD OPERADORA -->
                <div class="col-sm-12 col-md-6 col-lg-3"  >
                    <div class="operadora">
                        <a href=".pag/operadoras/<?php echo  $nome_abrev; ?>">
                            <div class="card card-operadora" style="width: 15rem;">
                                <div class="operadora-logo m-t-1 m-b-2">
                                    <img class="card-img-top" src="../../img/logos/<?php echo $logo; ?>" alt="Logo <?php echo $nome_abrev;?>" title= "Logo <?php echo $nome_abrev;?>">
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
	<section class="botoes container">
            <!--<a href="" class="btn__botoes"><i
                    class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
            -->
            <a href="../simulacao/" class="btn__botoes"><i
                    class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
            <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                    class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
        </section>

	<?php
        include("../../inc/footer.php");?>
</body>
</html>
