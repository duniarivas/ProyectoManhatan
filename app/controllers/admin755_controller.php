<?php
class Admin755Controller extends  AppController {
	var $name ='Admin755';
	var $uses = array();

	function beforeFilter() {
		parent::beforeFilter();

		$this->layout='admin';

	}

	function home(){
            $datosUsuario = $this->Auth->user();
            if (isset($datosUsuario['Usuario']['tipo']) && $datosUsuario['Usuario']['tipo']==1 )
                    $this->redirect(array('controller' => 'home', 'action' => 'index'));

		$this->set('authUser', $this->Auth->user()); // Para Ver si se ha iniciado sesion
	}

	function index(){
		$this->set('authUser', $this->Auth->user()); // Para Ver si se ha iniciado sesion
	}

}
?>
