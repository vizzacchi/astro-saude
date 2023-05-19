<?php
include "../../inc/inc_coneccao.php";
include "../../inc/coneccao_cotador.php";

$nome 		= $_POST['nome'];
$email 		= $_POST['email'];
$telefone 	=  $_POST['telefone'];
$cidade 	=  $_POST['cidade'];
$tipo		=  $_POST['tipo'];

if($_POST['qtd0-18']){
  $faixa1 	=  $_POST['qtd0-18'];
}else{
  $faixa1 = 0;
}
if($_POST['qtd19-23']){
  $faixa2 	=  $_POST['qtd19-23'];
}else{
  $faixa2 = 0;
}
if($_POST['qtd24-28']){
  $faixa3 	=  $_POST['qtd24-28'];
}else{
  $faixa3 = 0;
}
if($_POST['qtd29-33']){
  $faixa4 	=  $_POST['qtd29-33'];
}else{
  $faixa4 = 0;
}
if($_POST['qtd34-38']){
  $faixa5 	=  $_POST['qtd34-38'];
}else{
  $faixa5 = 0;
}
if($_POST['qtd39-43']){
  $faixa6 	=  $_POST['qtd39-43'];
}else{
  $faixa6 = 0;
}
if($_POST['qtd44-48']){
  $faixa7 	=  $_POST['qtd44-48'];
}else{
  $faixa7 = 0;
}
if($_POST['qtd49-53']){
  $faixa8 	=  $_POST['qtd49-53'];
}else{
  $faixa8 = 0;
}
if($_POST['qtd54-58']){
  $faixa9 	=  $_POST['qtd54-58'];
}else{
  $faixa9 = 0;
}
if($_POST['qtd59-99']){
  $faixa10 	=  $_POST['qtd59-99'];
}else{
  $faixa10 = 0;
}

$totalVidas	= $faixa1+$faixa2+$faixa3+$faixa4+$faixa5+$faixa6+$faixa7+$faixa8+$faixa9+$faixa10;

    $condicao = "";
    $origem = "Astro Saúde";
    $agora = date('Y-m-d H:i:s', time());

    $qsqlIndicacao = "INSERT INTO `tbi_indicacao` (`id`, `nome`, `telefone`, `email`, `cidade`, `origem`, `data`,`situacao`, `faixa1`, `faixa2`, `faixa3`, `faixa4`, `faixa5`, `faixa6`, `faixa7`, `faixa8`, `faixa9`, `faixa10`, `tipo`) VALUES (NULL, '$nome', '$telefone', '$email', '$cidade', '$origem','$agora', 1, '$faixa1', '$faixa2', '$faixa3', '$faixa4', '$faixa5', '$faixa6', '$faixa7', '$faixa8', '$faixa9','$faixa10', '$tipo');";

    $rsIndicacao = mysqli_prepare($connCotador ,$qsqlIndicacao);
    $rsIndicacao = mysqli_stmt_execute($rsIndicacao);
    $last_id = mysqli_insert_id($connCotador);

    $qsqlAgenda = "Insert Into tbi_agenda (id, data, agenda, situacao, id_indicacao) values (NULL, '$agora', 'Criação', 1, $last_id)";

    $rsAgenda = mysqli_query($connCotador, $qsqlAgenda);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Cotação Planos de Saúde</title>
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
    <meta name="description"  	content="A melhor cotação de planos do mercado." />
    <meta name="keywords" 		content="Cotação Planos de Saúde, Planos de Saúde Cotação, Preços Planos de Saúde" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Cotação Planos de Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="A melhor cotação de planos do mercado.">
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
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <span class="text-muted">Resultado Simulação de Planos</span></p>
		  <div class="clear">
            <h1>Pedimos mil desculpas!<br>
                <span class="h2">No momento nosso serviço de cotação está fora do ar.</span></h1>
                <p>Mas não se preocupe, em breve um de nossos consultores entrará em contato com uma cotação completa para você.</p>
      </div>
    </section>

	<?php
        include("../../inc/footer.php");
    ?>

</body>
</html>
