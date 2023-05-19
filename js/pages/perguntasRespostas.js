// JavaScript Document

function pesquisar(){
  var perguntas = $("#txtPesquisar").val();
  $("#perguntas").load("../../ajax/ajPerguntasERespostas.php",{pesquisar:perguntas});
}
