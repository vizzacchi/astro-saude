<?php include '../../inc/inc_coneccao.php';
$id_hospital = $_GET['id'];
$hospital = $_GET['hospital'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Astro Vida e Saúde | <?php echo $hospital; ?> </title>
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
    <meta name="description"  	content="<?php echo $hospital; ?>" />
    <meta name="keywords" 		content="<?php echo $hospital; ?>" />

    <!-- FACEBOOK -->
    <meta property="og:locale" 			content="pt_BR">
    <meta property="og:url" 			content="https://www.astrosaude.com.br">
    <meta property="og:title" 			content="Astro Vida e Saúde | <?php echo $hospital; ?>">
    <meta property="og:site_name" 		content="Astro Vida e Saúde">
    <meta property="og:description" 	content="<?php echo $hospital; ?>">
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
      <h1><?php echo $hospital; ?></h1>

      <div class="hospitais">
      <p>Confira as operadoras e os planos que são atendidos no <?php echo $hospital; ?>.</p>
      <p>A rede de cada plano pode mudar sem prévio aviso, essa consulta é apenas uma referencia, converse com um de nossos especialistas para confirmar o atendimento do plano no respectivo hospital.</p>
      <?php
        $qsql = "SELECT DISTINCT TR.id_operadora, TE.logo, TE.nome_abrev, E.nome_abrev as hospital, TP.plano, TEP.* FROM tb_empresas_planos as TEP
                  INNER JOIN tb_relacionamento TR on TR.id_plano = TEP.id_plano
                  INNER JOIN tb_plano TP on TP.id = TEP.id_plano
                  INNER JOIN tb_operadora TE on TE.id = TR.id_operadora
                  INNER JOIN tb_empresa E on E.id = TEP.id_empresa
                  WHERE TEP.id_empresa = $id_hospital AND
                        TP.id_situacao = 1
                  ORDER BY TR.id_operadora, TR.id_plano";

        if($rs = mysqli_query($conn, $qsql)){
          $operadora = "";
          $count = 0;
          while ($reg=mysqli_fetch_array($rs)) {
            if($reg['id_operadora'] != $operadora){
              if($count <> 0) echo "</tbody></table></div></div>";
              $operadora = $reg['id_operadora'];
              $count++;
              echo "<p><img src='../../img/logos/".$reg['logo']."' title = 'Logo ".$reg['nome_abrev']."' alt='Logo ".$reg['nome_abrev']."' class='m-y-3'></p>";
              ?>
              <div class="table-responsive tabela">
                <div>
              <table class="table table-sm table-striped table-responsive">
                <thead>
                  <tr>
                    <th scope="col">Plano</th>
                    <th scope="col">HG</th>
                    <th scope="col">HD</th>
                    <th scope="col">HE</th>
                    <th scope="col">MAT</th>
                    <th scope="col">PSG</th>
                    <th scope="col">PSI</th>
                    <th scope="col">PSE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
            }
              ?>
                <tr>
                    <td><?php echo $reg['plano']; ?></td>
                    <td><?php if($reg['hospital_geral']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['hospital_dia']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['hospital_especializado']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['maternidade']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['pronto_socorro_geral']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['pronto_socorro_infantil']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                    <td><?php if($reg['pronto_socorro_especializado']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
                </tr>
        <?php

        } ?>
          </tbody>
            </table>
            </div>
          </div>
          
        <?php
        }else{ ?>
          <p>Para saber os planos que atendem esse hospital entre em contato com um de nossos especialistas.</p>
        <?php
        }



        ?>
        </div>
    </section>
	<section class="botoes container">
            <!--<a href="" class="btn__botoes"><i
                    class="bi bi-file-earmark-text px-2 btn__img"></i>Contrate<br>Online</a>
            -->
            <a href="../simulacao/" class="btn__botoes"><i
                    class="bi bi-calculator px-2 btn__img"></i> Simulação<br>Online</a>
            <a href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                    class="bi bi-whatsapp px-2 btn__img"></i> Converse<br>WhatsApp</a>
        </section>
	<?php
		include "../../inc/footer.php";
	?>
</body>
</html>
