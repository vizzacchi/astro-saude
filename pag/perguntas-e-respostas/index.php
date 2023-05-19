<?php
    include "../../inc/inc_coneccao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Perguntas e Respostas de Planos de Saúde</title>
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
    <meta name="description"  	content="Tire todas as suas dúvidas relacionadas a planos de saúde, veja as respostas das principais perguntas de nossos clientes" />
    <meta name="keywords" 		content="FAQ planos de saúde, perguntas e respostas planos de saúde, dúvidas planos de saúde, perguntas planos de saúde, principais termos planos de saúde" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Perguntas e respostas">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Tire todas as suas dúvidas relacionadas a planos de saúde, veja as respostas das principais perguntas de nossos clientes">
    <meta property="og:image" 			content="https://www.astrosaude.com.br/imagens/facebook.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

	<!-- CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css";>
    <link rel="stylesheet" href="../../css/style.css";>
    <link rel="stylesheet" href="../../css/responsive.css";>
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
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <span class="text-muted">Perguntas e Respostas</span></p>
		    <section class="plano">
            <h1 class="text-center m-y-5">Principais Perguntas e Respostas de <br> Planos de Saúde</h1>
              <div class="perguntas pesquisa">
                <p class="text-center">Pesquise e tire suas dúvidas sobre os principais assuntos relacionados a planos de saúde.</p>
                <div class="perguntas form-pergunta">
                  <div class="row w-100">
                      <div class="col-12 col-md-9 col-lg-9" >
                          <input type="text" class="form-control m-y-2" placeholder="Termo da pesquisa"
                          aria-label="Pesquisar" id="txtPesquisar" name="txtPesquisar">
                      </div>
                      <div class="col-12 col-md-3 col-lg-3 text-center m-y-2" >
                          <button type="button" class="btn btn-primary" id="btnPesquisar" onClick="pesquisar()">
                            Pesquisar</button>
                      </div>
                    </div>
                </div>
                <p class="text-center">Se não conseguiu esclarecer sua dúvida, mande sua pergunta para nós, responderemos dentro de 1 dia útil e sua dúvida poderá ser inserida em nosso portal, se você autorizar.</p>
              </div>
            <hr>
            <div id="perguntas">
              <?php
                $qsql = "Select * from tb_pergunta";
                $rs = mysqli_query($conn,$qsql);
                while($row = mysqli_fetch_array($rs)){
                  if($row['imagem'] != "")
                    $imagem = "<div class='text-center w-100'>
                                <img src='../../img/tipos_planos.png' class='img-fluid' alt='".$row['pergunta']."' title='".$row['pergunta']."'>
                                </div>";
                  else $imagem = "";
                   echo "<div class='perguntas conteudo-operadoras' id='".$row['tag']."'>
                           <div class='perguntas subconteudo'>
                              <div class='perguntas pergunta'>
                                <h2>".$row['pergunta']."</h2>"
                                .$row['resposta']."
                              </div>".
                              $imagem."
                            </div>
                        </div>
                        <hr>";
                }
              ?>
            <p>Para nós o atendimento ao cliente está em primeiro lugar, ficou com alguma dúvida, entre em contato pelos canais de atendimento ou registre sua dúvida que te responderemos em até 1 dia útil.</p>
            </div>
        </section>
    </main>
	
    <script src="../../js/pages/perguntasRespostas.js"></script>
	<?php 
		include "../../inc/footer.php";
	?>
</body>

</html>
