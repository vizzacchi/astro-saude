	<?php
    require_once '../inc/inc_coneccao.php';
    $qsql = "Select * from tb_pergunta where pergunta like '%".$_POST['pesquisar']."%' ";
    $rs = mysqli_query($conn,$qsql);
    while($row = mysqli_fetch_array($rs)){
      echo "<div class='conteudo-operadoras' id='".$row['tag']."'>
                <div class='subconteudo'>
                  <div class='pergunta'>
                    <h2>".$row['pergunta']."</h2>"
                    .$row['resposta']."
                  </div>";
                  if($row['imagem']<>'' && $row['imagem']<>null){ ?>
                    <div class='imagem'>
                      <img src="../../img/<?php echo $row['imagem'];?>" class="img-fluid" alt="<?php echo $row['tag']; ?>" title="<?php echo $row['tag']; ?>">
                    </div>
                    <?php
                  }
                    ?>

                </div>
            </div>
            <hr>
            <?php
            }
  ?>
<p>Para nós o atendimento ao cliente está em primeiro lugar, ficou com alguma dúvida, entre em contato pelos canais de atendimento ou registre sua dúvida que te responderemos em até 1 dia útil.</p>
