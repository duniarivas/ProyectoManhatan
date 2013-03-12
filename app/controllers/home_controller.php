<?php
class HomeController extends  AppController {
	var $name = 'Home';
	var $uses = array('Item','Imagene','Subcategoria');
	
	function beforeFilter() {
		$this -> Session -> write('admin.valor', '0');
  		$this->Auth->allow('index');
  		parent::beforeFilter();
 	}
	
	function index(){
		if($this->Auth->user()){
			if($this->Auth->user('tipo')==0){
				$this->redirect(array('controller'=>'admin755','action'=>'home'), null, true);
			}
		}
		// Para Generar Menu, Buscamos Subcategorias
		$subcategorias=$this->Subcategoria->find('all',array('order'=>'Subcategoria.categoria_id ASC'));
		$this->set('subcategorias',$subcategorias);
		//////////
		$this->set('carousel',$this->Imagene->find('all', array('order'=>'rand()',
															'limit'=>8
															)
												)
				);
		$this->set('ultimos',$this->Imagene->find('all', array('order'=>'Item.created DESC',
															'limit'=>25
															)
												)
				);
	}
	
	function acercaDe(){
	
	}
	
	function puf(){
	
	}
	
	function ubicacion(){
	
	}
}
?>