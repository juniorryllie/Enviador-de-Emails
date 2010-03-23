<?php

	$mail = 'junior.ryllie@gmail.com' ;
	$assunto = $_post['assunto'] ;
	$corpo = $_post['corpo'] ;
	
	mail($mail, $assunto, $corpo);

?>