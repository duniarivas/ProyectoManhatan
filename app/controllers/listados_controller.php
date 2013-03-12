<?php
class ItemsController extends  AppController {
	var $name ='Items';
	var $layout = 'admin';
	
	function add(){
		if (!empty($this->data) ){
			$this->Item->create();
			if ($this->Item->save($this->data) ){
				$this->Session->setFlash('El Item fue guardado.');
				$this->redirect( array('action'=>'index'), null, true );
			} else {
				$this->Session->setFlash('El Item no fue guardado. Intente Nuevamente.');
			}
		}
	}
	
	function index(){
		$this->set('items', $this->Item->find('all'));
	}
	
	function edit( $id = null ){
	#debug($this->Item->find(array('Item.id'=>$id)));
		if(!$id){
			$this->Session->setFlash('Items invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Item->find(array('Item.id'=>$id));
		} else {
			if($this->Item->save($this->data)){
				$this->Session->setFlash('El item ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
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
			$this->redirect(array('action'=>'index', null, true));
		}
	}
	
}
?>