<?php
   include "../../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Porto Saúde</title>
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
    <meta name="description"  	content="A Porto Seguro desenhou seus planos de saúde empresarias buscando o equilíbrio do qualidade de vida dos colaboradores e os investimentos da empresa, com isso possui hoje uma das melhores relação entre custo e benefício quando se trata de planos de saúde." />
    <meta name="keywords" 		content="Porto Saúde, Porto Seguro Saúde, Porto Planos de Saúde, Porto Seguro Planos de Saúde, Planos de Saúde Porto, Planos de Saúde Porto Seguro" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Porto Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="A Porto Seguro desenhou seus planos de saúde empresarias buscando o equilíbrio do qualidade de vida dos colaboradores e os investimentos da empresa, com isso possui hoje uma das melhores relação entre custo e benefício quando se trata de planos de saúde."">
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
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <a href="<?php echo $server.$url."/pag/operadoras/";?>" class="navegacao">Operadoras</a> | <span class="text-muted">Porto Saúde</span></p>
		  <div class="clear">
            <h1>Porto Saúde<br>
                <span class="h2">Não importa o tamanho de sua empresa, a Porto Saúde tem um plano sob medida para cuidar do seu negócio.</span></h1>
            <!-- Listagem das operadoras -->
            <div class="row m-y-5">
            <div class="col-12 col-md-6 header--img">
                <img src="../../../img/logos/porto-saude.webp" alt="Logo Porto Saúde" title="Logo Porto Saúde">
            </div>
            <div class="col-12 col-md-6">
                <p>Com a qualidade assegurada pela marca Porto Seguro a Porto Saúde está completando 30 anos com mais de 8.200 empresas seguradas, cerca de 1 milhão de beneficiários no saúde e odonto e mais de 30 mil prestadores de serviço. </p>
                <p>Conta com um portfólio de produtos completos, com e sem coparticipação e planos de saúde com ou sem reembolso. </p>
            </div>
        </div>
        <div class="row m-y-5">
            <div class="col-12 col-md-6">
                <h2>Diferenciais dos Planos da Porto Saúde</h2>
                <ul class="m-x-1">
                  <li>Qualidade Porto</li>
                  <li>Cobertura extra ROL da ANS</li>
                  <li>Time médico Porto - , com 27 especialidades e mais de 215 médicos, distribuídos em 245 endereços. E sem cobrança de coparticipação</li>
                  <li>Programas de promoção a saúde</li>
                  <li>Canais de consulta à Rede Referenciada App, Site , WatsApp , Central de Atendimento, Chatbot</li>
                  <li>Orientação Médica Telefônica - Profissionais da área da saúde, 24 horas por dia, para orientar o segurado por telefone em situações de emergência e esclarecer dúvidas sobre alimentação, qualidade de vida, cuidados pessoais, vacinação, epidemias, pandemias, dosagem de medicamentos, medidas preventivas, sintomas, a especialidade a ser consultada de acordo com a necessidade,</li>
                  <li>Timeline de Reembolso e internações eletivas;</li>
                  <li>Família Ouro Max com Laboratório Alta e Hospital Sírio Libanês com equipe médica não referenciada;</li>
                  <li>Descontos em farmácias</li>
                  <li>Atendimento Psicológico Online</li>
                  <li>Alô Saúde telemedicina com atendimento médico 24h, 7 dias da semana por vídeo chamada pelo aplicativo; </li>
                  <li>Teatro Porto com 30% de desconto* e clientes</li>
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
                              WHERE TOP.id = 26
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


    	</div>
      <h2>Promoção a Saúde | Porto Saúde</h2>
        <ul>
          <li>Preventivo Cálculo Renal Programa que gerencia e acompanha possíveis eventos ou reincidências de cálculo renal. Oferece orientações de hábitos saudáveis e nutricionais, acompanhamento de médicos especialistas, estudo metabólico, gerenciamento à distância com enfermeiros.</li>
          <li>Programa Saúde Emocional Nossa equipe de psicólogos apoiará no primeiro contato com identificação do melhor recurso para tratamento de saúde emocional, acompanhando durante 12 meses em todo processo e direcionando para profissionais especializados. Contamos também com atendimento psicológico online 24 horas por dia, 7 dias por semana.</li>
          <li>Programa Gestante Mais Saudável Acompanhamento personalizado por enfermeiras obstetras, nutricionistas, educadores físicos e médicos via telefone, desde a descoberta da gestação até o puerpério, com contatos mensais ativos e a possibilidade de receber contatos telefônicos sobre dúvidas durante a gestação, parto e pós parto.</li>
          <li>Selo Promoção da Saúde É um programa de vantagens que engaja a empresa e seus colaboradores na adesão aos programas de promoção à saúde e qualidade de vida, incentivando uma cultura de bem estar nos ambientes corporativos.</li>
          <li>Porto Mais Saudável Suporte e monitoramento a distância com nutricionistas e educadores físicos, que apoiam na adesão a hábitos saudáveis, através sobre perda de peso, reeducação alimentar, alimentação infantil, atividades físicas, entre outras.</li>
          <li>Programa Saúde Mais Acompanhamento integral da saúde, em que um médico da família, com uma equipe multiprofissional, cuida do paciente em todos os momentos da sua vida.</li>
          <li>Mapeamento Saúde Eletrônico É possível conhecer o perfil de saúde da população e adotar estratégias diante dos resultados identificados, direcionando para hábitos mais saudáveis e apoio no desenho de metas e ações de Promoção à Saúde para os colaboradores.</li>
          <li>Programa Preventivo Coluna (abrangência em São Paulo e Grande São Gerenciamento e acompanhamento de dores crônicas da coluna com suporte multidisciplinar formado por médicos especialistas, acupuntura, fisioterapia e acompanhamento à distância com enfermeiros.</li>
          <li>Programa Oncoporto (abrangência em São Paulo e Grande São Suporte ao paciente e seus familiares por meio de equipe especializada, apoiando o durante a jornada de seu tratamento.</li>
          <li>Programa Infância Mais Saudável (abrangência em São Paulo e Grande São Paulo) Modelo de atendimento integral voltado para pais e filhos, que buscam informação e tratamento para crianças com sobrepeso. Atuação através de equipe multidisciplinar.</li>
          <li>Programa LongeVidade (abrangência em São Paulo e Grande São Paulo) Voltado para o público 5 0 +, o programa oferece apoio de uma equipe multiprofissional, com o acompanhamento de um médico da família, para avaliar e criar um plano de ação para cuidar da saúde.</li>
        </ul>
        <section class="botoes container">
            <!--<a href="" class="btn__botoes"><i
                    class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
            -->
            <a href="../../simulacao/" class="btn__botoes"><i
                    class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
            <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                    class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
        </section>
        <h2>Canais Exclusivos de Atendimento ao Cliente</h2>
        <p>A Porto Saúde sempre disponível para te auxiliar no que for preciso 24 horas por dia dia, 7 dias na semana.</p>
        <h4 class="m-y-2">Atendimento Telefônico e Autosserviços</h4>
        <ul>
          <li>Aplicativo Porto Saúde e Odonto, disponível para IOS e Android</li>
            <ul>
              <li>Acesso a carteirinha virtual do titular e seus dependentes</li>
              <li>Login de acesso por biometria</li>
              <li>Rede credenciada por geolocalização</li>
              <li>Lista de prestadores favoritos</li>
              <li>Integração com aplicativos de mobilidade</li>
              <li>Telemedicina, Alô Saúde</li>
              <li>Solicitação e acompanhamento de reembolso</li>
            </ul>
          <li>WhatsApp Porto Saúde</li>
          <li>Chat On-line direto no portal da Porto</li>
          <li>Área do cliente</li>
          <li>Central de Atendimento</li>
          <li>Ouvidoria Porto</li>
        </ul>
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

        include("../../../inc/footer.php");?>
</body>
</html>
