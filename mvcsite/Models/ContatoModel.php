<?php

	class ContatoModel{

// aqui estao as metodos (funcoes) da classe Email

		public static function enviarFormulario(){
			$mail = new Email('smtp.server','emai.com.br','password','name');
			$mail->addAdress('email.com.br','name');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}

	}

?>