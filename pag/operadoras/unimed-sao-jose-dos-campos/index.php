<?php
   include "../../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Unimed São José dos Campos</title>
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
    <meta name="description"  	content="A maior operadora de São José dos Campos e Região, a Unimed São José dos Campos com 50 anos de mercado e mais de 700 médicos cooperados em sua rede credenciada é uma das melhores opções em planos de saúde em São José dos Campos." />
    <meta name="keywords" 		content="Unimed, Unimed São José dos Campos, planos de saúde Unimed, Unimed Planos de Saúde, Preços Unimed, Corretor unimed, Tabela Unimed" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | Unimed São José dos Campos">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="A maior operadora de São José dos Campos e Região, a Unimed São José dos Campos com 50 anos de mercado e mais de 700 médicos cooperados em sua rede credenciada é uma das melhores opções em planos de saúde em São José dos Campos..">
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
	<header class="main-banner banner banner-top" style="background:#00A8C5 url(<?php echo $server.$url.'/img/banner/banner-home-astro-saude.webp'?>) no-repeat;">
		<?php

            include ("../../../inc/nav.php");
        ?>
	</header>
    <p>&nbsp;</p>
    <section class="container main-home">
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <a href="<?php echo $server.$url."/pag/operadoras/";?>" class="navegacao">Operadoras</a> | <span class="text-muted">Unimed São José dos Campos</span></p>
		  <div class="clear">
            <h1>Plano Unimed São José dos Campos<br>
                <span class="h2">O plano de saúde que escuta o seu coração!</span></h1>
            <!-- Listagem das operadoras -->
            <div class="row m-y-5">
            <div class="col-12 col-md-6 header--img">
                <img src="../../../img/logos/unimed-sao-jose-dos-campos.webp" alt="Logo Unimed São José dos Campos" title="Logo Unimed São José dos Campos">
            </div>
            <div class="col-12 col-md-6">
                <p>A história da Unimed São José dos Campos começou a mais de 50 anos, hoje graças a um trabalho focado no atendimento a seus clientes a Unimed se consolida no mercado como sendo a maior Operadora de Saúde do Vale do Paraíba, com mais de 100 mil beneficiários e 700 médicos cooperados. Conta com uma estrutura completa com centro de atendimento, pronto atendimentos, hospital dia, hospital Santos Dumont Caraguatatuba e hospital Santos Dumont São José dos Campos um dos mais modernos e bem equipados da região, especializado em cirurgias de média e alta complexidade.</p>
            </div>
        </div>
        <div class="row m-y-5">
            <div class="col-12 col-md-6">
                <h2>Diferenciais dos Planos da Unimed São José dos Campos</h2>
                <ul class="m-x-1">
                  <li>Nota máxima no IDSS (Índice de Desenvolvimento da Saúde Suplementar)</li>
                  <li>APP Unimed – tudo em um só lugar, guia médico, carteirinha, autorizações, extrato de utilização, boletos e muito mais.</li>
                  <li>SOS Unimed 24 horas – única operadora na região que oferece resgate 24 horas nas cidades de São José dos Campos e Jacareí</li>
                  <li>Urgência e Emergência Nacional – através do sistema Unimed, cobrindo cerca ded 84% do território nacional, a maior cobertura de urgência e emergência do Brasil.</li>
                  <li>Assistente Virtual Sara – proporciona agilidade no atendimento ao cliente, pode ser acessada pelo Site ou WhatsApp</li>
                  <li>Pronto Atendimento Digital – Seja atendido onde estiver, em casa ou no trabalho, 24 horas por dia 7 dias na semana.</li>
                  <li>Descontos em farmácias – clientes Unimed São José dos Campos possuem descontos em medicamentos e perfumaria nas Farmácias: Drogaria São Paulo, Drogasil e Droga Raia.</li>
                  <li>Maior Rede de Atendimento do Vale:</li>
                  <ul>
                    <li>+730 Médicos cooperados</li>
                    <li>6 Laboratórios Próprios </li>
                    <li>3 prontos atendimentos 24 horas próprios</li>
                    <li>4 centros de especialidades</li>
                    <li>102 clínicas credenciadas</li>
                    <li>CDI – Centro de Diagnóstico Integrado</li>
                    <li>Espaço Mulher</li>
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
        <h2>Hospitais de Destaque da Unimed São José dos Campos</h2>
        <p>A rede hospitalar, hospitais que atendem aos planos da Unimed São José dos Campos mudam conforme o plano contratado. Verifique a rede-credenciada de cada plano fazendo uma <a href="../../simulacao">Simulação</a> . </p>
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
                              WHERE TOP.id = 8
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
                        <h2> <a href="../../perguntas-e-respostas/#carencias" target="new">Carências | Unimed São José dos Campos</a></h2>
						            <p>Os prazos de carências serão contados a partir da data de início do plano, ou seja, da data de vigência do contrato.</p>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Procedimentos</th>
                                        <th scope="col">Contratual</th>
                                        <th scope="col">Redução 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Acidente pessoal, atendimento na segmentação ambulatorial para casos de complicação gestacional e emergência</td>
                                        <td>24 horas</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Consultas e Exames Básicos</td>
                                        <td>30 dias</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Exames Especializados e Internações Clínicas</td>
                                        <td>180 dias</td>
                                        <td>24 horas</td>
                                    </tr>
                                    <tr>
                                        <td>Consulta/sessão com psicólogo e Terapias</td>
                                        <td>180 dias</td>
                                        <td>180 dias</td>
                                    </tr>
                                    <tr>
                                        <td>Procedimento de Alta Complexidade e Terapias</td>
                                        <td>180 dias</td>
                                        <td>180 dias</td>
                                    </tr>
                                    <tr>
                                        <td>Internações Cirúrgicas, Cirurgias e UTI e demais procedimentos</td>
                                        <td>180 dias</td>
                                        <td>180 dias</td>
                                    </tr>
                                    <tr>
                                        <td>Parto a termo</td>
                                        <td>300 dias</td>
                                        <td>300 dias</td>
                                    </tr>
                                    <tr>
                                        <td>Doenças e/ou Lesões preexistentes</td>
                                        <td>24 meses</td>
                                        <td>24 meses</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul>
                            <li>Carência Contratual – válida para todos os beneficiários com ou sem plano até 58 anos 11 meses e 29 dias</li>
                            <li>Redução1 – Válido para clientes até 58 anos, 11 meses e 29 dias, que tenha permanecido, no mínimo 6 (seis) meses em plano anterior sem interrupção pertencente a uma operadora/seguradora com registro na ANS, e que o plano esteja ativo ou cancelado a menos de 30 dias.</li>
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
                        <h2>Valores de <a href="../../perguntas-e-respostas/#coparticipacao" target="new">Coparticipação</a> | Unimed São José dos Campos</h2>
                            <table class="table table-sm table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Procedimento</th>
                                        <th scope="col">UniFlex 25</th>
                                        <th scope="col">UniParticipativo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Consultas</td>
                                        <td>25,00</td>
                                        <td>20,00</td>
                                    </tr>
                                    <tr>
                                        <td>Pronto-Socorro</td>
                                        <td>25,00</td>
                                        <td>20,00</td>
                                    </tr>
                                    <tr>
                                        <td>Procedimento Básico</td>
                                        <td> - </td>
                                        <td>6,00</td>
                                    </tr>
                                    <tr>
                                        <td>Procedimento Especial</td>
                                        <td> - </td>
                                        <td>25,00</td>
                                    </tr>
                                    <tr>
                                        <td>Franquia de Internação Enfermaria</td>
                                        <td> - </td>
                                        <td>80,00</td>
                                    </tr>
                                    <tr>
                                        <td>Franquia de Internação Apartamento</td>
                                        <td> - </td>
                                        <td>100,00</td>
                                    </tr>
                                    <tr>
                                        <td>Internação Psiquiátrica</td>
                                        <td>50% à partir do 31° dia</td>
                                        <td>50% à partir do 31° dia</td>
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
                        <p>
                        Os planos da Unimed São José dos Campos possuem atendimento e podem ser comercializados nas cidades:
                        </p>
                        <ul>
                            <li>São José dos Campos</li>
                            <li>Jacareí</li>
                            <li>Santa Branca</li>
                            <li>Guararema</li>
                            <li>Igaratá</li>
                            <li>Monteiro Lobato</li>
                            <li>Paraibuna</li>
                            <li>Caraguatatuba</li>
                            <li>Ubatuba</li>
                            <li>São Sebastião</li>
                            <li>Ilhabela</li>
                        </ul>
                        <p>Todos os planos oferecem urgência e emergência pelo sistema Unimed, em todo território nacional.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2> <a href="../../perguntas-e-respostas/#reembolso" target="new">Reembolso</a> Unimed São José dos Campos</h2>
                            <p>A Unimed São José dos Campos não trabalha com <a href="../../perguntas-e-respostas/#reembolso" target="new">reembolso</a>.</p>
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

                        <h5>Comprovantes de Endereço Válidos (contas de consumo):</h5>
                            <ul>
                                <li>Conta de Água, Energia Elétrica, Gás, IPTU, IPVA, Taxa de Lixo e Telefone</li>
                                <li>Cobrança de Cartão de Crédito</li>
                                <li>Extrato Bancário de bancos oficiais</li>
                                <li>Correspondência de Órgãos Oficiais – INSS, Receita Federal</li>
                                <li>Contrato de Aluguel devidamente assinado e com firma reconhecida</li>
                                <li>Cobrança de Serviços (boletos: Net, Sky etc)</li>
                                <li>Ficha de cadastro – solicitação de linha telefônica</li>
                            </ul>
                        <p>O comprovante de endereço deve estar em nome do beneficiário titular e ter sido emitido nos últimos 3 meses, caso esteja em node de terceiros é obrigatório apresentar documentos que comprove vínculo familiar de 1° grau.</p>
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
                            <li>Comprovante de endereço em nome do titular atualizado com CEP (qualquer um que comprove residência, exceto Net e Sky).</li>
                        </ul>

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
                        <h5>Comprovantes de Endereço Válidos (contas de consumo):</h5>
                            <ul>
                                <li>Conta de Água, Energia Elétrica, Gás, IPTU, IPVA, Taxa de Lixo e Telefone</li>
                                <li>Cobrança de Cartão de Crédito</li>
                                <li>Extrato Bancário de bancos oficiais</li>
                                <li>Correspondência de Órgãos Oficiais – INSS, Receita Federal</li>
                                <li>Contrato de Aluguel devidamente assinado e com firma reconhecida</li>
                                <li>Cobrança de Serviços (boletos: Net, Sky etc)</li>
                                <li>Ficha de cadastro – solicitação de linha telefônica</li>
                            </ul>
                        <p>O comprovante de endereço deve estar em nome do beneficiário titular e ter sido emitido nos últimos 3 meses, caso esteja em node de terceiros é obrigatório apresentar documentos que comprove vínculo familiar de 1° grau.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Condições comerciais | Regras para contratação</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Plano Pessoa Física</a></h3>
                        <p>Os planos de saúde para pessoa física da Unimed São José dos Campos podem ser comercializados para qualquer pessoa com CPF ativo até 58 anos, 11 meses e 29 dias, o processo de contratação é on-line, após o preenchimento dos dados em nosso portal e envio dos documentos será enviado para o e-mail informado um contrato via DOCUSIGN para o titular ou responsável legal preencher a declaração de saúde e assinar o contrato, após a assinatura on-line do contrato a Unimed libero o código de carteirinha provisório em até 48 horas.</p>
                        <p>Com a Astro Saúde esse processo é rápido e você consegue acompanhar cada passo.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Plano Empresarial</a></h3>
                        <p>Pode ser contratado pelo CNPJ para seus sócios, funcionários e seus respectivos dependentes. Empresas MEI e Empresarial Individual devem ter mais de 6 meses de abertura do CNPJ, o CNPJ deve estar ativo, pode ser contrata a partir de 1 (uma) vida e todos os titulares devem ter vínculo empregatício com o CNPJ. </p>
                        <p>O processo de contratação é on-line, após o preenchimento e envio de todos os documentos será enviado para o email de cada titular um termo de adesão para que os titulares possam preencher a declaração de saúde e assinar a adesão ao plano, após todos os titulares assinarem suas respectivas declarações de saúde será enviado um contrato para os responsáveis legais pelo CNPJ possam assinar via DOCUSIGN, após a assinatura o contrato será analisado pela Unimed São José dos Campos, para que na data escolhida da vigência do contrato todos possam acessar suas carteirinhas digitais pelo APP Unimed.</p>
                        <p>Com a Astro Saúde esse processo é rápido e você consegue acompanhar cada passo.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2> <a href="../../perguntas-e-respostas/#vigencia" target="new">Vigência</a>, prazo para início do plano e vencimentos</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <p>A <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a>, que é a data de início do plano, se dá 24 horas após a assinatura do contrato via DOCUSIGN, essa assinatura é realizada após o preenchimento da declaração de saúde e análise prévia dos documentos pela Unimed São José dos Campos. Do início do processo até a assinatura do contrato o prazo normal é de 5 dias úteis.</p>
                        <p>O cliente pode escolher o vencimento dos boletos da Unimed São José dos Campos para os dias 05, 10 ou 15 de cada mês.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <p>A <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a>, data de início do plano, pode ser escolhida pelo cliente com o prazo mínimo de 20 dias da data em que o preenchimento e envio dos documentos foram feitos no portal da Astro Saúde.</p>
                        <p>O vencimento pode ser escolhido para os dias 05, 10 ou 15 de cada mês.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2><a href="../../perguntas-e-respostas/#fidelidade" target="new">Fidelidade</a>, regras para cancelamento</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <p>Os planos pessoa física da Unimed São José dos Campos possuem <a href="../../perguntas-e-respostas/#fidelidade" target="new">fidelidade</a> de 12 meses, caso a rescisão do contrato por iniciativa do(a) cliente ocorra antes de completados 12 meses de vigência do contrato, o(a) cliente sujeitar-se-á ao pagamento de multa pecuniária, equivalente a 10% (dez por cento) do valor das mensalidades restantes.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <p>Os planos empresariais da Unimed São José dos Campos possuem <a href="../../perguntas-e-respostas/#fidelidade" target="new">fidelidade</a> de 12 meses, caso a rescisão do contrato por iniciativa da empresa ocorra antes de completados 12 meses de vigência do contrato, a empresa estará sujeita ao pagamento de multa pecuniária, equivalente a 10% (dez por cento) do valor das mensalidades restantes.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Taxas para contratação</h2>
                        <p>Os planos da Unimed São José dos Campos não possuem taxa para contratação</p>
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
                        <p>Para empresas até 29 vidas, o índice é calculado sobre a <a href="../../perguntas-e-respostas/#sinistralidade" target="new">sinistralidade</a> de toda carteira de clientes empresariais da Unimed São José dos Campos de 1 a 29 vidas, e ocorre na data de aniversário do contrato</p>
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
