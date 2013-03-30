<?php
class Admin755Controller extends  AppController {
	var $name ='Admin755';
	var $uses = array();
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->layout='admin';
		
	} 
	 
	function home(){
		$this->set('authUser', $this->Auth->user()); // Para Ver si se ha iniciado sesion
	}
	
	function index(){
		$this->set('authUser', $this->Auth->user()); // Para Ver si se ha iniciado sesion
	}

}
?>
