<?php

	$destinatario1 = 'junior.ryllie@gmail.com' ;
	$assunto1 = $_POST['assunto'] ;
	$corpo1 = $_POST['corpo'] ;
	
	if (mail($destinatario1, $assunto1, $corpo1)):
	    
		print'<p>Mensagem Enviada com Sucesso</p>';
	else:
		print'<p>ERRO  Sua Mensagem nao pode ser Enviada </p>';
	endif;
	    

?>