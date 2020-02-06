<?php
	//para a versao que vai em servidor linux ... nao foi gerada a variavel className
	//ver a versao windows

	define('INCLUDE_PATH','http://localhost/mvcsite/');
	define('INCLUDE_PATH_FULL','http://localhost/mvcsite/Views/pages/');
	class Application
	{
		
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$controler = new $url();
				$controler->executar();
			}else{
				die("Não existe esse controlador!");
			}
		}
	}
	
?>