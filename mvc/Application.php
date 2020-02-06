<?php

/**
 * 
 */
class Application
{
	
	public function executar() 
	{
		$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';
		$url = ucfirst($url);
		$url.= "Controller";
		if (file_exists('Controllers/'.$url.'.php')) {
			//echo "executando: ".$url."<br>";
			$controler = new $url();
			$controler->executar();
		} else {
			die("Não existe esse controlador");
		}
		
	}
}

?>

