// JavaScript Document

function personalizaModalVenda(plano,indicacao){
	alert(plano+indicacao);
}

function personalizaModal(plano,nomePlano){
  $("#bodyModal").load("../ajax/ajCotacaoHospitais.php",{plano:plano,nomePlano:nomePlano});
}


