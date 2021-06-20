<?php 
class Router {
	public $route;

	public function __construct() {

		
			$this->route  = isset($_GET['r']) ? $_GET['r'] : 'home';
			$controller = new ViewController();
			switch ($this->route) {
				case 'home':
					case 'home':
					$controller->load_view('home');	
					break;
				case 'nosotros':
					$controller->load_view('nosotros');	
					break;
				case 'servicios':
					$controller->load_view('servicios');	
					break;	
				case 'contacto':
					$controller->load_view('contacto');	
					break;
				}

	}


	public function __destruct() {
		
	}
}





