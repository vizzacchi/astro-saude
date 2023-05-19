<?php
   include "../../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Sulamérica Saúde</title>
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
    <meta name="description"  	content="Com mais de 120 anos de história a Sulamérica Saúde possui o portfólio de produtos mais desejados do mercado, acesse e confira." />
    <meta name="keywords" 		content="Sulamérica, Sulamérica Saúde, Planos Sulamérica, Planos de Saúde Sulamérica, Sulamérica Planos de Saúde, Sulamérica São José dos Campos" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Sulamérica Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Com mais de 120 anos de história a Sulamérica Saúde possui o portfólio de produtos mais desejados do mercado, acesse e confira.">
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

        include("../../../inc/scripts.php");
    ?>

</head>
<body>
<a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow"><i class="bi bi-whatsapp whatsapp"></i></a>
	<header class="main-banner banner banner-top" style="background:#00A8C5 url(<?php echo $server.$url.'/img/banner/banner-home-astro-saude.webp'?>) no-repeat;">
		<?php

            include ("../../../inc/nav.php");
        ?>
	</header>
    <p>&nbsp;</p>
    <section class="container main-home">
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <a href="<?php echo $server.$url."/pag/operadoras/";?>" class="navegacao">Operadoras</a> | <span class="text-muted">Sulamérica Saúde</span></p>
		  <div class="clear">
            <h1>Sulamérica Saúde<br>
                <span class="h2">Saúde Integral | Sempre cuidando do que faz bem!</span></h1>
            <!-- Listagem das operadoras -->
            <div class="row m-y-5">
            <div class="col-12 col-md-6 header--img">
                <img src="../../../img/logos/sulamerica-saude.webp" alt="Logo Sulamérica Saúde" title="Logo Sulamérica Saúde">
            </div>
            <div class="col-12 col-md-6">
                <p>A Sulamérica Saúde garante a seus beneficiários qualidade de vida e bem-estar, com planos de saúde com ampla rede referenciada, vantagens, benefícios, descontos e programas especiais de promoção a saúde para proporcionar a tranquilidade que todos merecem.</p>
                <p>O seu portfólio de planos conta com planos empresariais a partir de 2 vidas e planos de saúde coletivo por adesão, que podem ser contratados por pessoas físicas.</p>
                <p>São muitas opções de planos de saúde, os quais se diferenciam por rede credenciada e valores de reembolso.</p>
            </div>
        </div>
        <div class="row m-y-5">
            <div class="col-12 col-md-6">
                <h2>Diferenciais dos Planos da Sulamérica Saúde</h2>
                <ul class="m-x-1">
                  <li>Ampla rede credenciada, com hospitais da Rede Dor</li>
                  <li>Abrangência nacional</li>
                  <li>Médico na Tela Especialidades - Agendamento de teleconsulta com diversas especialidades direto pelo APP Sulamérica</li>
                  <li>Médico na Tela Pronto Atendimento - Realizar uma consulta diretamente do App SulAmérica Saúde, com médicos de plantão disponíveis 24h por dia.</li>
                  <li>Isenção total de carência, incluindo parto para grupos com mais de 10 vidas</li>
                  <li>Orientação Médica Telefônica - Profissionais da área da saúde, 24 horas por dia, para orientar o segurado por telefone em situações de emergência e esclarecer dúvidas sobre alimentação, qualidade de vida, cuidados pessoais, vacinação, epidemias, pandemias, dosagem de medicamentos, medidas preventivas, sintomas, a especialidade a ser consultada de acordo com a necessidade,</li>
                  <li>Psicólogo na Tela - O serviço oferece sessões de Psicoterapia por vídeo, 24h, todos os dias, de onde você estiver.</li>
                  <li>Remissão de 2 anos</li>
                  <li>Seguro viagem nacional e internacional a partir do plano Especial 100</li>
                  <li>Aplicativo Sulamérica Saúde - carteirinha virtual, solicitação de reembolso, consulta de rede e muito mais</li>
                  <li>Descontos em farmácias</li>
                  <li>Parceria com Gympass para os beneficiários da Sulamérica Saúde utilizarem centenas de academias em todo Brasil</li>
                  <li>Coberturas Adicionais a Lei 9.656/98</li>
                  <ul>
                    <li>Escleroterapia - Tratamento dos vasinhos e microvarizes, 12 sessões/ano.</li>
                    <li>Fonoaudiologia - Avaliações e terapias fonoaudiológicas, 30 sessões ano. </li>
                    <li>Lab IN - É um benefício que facilita a realização de exames (sangue, urina e fezes) com agendamento rápido pelo APP Saúde e coleta no local de escolha do beneficiário.</li>
                    <li>Psicomotricidade - Tratamento indicado para pessoas com dificuldades/atrasos no desenvolvimento sensorial, motor, mental e psíquico, 30 sessões/ano.</li>
                    <li>Transplantes (além dos cobertos por lei – rim, córnea e medula óssea) - Coração, pâncreas, pâncreas-rim, pulmão e fígado, incluindo despesas assistenciais com doador vivo.</li>
                  </ul>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div class="header--img">
                    <img src="../../../img/diferenciais.jpeg" alt="Diferenciais do Plano de Saúde" title="Diferenciais do Plano de Saúde" class="img-fluid img-diferenciais">
                </div>
            </div>
        </div>
        <section class="botoes container">
            <!--<a href="" class="btn__botoes"><i
                    class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
            -->
            <a href="../../simulacao/" class="btn__botoes"><i
                    class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
            <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                    class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
        </section>
        <hr>
        <!--- Listar Hospitais que atendem o plano -->
        <h2>Sulamérica Saúde Ativa</h2>
        <p>A SulAmérica tem o compromisso de apoiar as pessoas na busca por uma vida saudável e ajudá-las a ter uma atitude de mudança, adotando hábitos para viverem cada vez mais e melhor. Com o SulAmérica Saúde PME, a empresa conta com um programa de saúde completo com iniciativas voltadas para a saúde e o bem-estar dos colaboradores. Confira:</p>
        <ul>
          <li>Atenção no Alto Risco</li>
          <li>Coluna Ativa</li>
          <li>Coluna In Company</li>
          <li>Doenças Crônicas</li>
          <li>Envelhecimento Saudável</li>
          <li>Futura Mamãe</li>
          <li>Idoso Bem Cuidado</li>
          <li>Oncologia</li>
          <li>Oncorede</li>
          <li>Parto Adequado</li>
          <li>Ortopedia</li>
          <li>Única Mente</li>
          <li>Cuidado na Medida</li>
          <li>Cicatrizar</li>
        </ul>
        <h2>Reembolso Sulamérica Saúde</h2>
        <p>Para oferecer planos ainda mais completos e dar o direito de escolha a seus clientes a Sulamérica Saúde disponibiliza planos de saúde com reembolso, veja os valores de reembolso para consultas dos planos da Sulamérica Saúde: </p>
        <h4 class="m-y-2">Reembolso para planos empresariais:</h4>
        <table class="table table-sm table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Planos</th>
                                        <th scope="col">Exato</th>
                                        <th scope="col">Clássico</th>
                                        <th scope="col">Especial R1</th>
                                        <th scope="col">Especial R2</th>
                                        <th scope="col">Especial R3</th>
                                        <th scope="col">Executivo R1</th>
                                        <th scope="col">Executivo R2</th>
                                        <th scope="col">Executivo R3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Consultas Eletivas</td>
                                        <td>81,00</td>
                                        <td>103,50</td>
                                        <td>153,00</td>
                                        <td>211,50</td>
                                        <td>301,50</td>
                                        <td>337,50</td>
                                        <td>427,50</td>
                                        <td>571,50</td>
                                      </tr>
                                </tbody>
                            </table>
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
                              WHERE TOP.id = 9
                              ORDER BY TE.destaque DESC, TE.nome_abrev";

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
                                <div class="operadora-logo btn-card">
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
        <div class="clear">
          <p class="m-x-3">Quer saber mais sobre os planos de saúde mais desejados da região, fale com um especialista pelo WhatsApp ou faça uma simulação e veja as opções e valores dos planos. </p>
          <section class="botoes container">
              <!--<a href="" class="btn__botoes"><i
                      class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
              -->
              <a href="../../simulacao/" class="btn__botoes"><i
                      class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
              <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                      class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
          </section>
        </div>

    	</div>
    </section><!-- .container -->

	<?php

        include("../../../inc/footer.php");?>
</body>
</html>
