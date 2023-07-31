// JavaScript Document

function tipoContrato(){
  var tipo = $("#cboTipoPessoa").val();
  if(tipo=="PF"){
    $("#cidade").html("Cidade de sua residência");
    $('#naturezaJuridica').hide();
    $("#contratacao").hide();
    $("#numTitulares").hide();
  }else{
    $("#cidade").html("Cidade de seu CNPJ");
    $('#naturezaJuridica').show();
    $("#contratacao").show();
    $("#numTitulares").show();
  }
}
