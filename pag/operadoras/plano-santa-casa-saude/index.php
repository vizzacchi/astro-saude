<?php
   include "../../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Plano Santa Casa Saúde</title>
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
    <meta name="description"  	content="Plano da Santa Casa Saúde o plano que funciona quando você precisa, planos individuais e empresariais acesse e veja todas as características e benefícios do plano de saúde da Santa Casa." />
    <meta name="keywords" 		content="Plano Santa Casa Saúde, Plano de Saúde Santa Casa, Plano Santa Casa SJC, Plano Santa Casa São José dos Campos " />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Plano Santa Casa Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Plano da Santa Casa Saúde o plano que funciona quando você precisa, planos individuais e empresariais acesse e veja todas as características e benefícios do plano de saúde da Santa Casa.">
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
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <a href="<?php echo $server.$url."/pag/operadoras/";?>" class="navegacao">Operadoras</a> | <span class="text-muted">Plano Santa Casa Saúde</span></p>
		  <div class="clear">
            <h1>Plano Santa Casa Saúde<br>
                <span class="h2">O plano que funciona quando você mais precisa!</span></h1>
            <!-- Listagem das operadoras -->
            <div class="row m-y-5">
            <div class="col-12 col-md-6 header--img">
                <img src="../../../img/logos/plano-santa-casa-saude.webp" alt="Logo Plano Santa Casa Saúde" title="Logo Plano Santa Casa Saúde">
            </div>
            <div class="col-12 col-md-6">
                <p>São mais de 30 anos trabalhando para cuidar da saúde e propiciar mais qualidade de vida para milhares de pessoas, são mais de 1.000 médicos credenciados em todas as especialidades médicas, 18 (dezoito) hospitais e dezenas de clínicas e laboratórios para atender a mais de 80.000 beneficiários. Plano Santa Casa Saúde "o plano que funciona quando você precisa".</p>
            </div>
        </div>
        <div class="row m-y-5">
            <div class="col-12 col-md-6">
                <h2>Diferenciais dos Planos da Santa Casa Saúde</h2>
                <ul class="m-x-1">
                    <li>Maior rede-credenciada de hospitais no Vale do Paraíba + de 18 hospitais</li>
                    <li>Agendamento de consultas e exames on-line</li>
                    <li>Opção de plano com atendimento em todo Vale do Paraíba e Litoral Norte</li>
                    <li>Urgência e Emergência nacional pelo sistema <a href="../../perguntas-e-respostas/#abramge" target="new" >Abramge</a>  e rede Filantrópica</li>
                    <li>APP digital com acesso a carteirinha, boletos, guia médico e autorizador on-line</li>
                    <li>Clínica Saber Viver</li>
                    <li>Programas de prevenção a saúde</li>
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
        <h2>Hospitais de Destaque do Plano Santa Casa Saúde</h2>
        <p>A rede hospitalar, hospitais que atendem o Plano da Santa Casa Saúde mudam conforme o plano contratado. Verifique a rede-credenciada de cada plano fazendo uma <a href="../../simulacao">Simulação</a> . </p>
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
                              WHERE TOP.id =3
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
        <section class="plano">
            <hr m-y-5>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2> <a href="../../perguntas-e-respostas/#carencias" target="new">Carências | Plano Santa Casa Saúde</a></h2>
						            <p>Os prazos de carências serão contados a partir da data de início do plano, ou seja, da data de vigência do contrato.</p>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Cobertura</th>
                                        <th scope="col">Portabilidade</th>
                                        <th scope="col">Contratual</th>
                                        <th scope="col">Redução 1</th>
                                        <th scope="col">Redução 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Urgência e Emergência</td>
                                        <td>24 horas</td>
                                        <td>24 horas</td>
                                        <td>24 horas</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Consultas</td>
                                        <td>24 horas</td>
                                        <td>30 dias</td>
                                        <td>24 horas</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Exames Simples</td>
                                        <td>24 horas</td>
                                        <td>30 dias</td>
                                        <td>24 horas</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Exames especiais e procedimentos de alta complexidade</td>
                                        <td>24 horas</td>
                                        <td>180 dias</td>
                                        <td>180 dias</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Internação para tratamentos psiquiátricos</td>
                                        <td>24 horas</td>
                                        <td>180 dias</td>
                                        <td>180 dias</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Internação</td>
                                        <td>24 horas</td>
                                        <td>180 dias</td>
                                        <td>180 dias</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Parto</td>
                                        <td>24 horas</td>
                                        <td>300 dias</td>
                                        <td>300 dias</td>
                                        <td>300 dias</td>
                                    </tr>
                                    <tr>
                                        <td>Doenças e/ou Lesões preexistentes</td>
                                        <td>24 horas</td>
                                        <td>24 meses</td>
                                        <td>24 meses</td>
                                        <td>24 meses</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul>
                            <li>Portabilidade – Requisitos básicos:</li>
                            <ul>
                                <li>Clientes devem estar ativos e adimplentes no plano atual; </li>
                                <li>Clientes sem pré-existência devem ter, no mínimo, 2 (dois) anos ininterruptos no plano anterior;</li>
                                <li>Clientes com pré-existência devem ter, no mínimo, 3 (três) anos ininterruptos no plano anterior;</li>
                                <li>Plano atual deve ser compatível ao plano da Santa Casa conforme guia do beneficiário da ANS (Guia de Planos (ans.gov.br)). </li>
                            </ul>
                            <li>Carência Contratual – válida para todos os beneficiários com ou sem plano até 58 anos 11 meses e 29 dias</li>
                            <li>Redução1 – Válido para clientes até 58 anos, 11 meses e 29 dias que tenha permanecido no mínimo 3 (doze) meses em plano anterior pertencente a uma operadora/seguradora com registro na ANS, e que o plano esteja ativo ou cancelado a menos de 30 dias.</li>
                            <li>Redução2 – Válido para clientes até 58 anos, 11 meses e 29 dias que tenha permanecido no mínimo 12 (doze) meses em plano anterior pertencente a uma operadora/seguradora com registro na ANS, e que o plano esteja ativo ou cancelado a menos de 30 dias.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Documentos necessários para análise de redução de <a href="../../perguntas-e-respostas/#carencias" target="new">Carências</a>:</h2>
                        <ul>
                            <li>Carta de tempo de permanência atualizada, emitida a menos de 30 dias (pode ser solicitada direto na operadora do plano atual) OU</li>
                            <li>Documentação para comprovar data de início do plano anterior: cópia do contrato OU boleto de mais de 1 ano com comprovante de pagamento OU cópia da carteirinha com data de início OU informe de rendimento para imposto de renda E</li>
                            <li>Cópia dos 3 últimos boletos pagos com comprovantes de pagamento</li>
                        </ul>
                        <p>
                            Obs.: Só será feito redução de carência para beneficiários que estejam vindo de <a href="../../perguntas-e-respostas/#plano_regulamentado">planos regulamentados</a>  a Lei 9656 e que o plano anterior não tenha sido cancelado a mais de 30 dias.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Valores de <a href="../../perguntas-e-respostas/#coparticipacao" target="new">Coparticipação</a> | Plano Santa Casa Saúde</h2>
                            <table class="table table-sm table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Procedimento</th>
                                        <th scope="col">Faixa 1</th>
                                        <th scope="col">Faixa 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Consultas</td>
                                        <td>20,00</td>
                                        <td>25,00</td>
                                    </tr>
                                    <tr>
                                        <td>Pronto-Atendimento</td>
                                        <td>25,00</td>
                                        <td>30,00</td>
                                    </tr>
                                    <tr>
                                        <td>Exames/Proc/Ter. Simples</td>
                                        <td>4,00</td>
                                        <td>6,00</td>
                                    </tr>
                                    <tr>
                                        <td>Exames/Proc/Ter.Especiais</td>
                                        <td>20,00</td>
                                        <td>25,00</td>
                                    </tr>
                                    <tr>
                                        <td>Internações</td>
                                        <td>80,00</td>
                                        <td>100,00</td>
                                    </tr>
                                </tbody>
                            </table>

                        <p>Os valores de <a href="../../perguntas-e-respostas/#copartcipacap" target="new">coparticipação</a> são por atendimento. Serão acumulados durante o mês e cobrados mensalmente junto ao boleto da mensalidade do plano.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2> <a href="../../perguntas-e-respostas/#area_comercializacao" target="new">Área de comercialização</a> e de atendimento de cada plano</h2>
                        <h3>Integrado SJC</h3>
                        <p>Comercialização e atendimento nas cidades de São José dos Campos, Jacareí, Santa Branca, Jambeiro, Paraibuna, Monteiro Lobato.</p>
                        <h3>Ideal SJC</h3>
                        <p>Comercialização e atendimento nas cidades de São José dos Campos, Jacareí, Santa Branca, Jambeiro, Paraibuna, Monteiro Lobato.</p>
                        <h3>Integrado Litoral</h3>
                        <p>Comercialização nas cidades de Caraguatatuba, São Sebastião, Ilhabela e Ubatuba, atendimento nas cidades de comercialização e em São José dos Campos.</p>
                        <h3>Ideal Litoral</h3>
                        <p>Comercialização nas cidades de Caraguatatuba, São Sebastião, Ilhabela e Ubatuba, atendimento nas cidades de comercialização e em São José dos Campos.</p>
                        <h3>Integrado Cruzeiro</h3>
                        <p>Comercialização as cidades de Cruzeiro, Lavrinhas, Queluz, Cachoeira Paulista, Silveiras, Canas, Piquete, Areias, São José do Barreiro, Arapeí e Bananal. Atendimento nas cidades de comercialização e São José dos Campos.</p>
                        <h3>Integrado Taubaté-Pinda</h3>
                        <p>Comercialização nas cidades de Taubaté, Pindamonhangaba, Campos do Jordão, Lagoinha, Natividade da Serra, Redenção da Serra, Santo Antonio do Pinhal, São Luis do Paraitinga e Tremembé. Atendimento nas cidades de comercialização e em São José dos Campos.</p>
                        <h3>Integrado Guará-Lorena</h3>
                        <p>Comercialização nas cidades de Guaratinguetá, Lorena, Aparecida, Cachoeira Paulista, Canas, Cunha, Piquete, Potim e Rodeira. Atendimento nas cidades de comercialização e em São José dos Campos.</p>
                        <h3>Livre e Pleno</h3>
                        <p>Comercialização e atendimento nas cidades de São José dos Campos, Jacareí, Santa Branca, Jambeiro, Paraibuna, Monteiro Lobato, Guararema, Caraguatatuba, São Sebastião, Ilhabela, Ubatuba, Caçapava, Taubaté, Redenção da Serra, Natividade da Serra, Tremembé, Pindamonhangaba, Rodeira, Aparecida, Potim, Guaratinguetá, Lorena, Cunha, Canas, Piquete, Cachoeira Paulista, Canas, Lavrinhas, Queluz, Silveiras, Areias, São José do Barreiro, Arapeí, Bananal.</p>
                        <h3>Qualivida</h3>
                        <p>Comercialização e atendimento nas cidades de São José dos Campos e Jacareí.</p>
                        <h4>Importante: a comercialização em determinada cidade não significa que existe rede credenciada naquele município. Para acessar a rede credenciada, consulte o Guia Médico de cada produto.</h4>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2> <a href="../../perguntas-e-respostas/#reembolso" target="new">Reembolso</a></h2>
                            <p>A Santa Casa não trabalha com <a href="../../perguntas-e-respostas/#reembolso" target="new">reembolso</a>.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Quem pode aderir ao plano e documentos necessários</h2>
                        <h3> <a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <h4>Titular</h4>
                        <p>Qualquer beneficiário até 58 anos, 11 meses e 29 dias com CPF válido ou beneficiários de 50 anos ou mais no plano Qualivida.</p>
                        <ul>
                            <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS);</li>
                            <li>Comprovante de endereço em nome do titular atualizado com CEP (conta de água, luz ou telefone).</li>
                        </ul>
                        <h4>Dependentes</h4>
                        <p>Esposo (a) / Companheiro (a) até 58 anos, 11 meses e 29 dias com CPF válido, ou beneficiários de qualquer idade no plano Qualivida.</p>
                        <ul>
                            <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS).</li>
                            <li>Certidão de casamento;</li>
                            <li>Escritura pública de união estável ou Declaração de convívio marital, reconhecida em cartório com duas testemunhas;</li>
                            <li>Comprovação de filhos em comum constando os nomes dos pais (certidão de nascimento ou RG).</li>
                        </ul>
                        <p>Filho (a) e Enteado (a) até 18 anos, 11 meses e 29 dias ou 24 anos, 11 meses e 29 dias se estudante.</p>
                        <ul>
                            <li>Certidão de nascimento (obrigatório para nascidos a partir de 2010) ou RG;</li>
                            <li>CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS).</li>
                        </ul>
                        <p>*Enteados - A inclusão será acatada com Certidão de Casamento ou Declaração de União estável da mãe ou pai, como titular.</p>
                        <p>Menor sob guarda:</p>
                        <ul>
                            <li>Decisão judicial ou Termo de guarda;</li>
                            <li>Certidão de nascimento (obrigatório para nascidos a partir de 2010) ou RG;</li>
                            <li>CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS).</li>
                        </ul>
                        <h4>Responsável Financeiro:</h4>
                            <ul>
                                <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            </ul>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Pessoa Jurídica</a></h3>
                        <p>Qualquer empresa com CNPJ ativo. No caso de MEI e empresários individuais a empresa deve ter mais de 6 meses de abertura.</p>
                        <h4>Documentos da Empresa:</h4>
                        <ul>
                            <li>Contrato social;</li>
                            <li>Cartão CNPJ (atualizado); Inscrição municipal;</li>
                            <li>Inscrição estadual ou Declaração de isenção emitida pelo site da Secretaria da Fazenda ou protocolo;</li>
                            <li>Comprovante de endereço da empresa atualizado com CEP (conta de água, luz ou telefone);</li>
                            <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal) do proprietário e/ou sócios;</li>
                            <li>Declaração de regularidade de pessoa jurídica assinada e autenticada em cartório*.</li>
                        </ul>
                        <p>*Para Microempreendedor Individual (MEI) é necessário o prazo mínimo de 6 meses a contar da data de abertura do CNPJ.</p>
                        <h4>Titular:</h4>
                        <ul>
                            <li>Relação de Fundo de Garantia com guia paga (GFIP) e/ou;</li>
                            <li>Ficha de registro assinada pelo colaborador e pelo responsável do RH com carimbo;</li>
                            <li>Carteira profissional (páginas c/ foto e assinatura, dados pessoais e registro da empresa);</li>
                            <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS);</li>
                            <li>Comprovante de endereço* em nome do titular atualizado com CEP (qualquer um que comprove residência, exceto Net e Sky).</li>
                        </ul>
                        <p>*Este documento não é obrigatório para os contratos PME a partir de 10 beneficiários, desde que a planilha de importação esteja totalmente preenchida.</p>
                        <h4>Dependentes</h4>
                        <p>Esposo(a) / Companheiro(a):</p>
                        <ul>
                            <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS).</li>
                            <li>Certidão de casamento;</li>
                            <li>Escritura pública de união estável ou Declaração de convívio marital, reconhecida em cartório com</li>
                            duas testemunhas;
                            <li>Comprovação de filhos em comum constando os nomes dos pais (certidão de nascimento ou RG).</li>
                        </ul>
                        <p>Filho(a) / Enteado(a)*:</p>
                        <ul>
                            <li>Certidão de nascimento (obrigatório para nascidos a partir de 2010) ou RG;</li>
                            <li>CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS).</li>
                        </ul>
                        <p>*A inclusão será acatada com Certidão de Casamento ou Declaração de União estável da mãe ou pai, como titular.</p>
                        <p>Menor sob guarda:</p>
                        <ul>
                            <li>Decisão judicial ou Termo de guarda;</li>
                            <li>Certidão de nascimento (obrigatório para nascidos a partir de 2010) ou RG;</li>
                            <li>CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS).</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Condições comerciais | Regras para contratação</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Plano Pessoa Física</a></h3>
                        <p>Os planos da Santa Casa podem ser comercializados para qualquer beneficiário que possua CPF e Cartão do SUS, a contratação é online e segura.</p>
                        <p>Para contratarem o plano da Santa Casa menores de 18 anos precisam de um responsável legal, maior de 18 anos para assinar o contrato.</p>
                        <p>Todo o processo de vendas é on-line, após o preenchimento do contrato é enviado um link para você, cliente, preencher a declaração de saúde e fazer a assinatura eletrônica.</p>
                        <p>Com a Astro Saúde esse processo é rápido e você consegue acompanhar cada passo.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Plano Empresarial</a></h3>
                        <p>Pode ser contratado pelo CNPJ para seus sócios, funcionários e seus respectivos dependentes. Empresas MEI e Empresarial Individual devem ter mais de 6 meses de abertura do CNPJ, o CNPJ deve estar ativo, pode ser contrata a partir de 1 (uma) vida e todos os titulares devem ter vínculo empregatício com o CNPJ.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2> <a href="../../perguntas-e-respostas/#vigencia" target="new">Vigência</a>, prazo para início do plano e vencimentos</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <p>A <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a>, que é a data de início do plano, pode ser escolhida pelo cliente a partir de 4 dias úteis após a conclusão do formulário de contratação e envio das cópias dos documentos. A <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a> não pode ocorrer em finais de semana ou feriados.</p>
                        <div class="d-flex justify-content-center align-content-center">
                            <img src="../../../img/vencimentosSantaCasa.png" alt="Tabela de vigências e Vencimentos Plano Santa Casa" class="img-fluid">
                        </div>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <p>A <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a>, data de início do plano, pode ser escolhida pelo cliente a partir de 6 dias úteis após o preenchimento do formulário de contratação e envio das cópias dos documentos, a <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a> não pode ocorrer em finais de semana ou feriados.</p>
                        <div class="d-flex justify-content-center align-content-center">
                            <img src="../../../img/vencimentosSantaCasa.png" alt="Tabela de vigências e Vencimentos Plano Santa Casa" class="img-fluid">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2><a href="../../perguntas-e-respostas/#fidelidade" target="new">Fidelidade</a>, regras para cancelamento</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <p>Os planos pessoa física da Santa Casa não possuem <a href="../../perguntas-e-respostas/#fidelidade" target="new">fidelidade</a>, podendo ser cancelados a qualquer momento sem cobrança de multa, o cancelamento do plano pode ser solicitado presencialmente, pelo telefone na central de atendimento ao cliente ou até mesmo pelo WhatsApp da Santa Casa. Reforçamos a importância de comunicar a Santa Casa sobre o cancelamento do plano para não ficar com dívida na operadora.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <p>Os planos empresariais da Santa Casa possuem <a href="../../perguntas-e-respostas/#fidelidade" target="new">fidelidade</a> de 12 meses, caso o plano seja cancelado antes desse período estará sujeito a multa , do valor correspondente a 03 (três) contribuições integrais, calculadas pela média das contribuições efetuadas ao plano antes da sua notificação.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Taxas para contratação</h2>
                        <p>Os planos da Santa Casa Saúde não possuem taxa para contratação</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2><a href="../../perguntas-e-respostas/#reajuste" target="new"> Reajuste</a> das mensalidades</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <h4>Reajuste Financeiro</h4>
                        <p>O índice de reajuste determinado pela <a href="https://www.gov.br/ans/pt-br" target="_blank"> ANS</a> (Agência Nacional de Saúde), ocorrem na data de aniversário de assinatura do contrato.</p>
                        <h4>Reajuste por Faixa Etária</h4>
                        <p>O reajuste por faixa etária ocorre aos 18 anos e de 4 em 4 anos até o beneficiário completar 59 anos. Os percentuais são fixos e estão definidos no contrato.</p>

                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <h4><a href="../../perguntas-e-respostas/#reajuste" target="new">Reajuste</a> Financeiro</h4>
                        <p>Para empresas até 29 vidas, o índice é calculado sobre a <a href="../../perguntas-e-respostas/#sinistralidade" target="new">sinistralidade</a> de toda carteira de clientes empresariais da Santa Casa Saúde de 1 a 29 vidas, e ocorre na data de aniversário do contrato</p>
                        <h4><a href="../../perguntas-e-respostas/#reajuste" target="new">Reajuste</a> por Faixa Etária</h4>
                        <p>O <a href="../../perguntas-e-respostas/#reajuste" target="new">reajuste</a> por faixa etária ocorre aos 18 anos e de 4 em 4 anos até o beneficiário completar 59 anos. Os percentuais são fixos e estão definidos no contrato.</p>
                    </div>
                </div>

        </section>



    	</div>
    </section><!-- .container -->
      <div class="clear">
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

	<?php

        include("../../../inc/footer.php");?>
</body>
</html>
