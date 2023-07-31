<?php
session_start();
if(isset($_SESSION['idCidade'])){
  $id = $_SESSION['idCidade'];
  $cidade = $_SESSION['nomeCidade'];
}else{
  $id = 0;
  $cidade = "Selecione uma Cidade...";
}
$qsqlCidades = "select DISTINCT CC.id_cidade, CC.cidade from tb_operadora as TE
                JOIN tb_plano TP          	on TP.id_operadora      = TE.id
                JOIN tb_tabela TT         	on TT.id_plano			= TP.id
                JOIN tb_cidade_regiao TCR 	on TCR.id_regiao       	= TT.id_regiao
                JOIN cepbr_cidade CC		    on CC.id_cidade		    = TCR.id_cidade
                WHERE CC.uf = 'SP'
                order by CC.cidade";

  include "../../inc/inc_coneccao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Planos de Saúde | Simulação Planos de Saúde</title>
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
    <meta name="description"  	content="Faça uma simulação on-line e gratuita e tenha os valores e características dos melhores planos de saúde." />
    <meta name="keywords" 		content="Valores Planos de Saúde, Valor plano de saúde, cotação plano de saúde, simulação plano de saúde" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			  content="pt_BR">
    <meta property="og:url" 			    content="https://www.astrosaude.com.br">
    <meta property="og:title" 			  content="Planos de Saúde | Simulação Planos de Saúde>
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="Faça uma simulação on-line e gratuita e tenha os valores e características dos melhores planos de saúde.">
    <meta property="og:image" 			  content="https://www.astrosaude.com.br/img/simule_seu_plano.jpg">
    <meta property="og:image:type" 		content="image/jpeg">
    <meta property="og:image:width" 	content="470">
    <meta property="og:image:height" 	content="240">

	<!-- CSS -->
  <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/styleSimulacao.css">
  <?php
    include "../../inc/scripts.php";
  ?>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</head>
<body>
<header>
    <!------------------------------------------------------------------------
                                NAVBAR
    ------------------------------------------------------------------------------>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php"><img src="../../img/logo-astro-saude.webp" class="img-logo" alt="Logo Astro Saúde" title="Logo Astro Saúde"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-douglas mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../../index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../cidade">Cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../perguntasERespostas/">Perguntas e Respostas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Simulação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../sobre/">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!------------------------------------------------------------------------
                                Fim Navbar
    ------------------------------------------------------------------------------>

  </header>

  <!------------------------------------------------------------------------
                                Fim Header
  ------------------------------------------------------------------------------>
  <!--------------- Breadcumb ---------------->
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="m-5">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../../">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Simulação Planos de Saúde</li>
    </ol>
  </nav>

  <div class="container">
    <div class="destaque mb-3 mx-1">
      <h1 class="title-destaque"><i class="bi bi-calculator"></i>Simulação on-Line!</h1>
      <p class="text-center">Compare os valores e características dos melhores planos de saúde da cidade selecionada<br>
      Nossa simulação fornece na hora e sem custo as opções de planos e valores para cidade e idades informada.</p>
    </div>
  </div>
  <section class="container">
  <form class="row g-3 mx-3 form-simulacao" action="cotacao.php" method="post" target="new">
    <div class="col-12 col-md-6">
      <label for="txtNome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Digite o seu nome" required>
    </div>
    <div class="col-12 col-md-6">
      <label for="txtTelefone" class="form-label">Telefone</label>
      <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" placeholder="XX 99999-9999" required>
    </div>
    <div class="col-12 col-md-6">
      <label for="txtEmail" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="contato@endereço.com.br" required>
    </div>
    <div class="col-12 col-md-6">
      <label for="cboTipoAcomocadacao" class="form-label">Acomodação <span class="text-muted"><span data-bs-toggle="tooltip" data-bs-title="Apartamento - Quarto individual com direito acompanhante e horário de visita livre ---                      Enfermaria - Quarto coletivo (normalmente 2 leitos) horário de visita restrito determinado pelo hospital"><i class="bi bi-question-circle-fill"></i></span></span></label>
      <select class="form-select select" aria-label="Default select example" id="cboTipoAcomodacao" name="cboTipoAcomodacao">
        <option selected disabled>Selecione o tipo de acomodação...</option>
        <option value="Apartamento">Apartamento</option>
        <option value="Enfermaria">Enfermaria</option>
        <option value="I">Indiferente</option>
      </select>
    </div>
<!-------

    <div class="col-12 col-md-6">
      <label for="cboCoparticipacao" class="form-label">Planos com coparticipação<span class="text-muted"> <span data-bs-toggle="tooltip" data-bs-title="Planos com coparticipação o beneficiário paga um pequeno valor conforme a utilização do plano, esses valores são cobrados no boleto junto com a mensalidade do plano. Planos sem coparticipação o beneficiário só paga a mensalidade independente da utilização, hoje poucas operadoras trabalham com essa opção de plano."><i class="bi bi-question-circle-fill"></i></span></span></label>
      <select class="form-select select" aria-label="Default select example" id="cboCoparticipacao" name="cboCoparticipacao">
        <option selected disabled>Selecione com ou sem coparticipação...</option>
        <option value="1">Planos COM Coparticipação</option>
        <option value="0">Planos SEM coparticipação</option>
        <option value="I">Indiferente</option>
      </select>
    </div>

