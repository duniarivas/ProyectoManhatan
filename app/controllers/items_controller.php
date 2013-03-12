<?php
class ItemsController extends  AppController {
	var $name ='Items';
	var $layout = 'admin';
	var $helpers = array(
		'Html',
		'Session',
		'Paginator'
		);
	var $paginate = array(
		'limit' => 10,
		'order' => array(
					'Item.id' => 'asc'
					)
		);
	
	function add(){
		if (!empty($this->data) ){
			$this->Item->create();
			if ($this->Item->save($this->data) ){
				$this->Session->setFlash('El item fue guardado.');
				$this->redirect( array('action'=>'index'), null, true );
			} else {
				$this->Session->setFlash('El item no fue guardada. Intente Nuevamente.');
			}
		}
		$this->set('subcategorias', $this->Item->Subcategoria->find('list') );
	}
	
	function index($id = null){
		if (!$id){
			$this->set('items', $this->paginate('Item'));
		} else {
			$condicion = array('Subcategoria.id'=>$id);
			$this->set('items', $this->paginate('Item', $condicion));
		}
	}
	
	function edit( $id = null ){
	#debug($this->Item->find(array('Item.id'=>$id)));
		if(!$id){
			$this->Session->setFlash('Items invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Item->find(array('Item.id'=>$id));
			$this->set('subcategorias',$this->Item->Subcategoria->find('list'));
		} else {
			if($this->Item->save($this->data)){
				$this->Session->setFlash('El item ha sido guardado');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('El item no ha podido ser guardado. Intentalo de nuevo.');
			}
		}
	}
	
	function delete($id = null){
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Item->delete($id) ){
			$this->Session->setFlash('Item: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}
	
}
?>