<?php
   include "../../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | Ativia Saúde</title>
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
    <meta name="description"  	content="A Ativia Saúde está mais de 30 anos oferecendo acesso a medicina de ponta para seus cliente, você também pode ter um plano de saúde completo, acesse e confira." />
    <meta name="keywords" 		content="Ativia Saúde, Plano de Saúde Ativia, Ativia São José dos Campos, ativia jacareí, Preços Ativia, Corretor ativia" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde |Ativia Saúde">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="A Ativia Saúde está mais de 30 anos oferecendo acesso a medicina de ponta para seus cliente, você também pode ter um plano de saúde completo, acesse e confira.">
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
      <p><a href="<?php echo $server.$url;?>" class="navegacao"> Home </a> | <a href="<?php echo $server.$url."/pag/operadoras/";?>" class="navegacao">Operadoras</a> | <span class="text-muted">Ativia Saúde</span></p>
		  <div class="clear">
            <h1>Ativia Saúde<br>
                <span class="h2">Planos de saúde que cuidam de você para uma vida mais saudável e feliz!</span></h1>
            <!-- Listagem das operadoras -->
            <div class="row m-y-5">
            <div class="col-12 col-md-6 header--img">
                <img src="../../../img/logos/ativia-saude.webp" alt="Logo Ativia Saúde" title="Logo Ativia Saúde">
            </div>
            <div class="col-12 col-md-6">
                <p>A história da Ativia começou em 1992, em Jacareí, como Cooperativa Médica, mas rapidamente expandiu suas fronteiras para as demais cidades do Vale do Paraíba, até que em 2010 alterou sua identidade visual para Ativia Planos de Saúde. Como Ativia adquiriu o Hospital Alvorada de Jacareí e fortaleceu sua rede-credenciada com qualidade e foco total na garantia de saúde aos seus clientes. Em 2020, para viabilizar o atendimento dos clientes durante a pandemia do Covid-19, implantou o “Atendimento On-line” e “Atendimento Digital”.</p>
            </div>
        </div>
        <div class="row m-y-5">
            <div class="col-12 col-md-6">
                <h2>Diferenciais dos Planos da Ativia Saúde</h2>
                <ul class="m-x-1">
                  <li>Autorização de exames e cirurgias direto pelo WhatsApp da Ativia</li>
                  <li>Descontos em farmácias</li>
                  <li>Carência promocional </li>
                  <li>Central de agendamento de consultas e exames</li>
                  <li>Urgência e emergência pela rede Abramge (abrir link)</li>
                  <li>Programas de prevenção a saúde (abrir link)</li>
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
        <h2>Hospitais de Destaque da Ativia Saúde</h2>
        <p>A rede hospitalar, hospitais que atendem os planos da Ativia Saúde mudam conforme o plano contratado. Verifique a rede-credenciada de cada plano fazendo uma <a href="../../simulacao">Simulação</a> . </p>
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
                              WHERE TOP.id =5
                              ORDER BY destaque DESC, cidade asc, nome_abrev asc";

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
                        <h2> <a href="../../perguntas-e-respostas/#carencias" target="new">Carências | Ativia Saúde</a></h2>
						            <p>Os prazos de carências serão contados a partir da data de início do plano, ou seja, da data de vigência do contrato.</p>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Procedimento</th>
                                        <th scope="col">Contratual</th>
                                        <th scope="col">Promocional</th>
                                        <th scope="col">Redução 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>A</td>
                                      <td>Urgência e Emergência</td>
                                      <td>24 horas</td>
                                      <td>24 horas</td>
                                      <td>24 horas</td>
                                    </tr>
                                    <tr>
                                      <td>B</td>
                                      <td>Consultas Médicas</td>
                                      <td>10 dias</td>
                                      <td>24 horas</td>
                                      <td>24 horas</td>
                                    </tr>
                                    <tr>
                                      <td>C</td>
                                      <td>Exames Simples</td>
                                      <td>30 dias</td>
                                      <td>24 horas</td>
                                      <td>24 horas</td>
                                    </tr>
                                    <tr>
                                      <td>D</td>
                                      <td>Exames especiais e terapias</td>
                                      <td>180 dias</td>
                                      <td>180 dias</td>
                                      <td>24 horas</td>
                                    </tr>
                                    <tr>
                                      <td>E</td>
                                      <td>Internação / cirurgias e UTI</td>
                                      <td>180 dias</td>
                                      <td>180 dias</td>
                                      <td>24 horas</td>
                                    </tr>
                                    <tr>
                                      <td>F</td>
                                      <td>Parto a termo</td>
                                      <td>300 dias</td>
                                      <td>300 dias</td>
                                      <td>300 dias</td>
                                    </tr>
                                    <tr>
                                      <td>G</td>
                                      <td>Doenças ou Lesões preexistentes</td>
                                      <td>24 meses</td>
                                      <td>24 meses</td>
                                      <td>24 meses</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul>
                          <li><strong>Carência Contratual</strong> – válida para todos os beneficiários até 65 anos 11 meses e 29 dias, com ou sem plano anterior</li>
                          <li><strong>Carência Promocional</strong> – válida para todos os beneficiários até 65 anos 11 meses e 29 dias, com ou sem plano anterior. Carência promocional em vigor e por tempo limitado, a ser definido pela operadora.</li>
                          <li><strong>Redução1</strong> – Válido para clientes até 65 anos, 11 meses e 29 dias, que tenha permanecido, no mínimo 12 (doze) meses em plano anterior sem interrupção pertencente a uma operadora/seguradora com registro na ANS, e que o plano esteja ativo ou cancelado a menos de 30 dias.</li>

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
                        <h2>Valores de <a href="../../perguntas-e-respostas/#coparticipacao" target="new">Coparticipação</a> | Ativia Saúde</h2>
                            <table class="table table-sm table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Procedimento</th>
                                        <th scope="col">Valor Coparticipação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Consultas</td>
                                        <td>13,90</td>

                                    </tr>
                                    <tr>
                                        <td>Pronto-Socorro</td>
                                        <td>27,00</td>

                                    </tr>
                                    <tr>
                                        <td>Psico/Fonoaudiologia</td>
                                        <td>7,00</td>

                                    </tr>
                                    <tr>
                                        <td>Exames</td>
                                        <td>7,00</td>

                                    </tr>
                                    <tr>
                                        <td>Terapias</td>
                                        <td>7,00</td>

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
                        <h3>Plano Ideal</h3>
                        <p>Comercialização e atendimento exclusivos na cidade de Jacareí.</p>
                        <h3>Plano Essencial</h3>
                        <p>Comercialização e atendimento nas cidades de Jacareí, São José dos Campos e Caraguatatuba.</p>
                        <h3>Plano Ativia Vale</h3>
                        <p>Comercialização e atendimento nas cidades de Jacareí, São José dos Campos, Caçapava, Taubaté, Pindamonhangaba, Aparecida, Guaratinguetá, Campos do Jordão, São Sebastião, Caraguatatuba e Ubatuba.</p>
                        <h3>Ativia Senior</h3>
                        <p>Comercialização nas cidades de Jacareí e São José dos Campos, atendimento nas cidades de comercialização.</p>

                        <h4>Importante: a comercialização em determinada cidade não significa que existe rede credenciada naquele município. Para acessar a rede credenciada, consulte o Guia Médico de cada produto.</h4>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2> <a href="../../perguntas-e-respostas/#reembolso" target="new">Reembolso</a> Ativia Saúde</h2>
                            <p>A Ativia Saúde não trabalha com <a href="../../perguntas-e-respostas/#reembolso" target="new">reembolso</a>.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Quem pode aderir ao plano e documentos necessários</h2>
                        <h3> <a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <h4>Titular</h4>
                        <p>Pode ser titular qualquer pessoa de 0 a 65 anos, 11 meses e 29 dias com CPF válido. No plano Ativia Senior qualquer pessoa com mais de 65 anos e CPF válido.</p>
                        <ul>
                            <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS);</li>
                            <li>Comprovante de endereço em nome do titular ou responsável atualizado com CEP (conta de água, luz ou telefone).</li>
                            <li>Menores de 13 anos podem substituir o RG pela certidão de nascimento</li>
                            <li>Menores de 18 anos é necessário RG, CPF e comprovante de residência atual do responsável legal.</li>
                        </ul>
                        <h4>Dependentes</h4>
                        <ul>
                            <li><strong>Familiares de 1° grau</strong>: pai, mãe, filhos e menores sob guarda judicial</li>
                            <li><strong>Familiares de 2° grau</strong>: avós, irmãos e netos</li>
                            <li><strong>Familiares de 3° grau</strong>: tios, sobrinhos e bisnetos</li>
                            <li><strong>Familiares afiliados</strong>: padrastos, madrastas, cunhados dotitular, genros, noras, sogros, avós, irmãos, filhos, netos do cônjuge</li>
                          </ul>
                        <p>Para inclusão de dependentes é necessário:</p>
                        <ul>
                            <li>Comprovante de vínculo com o titular</li>
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
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Plano por Adesão</a></h3></h3>
                        <h4>Titular</h4>
                        <p>Pode ser titular estudantes de 6 a 65 anos de idade com CPF válido. OU<br/>
                           Profissionais liberais de 18 a 65 anos de idade com cpf válido.</p>
                        <ul>
                          <li>Documento que comprova que esteja estudando ou que é profissional liberal.</li>
                          <li>Comprovante de residência atual (últimos 60 dias), em nome do titular ou parente de 1° grau.</li>
                          <li>Titular maior de 13 anos cópia do RG e CPF ou CNH e cópia do Cartão Nacional de Saúde.</li>
                          <li>Titula com até 13 anos, cópia do CPF, cópia do RG ou certidão de nascimento e cópia do Cartão Nacional de Saúde.</li>
                          <li>Todo titular menor de 18 anos precisa de um responsável legal para assinar o contrato, nesse caso é necessário RG, CPF ou CNH e comprovante de residência atual do responsável legal.</li>
                        </ul>
                        <h4>Dependentes</h4>
                        <p>Para todos é necessário cópia simples RG, CPF e Cartão Nacional de Saúde</p>
                        <ul>
                          <li>Para todos é necessário</li>
                          <li>Cônjuge: cópia de certidão de casamento</li>
                          <li>Companheiro(a): declaração de união estável de próprio punho, com firma reconhecida do titular e do(a) companheiro(a).</li>
                          <li>Noras ou Genros com idade igual ou inferior a 65 anos: documento que comprove vínculo com o titular</li>
                          <li>Filho(a) ou enteado(a) com idade até 38 anos: no caso de enteados(as) cópia da Certidão de Casamento ou escritura pública de união estável comprovando o vinculo dos tutores.</li>
                          <li>Filho(a) ou enteado(a) inválido(a) de qualquer idade: cópia autenticada do atestado de invalidez emitido pelo INSS.</li>
                          <li>Menor sob guarda ou tutela do beneficiário titular: cópia da Tutela ou do "Termo de Guarda" definitiva expedida por órgão oficial.</li>
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
                        <p>Pode ser titular: sócios, administradores, funcionários (CLT), estagiários e menores aprendizes.<br/>
                           Documentos necessários Sócios e Administradores</p>
                        <ul>
                          <li>Contrato social ou requerimento de empresário para comprovar o vínculo com o CNPJ</li>
                          <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal) e Cartão Nacional de Saúde;</li>
                          <li>Comprovante de endereço atualizado</li>
                        </ul>
                        <h5>Documentos Funcionários (CLTs)</h5>
                        <ul>
                            <li>Relação de Fundo de Garantia com guia paga (GFIP) e/ou;</li>
                            <li>Ficha de registro assinada pelo colaborador e pelo responsável do RH com carimbo;</li>
                            <li>Carteira profissional (páginas c/ foto e assinatura, dados pessoais e registro da empresa);</li>
                            <li>RG e CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS);</li>
                            <li>Comprovante de endereço em nome do titular atualizado com CEP (qualquer um que comprove residência, exceto Net e Sky).</li>
                        </ul>
                        <h5>Estagiários</h5>
                        <ul>
                          <li>Contrato de estágio assinado entre a empresa, estagiário e instituição de ensino</li>
                          <li>Comprovante de residência atual, em nome do titular ou parente de 1° grau</li>
                          <li>Titular maior dde 13 anos cópia RG e CPF ou CNH e cópia do Cartão Nacional de Saúde.</li>
                          <li>Titular com até 13 anos, cópia CPF, RG ou certidão de nascimento e cópia do Cartão Nacional de Saúde.</li>
                        </ul>
                        <p>Todo titular menor dde 18 anos precisa de um responsável legal para assinar o contrato, nesse caso é necessário RG, CPF ou CNH e comprovante de residência atual do responsável legal.</p>
                        <h5>Menor Aprendiz</h5>
                        <ul>
                          <li>Contrato assinado entre a empresa, menor aprendiz e responsável legal</li>
                          <li>Comprovante de residência atual, em nome do titular ou parente de 1° grau</li>
                          <li>Titular maior dde 13 anos cópia RG e CPF ou CNH e cópia do Cartão Nacional de Saúde.</li>
                          <li>Titular com até 13 anos, cópia CPF, RG ou certidão de nascimento e cópia do Cartão Nacional de Saúde.</li>
                        </ul>
                        <p>Todo titular menor dde 18 anos precisa de um responsável legal para assinar o contrato, nesse caso é necessário RG, CPF ou CNH e comprovante de residência atual do responsável legal.</p>

                        <h4>Dependentes</h4>
                        <ul>
                            <li><strong>Familiares de 1° grau</strong>: pai, mãe, filhos e menores sob guarda judicial</li>
                            <li><strong>Familiares de 2° grau</strong>: avós, irmãos e netos</li>
                            <li><strong>Familiares de 3° grau</strong>: tios, sobrinhos e bisnetos</li>
                            <li><strong>Familiares afiliados</strong>: padrastos, madrastas, cunhados dotitular, genros, noras, sogros, avós, irmãos, filhos, netos do cônjuge</li>
                          </ul>
                        <p>Para inclusão de dependentes é necessário:</p>
                        <ul>
                            <li>Comprovante de vínculo com o titular</li>
                            <li>Certidão de nascimento (obrigatório para nascidos a partir de 2010) ou RG;</li>
                            <li>CPF (cópia ou impressão do cartão via site da Receita Federal);</li>
                            <li>Cartão Nacional de Saúde (CNS).</li>
                        </ul>
                        <p>*Enteados - A inclusão será acatada com Certidão de Casamento ou Declaração de União estável da mãe ou pai, como titular.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Condições comerciais | Regras para contratação</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Plano Pessoa Física</a></h3>
                        <p>Os planos da Ativia Saúde podem ser comercializados para qualquer beneficiário que possua CPF e Cartão do SUS, a contratação é online e segura.</p>
                        <p>Para contratarem o plano da Ativia Saúde menores de 18 anos precisam de um responsável legal, maior de 18 anos para assinar o contrato.</p>
                        <p>Todo o processo de vendas é on-line, após o preenchimento do contrato é enviado um link para você, cliente, preencher a declaração de saúde e fazer a assinatura eletrônica.</p>
                        <p>Com a Astro Saúde esse processo é rápido e você consegue acompanhar cada passo.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Plano por Adesão</a></h3>
                        <p>Os planos por adesão podem ser contratados por qualquer beneficiário que esteja estudando e que tenha idade de 6 a 65 anos ou profissionais liberais filiados e entidade de classe parceira da Ativia Saúde. </p>
                        <p>Todo o processo de vendas é on-line, após o preenchimento do contrato é enviado um link para você, nosso cliente preencher a declaração de saúde e fazer a assinatura eletrônica.	</p>
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
                        <p>O <a href="../../perguntas-e-respostas/#vencimento" target="new">vencimento</a> é na mesma data da vigência. O pagamento da primeira mensalidade deve ser realizado para a Astro Saúde e pode ser feito por PIX ou boleto. </p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos por Adesão</a></h3>
                        <p>Você pode escolher 3 (três) <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a>: 1, 10 ou 20. A data de vencimento será a mesma data da vigência. O primeiro pagamento a ser feito refere-se a taxa de angariação qye deverá ser feito a Astro Saúde por meio de um boleto correspondente a 90% do valor da primeira mensalidade cujo vencimento será de 5 dias corridos da data de assinatura do contrato. A primeira mensalidade do plano será cobrada pela Administradora do plano (Affix, Corpe ou Qualicorp) por meio de boleto bancário. </p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <p>A <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a>, data de início do plano, pode ser escolhida pelo cliente a partir de 6 dias úteis após o preenchimento do formulário de contratação e envio das cópias dos documentos, a <a href="../../perguntas-e-respostas/#vigencia" target="new">vigência</a> não pode ocorrer em finais de semana ou feriados.</p>
                        <p>O <a href="../../perguntas-e-respostas/#vencimento" target="new">vencimento</a> é na mesma data da vigência. O pagamento da primeira mensalidade deve ser realizado para a Astro Saúde e pode ser feito via PIX ou boleto.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2><a href="../../perguntas-e-respostas/#fidelidade" target="new">Fidelidade</a>, regras para cancelamento</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <p>Os planos pessoa física da Ativia Saúde não possuem <a href="../../perguntas-e-respostas/#fidelidade" target="new">fidelidade</a>, podendo ser cancelados a qualquer momento sem cobrança de multa, o cancelamento do plano pode ser solicitado presencialmente, pelo telefone na central de atendimento ao cliente ou até mesmo pelo WhatsApp da Ativia Saúde. Reforçamos a importância de comunicar a Ativia sobre o cancelamento do plano para não ficar com dívida na operadora.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos por Adesão</a></h3>
                        <p>Os planos por adesão da Ativia Saúde não possuem <a href="../../perguntas-e-respostas/#fidelidade" target="new">fidelidade</a>, podendo ser cancelados a qualquer momento sem cobrança de multa, o cancelamento do plano deve ser solicitado direto na Administradora do plano (Affix, Corpe ou Qualicorp), o pedido pode ser realizado pelo telefone na central de atendimento.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <p>Os planos empresariais da Ativia Saúde possuem <a href="../../perguntas-e-respostas/#fidelidade" target="new">fidelidade</a> de 12 meses, caso o plano seja cancelado antes desse período estará sujeito a multa no valor correspondente a 50% (cinquenta por cento) das parcelas vincendas para completar o período de 12 meses.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2>Taxas para contratação</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <p>Os planos pessoa física da Ativia Saúde não possuem taxa para contratação</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos por Adesão</a></h3>
                        <p>Existe uma cobrança correspondente a 90% (noventa por cento) do valor da primeira mensalidade a título de taxa de angariação, essa taxa é cobrada pela Astro Saúde por boleto com data de vencimento para 5 (cinco) dias após a assinatura do contrato junto a Administradora.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <p>Os planos empresariais da Ativia Saúde não possuem taxa para contratação.</p>
                    </div>
                </div>
                <hr>
                <div class="conteudo-operadoras">
                    <div class="subconteudo">
                        <h2><a href="../../perguntas-e-respostas/#reajuste" target="new"> Reajuste</a> das mensalidades | Ativia Saúde</h2>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Pessoa Física</a></h3>
                        <h4>Reajuste Financeiro</h4>
                        <p>O índice de reajuste determinado pela <a href="https://www.gov.br/ans/pt-br" target="_blank"> ANS</a> (Agência Nacional de Saúde), ocorrem na data de aniversário de assinatura do contrato.</p>
                        <h4>Reajuste por Faixa Etária</h4>
                        <p>O reajuste por faixa etária ocorre aos 18 anos e de 4 em 4 anos até o beneficiário completar 59 anos. Os percentuais são fixos e estão definidos no contrato.</p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos por Adesão</a></h3>
                        <h4>Reajuste Financeiro</h4>
                        <p>O reajuste é calculado com base na <a href="../../perguntas-e-respostas/#sinistralidade" target="new">sinistralidade</a> do contrato da Ativia com a Administradora de Benefício (affix, Corpe e Qualicorp) e ocorre no mês de janeiro independente da data de adesão ao plano. </p>
                        <h3><a href="../../perguntas-e-respostas/#tipos_planos" target="new">Planos Empresariais</a></h3>
                        <h4><a href="../../perguntas-e-respostas/#reajuste" target="new">Reajuste</a> Financeiro</h4>
                        <p>Para empresas até 29 vidas, o índice é calculado sobre a <a href="../../perguntas-e-respostas/#sinistralidade" target="new">sinistralidade</a> de toda carteira de clientes empresariais da Ativia Saúde de 1 a 29 vidas, e ocorre na data de aniversário do contrato</p>
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

        include("../../../inc/footer.php");
    ?>

</body>
</html>