------>
    <div class="col-12 col-md-6">
      <label for="cboTipoPessoa" class="form-label">Plano para <span class="text-muted"><span data-bs-toggle="tooltip" data-bs-title="Para planos pessoa Jurídica é obrigatório que o CNPJ esteja ativo. Plano pessoa física, é obrigatório que o titular possua um CPF."><i class="bi bi-question-circle-fill"></i></span></span></label>
      <select class="form-select select" aria-label="Default select example" id="cboTipoPessoa" name="cboTipoPessoa" onChange="tipoContrato()">
        <option selected disabled>Selecione o tipo de contratação...</option>
        <option value="PF">Pessoa Física | CPF</option>
        <option value="PJ">Pessoa Jurídica | CNPJ</option>
      </select>
    </div>
    <div class="col-12 col-md-6" id="naturezaJuridica" style="display: none;">
      <label for="cboNaturezaJuridica" class="form-label">Tipo de Empresa <span class="text-muted"><span data-bs-toggle="tooltip" data-bs-title="Natureza jurídica do CNPJ, no caso de MEI e EI é necessário que o CNPJ tenha + de 6 meses."><i class="bi bi-question-circle-fill"></i></span></span></label>
      <select class="form-select select" aria-label="Default select example" id="cboNaturezaJuridica" name="cboNaturezaJuridica">
        <option selected disabled>Selecione o tipo de empresa...</option>
        <option value="5">MEI - Micro Empreendedor Individual</option>
        <option value="5">ME, EI - Empresário individual</option>
        <option value="6">EIRELI - Empresa Individual de Responsabilidade Limitada</option>
        <option value="6">LTDA - Sociedade Limitada</option>
        <option value="6">S/A - Sociedade Anonima</option>
        <option value="6">SLU - Sociedade Limitada Unipessoal</option>
        <option value="5">Outros</option>
      </select>
    </div>
    <div class="col-12 col-md-6" id="numTitulares" style="display: none;">
      <label for="cboNumTitulares" class="form-label">Quantos Titulares <span class="text-muted"><span data-bs-toggle="tooltip" data-bs-title="Quantidade de beneficiários que possuem vínculo direto com a empresa: sócios, proprietários, funcionários CLTs, estagiários, menores aprendizes etc"><i class="bi bi-question-circle-fill"></i></span></span></label>
      <select class="form-select select" aria-label="Default select example" id="cboNumTitulares" name="cboNumTitulares">
        <option selected disabled>Selecione a quantidade de titulares...</option>
        <option value="1">1 titular</option>
        <option value="0">Mais de 1 titular</option>
      </select>
    </div>
    <div class="col-12 col-md-6" id="contratacao" style="display: none;">
      <label for="cboContratacao" class="form-label">Contratação <span class="text-muted"><span data-bs-toggle="tooltip" data-bs-title="Os beneficiários que estarão aderindo ao plano representam 100% de um grupo da empresa (sócios, proprietários, funcionários, gerentes, administradores)."><i class="bi bi-question-circle-fill"></i></span></span></label>
      <select class="form-select select" aria-label="Default select example" id="cboContratacao" name="cboContratacao">
        <option selected disabled>Selecione o tipo de contratação...</option>
        <option value="1">Compulsória | 100% dos sócios ou 100% dos funcionários</option>
        <option value="0">Opcional | parte dos grupo societário e/ou parte dos funcionários</option>
      </select>
    </div>
    <div class="col-12 col-md-6">
      <label for="cboCidades" class="form-label">Simulação para <span class="text-muted"><span data-bs-toggle="tooltip" data-bs-title="Cidade de sua residência ou do seu CNPJ."><i class="bi bi-question-circle-fill"></i></span></span></label>
          <?php
          if($resultCidades = mysqli_query($conn, $qsqlCidades)){ ?>
            <select id="cboCidades" name="cboCidades" class="form-select select">
                <option disabled<?php if($id==0) echo "selected";?>>Selecione uma cidade...</option>
                <?php
                while($regCidades = mysqli_fetch_assoc($resultCidades)){ ?>
                  <option <?php if($id==$regCidades['id_cidade']) echo "selected";?> value="<?php echo $regCidades['id_cidade'];?>"><?php echo $regCidades['cidade'];?></option>
                <?php
                } ?>
            </select>
        <?php
          }else{
            echo "Erro ao executar a query";
          }
         ?>
    </div>

    <h2 class="title">Informe abaixo a quantidade de vidas por faixa etária:</h2>
    <div class="col-6 col-md-6">
      <label for="txt00a18" class="form-label">00 a 18 anos</label>
      <input type="number" class="form-control" id="txt00a18" name="txt00a18" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt19a23" class="form-label">19 a 23 anos</label>
      <input type="number" class="form-control" id="txt19a23" name="txt19a23" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt24a28" class="form-label">24 a 28 anos</label>
      <input type="number" class="form-control" id="txt24a28" name="txt24a28" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt29a33" class="form-label">29 a 33 anos</label>
      <input type="number" class="form-control" id="txt29a33" name="txt29a33" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt34a38" class="form-label">34 a 38 anos</label>
      <input type="number" class="form-control" id="txt34a38" name="txt34a38" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt39a43" class="form-label">39 a 43 anos</label>
      <input type="number" class="form-control" id="txt39a43" name="txt39a43" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt44a48" class="form-label">44 a 48 anos</label>
      <input type="number" class="form-control" id="txt44a48" name="txt44a48" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt49a53" class="form-label">49 a 53 anos</label>
      <input type="number" class="form-control" id="txt49a53" name="txt49a53" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt54a58" class="form-label">54 a 58 anos</label>
      <input type="number" class="form-control" id="txt54a58" name="txt54a58" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt59a65" class="form-label">59 a 65 anos</label>
      <input type="number" class="form-control" id="txt59a65" name="txt59a65" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt66a69" class="form-label">66 a 69 anos</label>
      <input type="number" class="form-control" id="txt66a69" name="txt66a69" placeholder="0" min=0 step=1>
    </div>
    <div class="col-6 col-md-6">
      <label for="txt70" class="form-label">70 ou mais</label>
      <input type="number" class="form-control" id="txt70" name="txt70" placeholder="0" min=0 step=1>
    </div>
    <input type="submit" class="btn btn-simula my-3 py-3" id="btnSimula" value=" Executar Simulação ">
  </form>
  </section>
  <footer class="rodape container-fluid p-2">
    	<div class="container contatos">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 ">
            	<div class="rd-title">
                  <h2>Central de atendimento</h2>
                  <span><a href="https://www.astrosaude.com.br">Astro Saúde</a></span>
              </div><!-- .rd-title -->
                  <div class="my-3">
                    <i class="bi bi-telephone"></i>Telefones:
                    <div class="d-flex flex-column justify-content-start align-items-start">
                      PABX: (12) 3307-5375<br />
                      <a  href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow">WhatsApp: (12) 3307-5375 </a>
                    </div>
                  </div>
					        <div class="d-flex align-items-center my-3">
                    <i class="bi bi-envelope"></i>
                      <a class="link_operadoras" href="mailto:comercial@astrosaude.com.br">E-mail: comercial@astrosaude.com.br</a><br />
                  </div>
                	<div class="d-flex align-items-center my-3" >
                    <i class="bi bi-chat"></i></i>
                    <a class="link_operadoras" href="#" onclick="jivo_api.open();" rel="nofollow"> Chat Online</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a href="../../politica_privacidade.pdf" title="Política de privacidade - Pilon Vida e Saúde" target="_blank"> Conheça nossa política de privacidade</a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <i class="bi bi-chat-dots"></i>
                    <a  href="../../remocao.php" title="Remoção de dados" target="_blank"> Solicite remoção de dados pessoais.</a>
                  </div>
            </div><!-- contato -->

            <div class="col-lg-4 col-md-4 col-sm-12 mapa">
            	<div class="rd-title">
                    <h2>Localização</h2>
                    <span>Visite o nosso escritório comercial e tire suas dúvidas com nossos consultores.</span>
				      </div><!-- .rd-title -->
              <div class="local-map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.4007960680406!2d-45.88814968530901!3d-23.192059884867444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4a154915d207%3A0xf11b32196b25eff2!2sR.+Eucl%C3%ADdes+Miragaia%2C+660+-+Centro%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP%2C+12245-820!5e0!3m2!1spt-BR!2sbr!4v1558961312327!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div><!-- rodape-map -->
            <div class="col-lg-4 col-md-4 col-sm-12 forms">
                <div class="rd-title">
                    <h2>Mensagem Rápida</h2>
                    <span>Preencha o formulário abaixo e nossos consultores entrarão em contato.</span>
                </div><!-- .rd-title -->
                <form action="./envia-form.php" method="post">
                	<input name="nome" type="text" placeholder="Nome" class="form-control my-2">
                  <input name="email" type="text" placeholder="E-mail" class="form-control my-2" >
                  <input name="telefone" type="text" placeholder="Telefone" class="form-control my-2">
                  <textarea name="mensagem" cols="" rows="4" placeholder="Mensagem" class="form-control my-2"></textarea>
                  <input class="form-control btn btn-primary my-2" name="submit" type="submit" value=" ENVIAR MENSAGEM ">
                </form>
            </div><!-- contato-forms -->
          </div>
		</div><!-- contatos -->

    <div class="rodape-direitos">
        <div class="container-fluid text-center p-1">
            <p>© 2023 Todos os direitos reservados Astro Saúde</p>
        </div>
    </div>

   </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="../../js/pages/simulacao.js"></script>
  <script src="../../js/jsGeral.js"></script>
  <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  </script>

</body>
</html>




