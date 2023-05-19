<?php
   include "../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Os melhores Planos de Saúde</title>
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
    <meta name="description"  	content="A Astro Saúde é uma corretora especializada em planos de saúde, equipe treinada para proporcionar o melhor atendimento aos nossos clientes." />
    <meta name="keywords" 		content="Astro Saúde, Pilon Vida e Saúde, corretora de planos de saúde, consultores de planos de saúde" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Os Melhores Planos de Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="A Astro Saúde é uma corretora especializada em planos de saúde, equipe treinada para proporcionar o melhor atendimento aos nossos clientes.">
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

    <section class="container main-sobre main-home">
    	<div class="min-banner" style="background:#949594 url(../../img/banner/banner-sobre-astro-saude.jpg) center no-repeat;"><img src="../../img/logo-astro-saude-branco.png
            " title="Astro Saúde" alt="Astro Saúde" />
        </div>
        <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <span class="text-muted">Sobre</span></p>
        <div class="clear">
            <h1 class="text-center">Astro Saúde!<br>
            <span class="h2 text-center">Seu bem-estar em boas mãos desde 2012 - Astro planos de saúde.</span>
            </h1>
            <p>A ASTRO SAÚDE iniciou suas atividades em 2012 por  profissionais que já comercializavam planos de saúde há mais de 10 anos. Nosso objetivo  era utilizar nosso expertise adquirido ao longo desses 10 anos no mercado e criar uma corretora de seguros especializada na área de saúde que atuasse em todo Vale do Paraíba. </p>
            <p>Hoje a ASTRO Saúde possui sede própria no centro de  São José dos Campos, é formada por profissionais especialistas em planos de  saúde, altamente qualificados para auxiliar os clientes a todo momento: desde o  primeiro contato até mesmo após a implantação do plano e necessidades de sua  utilização.</p>
            <p>Nesses mais de 10 anos de mercado temos muito orgulho em já ter conquistado  uma carteira expressiva de clientes com mais de 20.000 vidas, sendo:</p>
            <ul>
                <li>1.018  clientes empresariais</li>
                <li>9.810  clientes individuais ou familiares</li>
            </ul>
            <p>Trabalhamos com as melhores opções de planos de saúde de São José dos Campos e região, contamos com uma equipe qualificada e atualizada às  mudanças de mercado o que torna nossa equipe especializada na área de saúde.</p>
            <p>Nos colocamos à sua disposição para te auxiliar na tarefa de  escolher qual o melhor plano de saúde, considerando sempre o melhor custo x  benefício dentro de sua necessidade. </p>
        </div>
    </section><!-- .container -->
    <section class="botoes container">
            <!--<a href="" class="btn__botoes"><i
                    class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
            -->
            <a href="../../simulacao/" class="btn__botoes"><i
                    class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
            <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                    class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
        </section>
	<?php
        include("../../inc/footer.php");?>
</body>
</html>
