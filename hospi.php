<?php
include "./inc/inc_coneccao.php";
$porto = [79,89,80,90,81,91,82,92,83,93,84,94,85,95,86,96,87,97,88,98];

/*for ($i; $i < sizeof($porto); $i++) {
  $qsql = "INSERT INTO `tb_empresas_planos`(`id_plano`, `id_empresa`, `hospital_geral`, `hospital_dia`, `hospital_especializado`, `maternidade`, `pronto_socorro_geral`, `pronto_socorro_infantil`, `pronto_socorro_especializado`)
  VALUES ($porto[$i],$id,$valores);";
  echo $qsql.'<br>';
}
*/

$handle = @fopen("hosp.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle,4096)) !== false) {
        $buffer = explode("#", $buffer);

        $i = intval($buffer[1]);
        $id = $buffer[2];
        $valores = $buffer[3];


        for ($f=$i; $f < sizeof($porto); $f++) {

          $qsql = "INSERT INTO `tb_empresas_planos`(`id_plano`, `id_empresa`, `hospital_geral`, `hospital_dia`, `hospital_especializado`, `maternidade`, `pronto_socorro_geral`, `pronto_socorro_infantil`, `pronto_socorro_especializado`)
          VALUES ($porto[$f],$id,$valores);";
          echo $qsql.'<br>';
        }

        }
    fclose($handle);
}
?>

