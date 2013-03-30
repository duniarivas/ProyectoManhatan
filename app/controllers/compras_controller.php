<?php
class ComprasController extends  AppController {
	var $name ='Compras';
	var $layout = 'admin';
	
	function add(){
		if (!empty($this ->data) ){
			$this-> Compra->create();
			if ($this->Compra->save($this->data)) {
				$this->Session->setFlash('La compra ha sido guardada');
				$this->redirect( array('action' => 'index'), null, true);
			} else {
				$this->Session->setFlash('La compra no fue guardada');
			}
		}
	$this->set('usuarios', $this->Compra->Usuario->find('list') );
	}

	function index($id = null){
		if (!$id){
			$this->set('compras', $this->Compra->find('all'));
		} else {
			$this->set('compras', $this->Compra->find('all', array(
											'conditions' => array('Usuario.id'=>$id)
											) ) );
		}
	}
	
	function edit( $id=null ){
		if(!$id){
			$this->Session->setFlash('Compra invalida');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Compra->find(array('Compra.id'=>$id));
			$this->set('usuarios', $this->Compra->Usuario->find('list') );
		} else {
			if($this->Compra->save($this->data)){
				$this->Session->setFlash('La compra ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('La compra no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
		
	}
		function delete($id = null){
		
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Compra->delete($id) ){
			$this->Session->setFlash('Compra: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}
	
}
?>
