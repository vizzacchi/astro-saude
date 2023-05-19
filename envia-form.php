<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$emailsender = "douglas@astrosaude.com.br";
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.

/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = "Contato site Planos de Saúde São José dos Campos";
$emailremetente    = 'comercial@planosdesaudevaledoparaiba.com.br';
$emaildestinatario = 'comercial@planosdesaudevaledoparaiba.com.br';
$assunto           = $nome;
$horario 			= $email;
$telefone			= $telefone;


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Esse email &eacute; uma uma menssagem enviada pelo site www.planosdesaudesjc.com.br</P>
<p><b><i>'.$assunto.'</i></b><br>'.$mensagem.'<br>'.$horario.'<br>'.$telefone.'</p>
<hr>';


/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
// Se não houver um valor, o item não deverá ser especificado.

$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);

?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Astro Saúde</title>
</head>
<body marginheight="0" marginwidth="0">

  <table cellpadding="0" cellspacing="0" border="0" align="center" width="550" bgcolor="#999999">
	<tr>
	  <td height="100"><img src="./img/logo-astro-saude-branco.png" style="height:80%" alt=""></td>
	</tr>
	<tr>
	  <td>
		<table cellpadding="0" cellspacing="0" border="0" align="center" width="530" bgcolor="#ffffff">
			<tr>
			  <td>
				<table width="530" cellpadding="10" cellspacing="10" border="0" align="center" bgcolor="#ffffff" style="color:#000000;">
				  <tr>
					<td>
					  <p style="font-size:16px; font-family:Arial, Helvetica, sans-serif;">
                      	<br><br>
						Olá <b><?php echo $nome; ?></b>
						<br><br>
						Agradeço o seu contato e confirmo o recebimento da sua mensagem!
						<br><br>
						Muito em breve retornaremos com mais informações no seu e-mail ou telefone,
						caso queira falar comigo você pode me encontrar no telefone e e-mail abaixo:
						<br /><br />
						<b>Comercial: </b> (12) 3307-5375 <br />
						<b>E-mail: 	  </b><a href="mailto:comercial@astrosaude.com.br" style="color:#000000; text-decoration:none;">comercial@astrosaude.com.br</a>
					  </p>
                      <p> <a href="JavaScript: window.history.back();">Voltar</a></p>
                      <br>
					</td>
				  </tr>
				</table>
			  </td>
			</tr>
		</table>
	  </td>
	</tr>
	<tr bgcolor="#999999"><td height="30" align="center" style="color:#ffffff;"><p style="font-size:12px; font-family:Arial, Helvetica, sans-serif;">AStro Saúde © 2023 Todos os direitos reservados</p></td></tr>
  </table>
</body>
</html>
