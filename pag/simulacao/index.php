<?php
   include "../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Simulação Planos de Saúde</title>
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
    <meta name="description"  	content="Antes de contratar seu plano de saúde, faça ua simulação on-line e compare os valores dos principais planos de saúde de São José dos Campos e Região." />
    <meta name="keywords" 		content="Simulação plano de saúde, cotação plano de saúde, valores plano de saúde, valor plano de saúde, contratação on-line planos de saúde" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Simulação Planos de Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Antes de contratar seu plano de saúde, faça uma simulação on-line e compare os valores dos principais planos de saúde de São José dos Campos e Região.">
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
    <section class="container main-home main-sobre">
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <span class="text-muted">Simulação Planos de Saúde</span></p>
		  <div class="min-banner" style="background:#949594 url(../../img/banner/banner-sobre-astro-saude.jpg) center no-repeat;"></div>

      <div class="clear">
            <h1>Simulação Planos de Saúde<br>
                <span class="h3">Preencha os dados e receba no ato as tabelas com valores referente a sua solicitação, tudo online, gratuito e na hora!</span></h1>
            <!-- Listagem das operadoras -->
      </div>
    </section>
    <section class="container form-simulacao">
        <form action="../resultado-simulacao/index.php" method="post">
            <div class="col-lg-12 col-md-12 col-sm-12 m-y-1">
              <input id="nome" name="nome" 	type="text"  placeholder="Nome" required class="form-control">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 m-y-1">
              <input name="email" id="email" 	type="email" placeholder="E-mail" required class="form-control">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 m-y-1">
              <input name="telefone" id="telefone" type="text" placeholder="Telefone" required class="form-control">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 m-y-1">
              <input name="cidade" id="cidade" type="text" placeholder="Cidade" class="form-control">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 m-y-1">
            	<select name="tipo" id="tipo" title="tipo" class="form-control">
                <option value="0" disabled selected="SELECTED">Selecione o tipo</option>
            	  <option value="PF">Pessoa física</option>
            	  <option value="PJ">Pessoa Jurídica</option>
                <option disabled> </option>
              </select>
			    </div>

            <div class="col-lg-12 col-md-12 col-sm-12 m-y-2">
              <h2>Informe abaixo a quantidade de vidas por faixa etária:</h2>
            </div>
            <div class="col-sm-6 col-xs-12 "><input class="form-control" name="qtd0-18" 	type="number" min="0" placeholder="núm. vidas de 00 a 18"></div>
            <div class="col-sm-6 col-xs-12 "><input class="form-control" name="qtd19-23" 	type="number" min="0" placeholder="núm. vidas de 19 a 23"></div>
			      <div class="col-sm-6 col-xs-12 "><input class="form-control" name="qtd24-28" 	type="number" min="0" placeholder="núm. vidas de 24 a 28"></div>
			      <div class="col-sm-6 col-xs-12 "><input class="form-control" name="qtd29-33" 	type="number" min="0" placeholder="núm. vidas de 29 a 33"></div>
            <div class="col-sm-6 col-xs-12 "><input class="form-control" name="qtd34-38" 	type="number" min="0" placeholder="núm. vidas de 34 a 38"></div>
            <div class="col-sm-6 col-xs-12 "><input class="form-control" name="qtd39-43" 	type="number" min="0" placeholder="núm. vidas de 39 a 43"></div>
            <div class="col-sm-6 col-xs-12"><input class="form-control"  name="qtd44-48" 	type="number" min="0" placeholder="núm. vidas de 44 a 48"></div>
            <div class="col-sm-6 col-xs-12 "><input class="form-control" name="qtd49-53" 	type="number" min="0"placeholder="núm. vidas de 49 a 53"></div>
            <div class="col-sm-6 col-xs-12"><input class="form-control" name="qtd54-58" 	type="number" min="0" placeholder="núm. vidas de 54 a 58"></div>
            <div class="col-sm-6 col-xs-12"><input class="form-control" name="qtd59-99" 	type="number" min="0" placeholder="núm. vidas de 59 a 100"> </div>
            <div class="col-lg-12 col-md-12 col-sm-12"><input class="form-control" name="enviar" type="submit" value=" EXECUTAR A SIMULAÇÃO " class="m-y-2"></div>
        </form>
    </section>

	<?php
        
        include("../../inc/footer.php");
    ?>

</body>
</html>
