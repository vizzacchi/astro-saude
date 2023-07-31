<?php

    $plano = $_POST['plano'];
    $nomePlano = $_POST['nomePlano'];
    require_once '../inc/inc_coneccao.php';
    $qsql = "SELECT TE.nome_abrev, TEP.*  FROM tb_empresas_planos TEP
              INNER JOIN tb_empresa TE ON TE.id = TEP.id_empresa
              WHERE TEP.id_plano = $plano
              order by TE.nome_abrev";
    $rs = mysqli_query($conn,$qsql);
    ?>
    <h3 class="text-center modal-titulo"><?php echo $nomePlano;?></h3>
    <table class="table table-sm table-striped table-hover">
      <thead>
        <tr class="text-center">
          <th scope="col">Hospital</th>
          <th scope="col">HG</th>
          <th scope="col">HD</th>
          <th scope="col">HE</th>
          <th scope="col">M</th>
          <th scope="col">PSG</th>
          <th scope="col">PSI</th>
          <th scope="col">PSE</th>
        </tr>
      </thead>
      <tbody>
    <?php
    while($reg = mysqli_fetch_array($rs)){
      ?>
      <tr>
        <td class="table-hospitais"><?php echo $reg['nome_abrev']; ?></td>
        <td class="table-hospitais text-center"><?php if($reg['hospital_geral']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
        <td class="table-hospitais text-center"><?php if($reg['hospital_dia']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
        <td class="table-hospitais text-center"><?php if($reg['hospital_especializado']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
        <td class="table-hospitais text-center"><?php if($reg['maternidade']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
        <td class="table-hospitais text-center"><?php if($reg['pronto_socorro_geral']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
        <td class="table-hospitais text-center"><?php if($reg['pronto_socorro_infantil']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
        <td class="table-hospitais text-center"><?php if($reg['pronto_socorro_especializado']==1) echo "<i class='bi bi-check'></i>"; else echo "<i class='bi bi-x'></i>";?></td>
      </tr>
      <?php
    }
  ?>
      </tbody>
    </table>
<p class="text-center modal-titulo table-hospitais">A rede hospitalar pode sofrer alteração sem aviso prévio.</p>
<section class="container">
    <div class="row my-5">
        <div class="text-center">
        <a  href="https://api.whatsapp.com/send?phone=551233075375&amp;text=No que posso te ajudar?" rel="nofollow" class="btn__botoes"><i
                class="bi bi-whatsapp px-2"></i> Converse WhatsApp</a>
        </div>
    </div>
</section>
