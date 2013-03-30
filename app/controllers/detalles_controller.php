<?php
class DetallesController extends  AppController {
	var $name ='Detalles';
	var $layout = 'admin';
	
	function add(){
		if (!empty($this ->data) ){
			$this-> Detalle ->create();
			if ($this->Detalle->save($this->data)) {
				$this->Session->setFlash('El detalle  ha sido guardado');
				$this->redirect( array('action' => 'index'), null, true);
			} else {
				$this->Session->setFlash('El detalle  no fue guardado');
			}
		}
	}

	function index(){
		$this->set('detalles', $this->Detalle->find('all'));
	}
	
	function edit( $id=null ){
		if(!$id){
			$this->Session->setFlash('Detalle invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Detalle->find(array('Detalle.id'=>$id));
		} else {
			if($this->Detalle->save($this->data)){
				$this->Session->setFlash('El detalle ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('El detalle no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
	}
	
	
		function delete($id = null){
		
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Detalle->delete($id) ){
			$this->Session->setFlash('Detalle: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}
}
?>
