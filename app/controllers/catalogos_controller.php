<?php
class CatalogosController extends  AppController {
	var $name ='Catalogos';
	var $uses = array('Item','Imagene','Caracteristica','Subcategoria','Comentario');
	var $helpers = array('Session', 'Html', 'PaypalIPN.Paypal');
	var $paginate = array(
              'order' => array(
                'caracteristica.id' => 'asc'
                )
              );
			  
	function beforeFilter(){
		// Para Generar Menu, Buscamos Subcategorias
		$subcategorias=$this->Subcategoria->find('all',array('order'=>'Subcategoria.categoria_id ASC'));
		$this->set('subcategorias',$subcategorias);
		//////////
		$this->Auth->allow('index','detalle');
		parent::beforeFilter();
	}
	
	function detalle($id = null, $talla = null){
		if($id == null){
			$this->redirect(array('controller'=>'home','action'=>'index'));
		}else{
			$caracteristicas = $this->Caracteristica->find('all', array(
											'conditions' => array('Item.id'=>$id)
											) );
											
			$items = $this->Imagene->find('all', array(
											'conditions' => array('Item.id'=>$id),
											'limit' => '10'
											) );
			
			$this->paginate = array(
								  'order' => array(
									'Comentario.created' => 'desc'
									),
									'limit' => 4
								  );
			//$comentarios = $this->Comentario->find('all', array(
			//								'conditions' => array('Item.id'=>$id)
			//								) );
			$comentarios = $this->paginate('Comentario',array('Item.id'=>$id));								
			$this->set('items', $items);
			$this->set('caracteristicas',$caracteristicas);
			$this->set('talla',$talla);
			$this->set('comentarios',$comentarios);
			
			//Variables idItem y Talla
			$this->set('idItem',$id);
			$this->set('talla',$talla);
			
		}
	}
	
	function index($id = null){
		$this->paginate = array(
            		'order' => array(
                	'Item.id' => 'desc'
                	),
					'limit'=>8
              );
		if($id == null){
			//$items = $this->Imagene->find('all');
			$items = $this->paginate('Imagene');
			$this->set('items', $items);
		}else{
			$items = $this->paginate('Imagene', array('Item.subcategoria_id'=>$id) );
			$this->set('items', $items);
		}
	}
	
	function buscar(){
		$this->paginate = array(
            		'order' => array(
                	'Item.id' => 'desc'
                	),
					'limit'=>8
              );
		if(empty($this->data)){
			//$items = $this->Imagene->find('all');
			$items = $this->paginate('Imagene');
			$this->set('items', $items);
		}else{
			$conditions = array("OR" => array (
								"Item.nombre LIKE" => "%".$this->data['Catalogos']['nombre']."%",
								"Item.descripcion LIKE" => "%".$this->data['Catalogos']['nombre']."%"
								)
						);
			$items = $this->paginate('Imagene', $conditions );
			$this->set('items', $items);
		}
	}
}
?>