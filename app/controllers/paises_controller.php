<?php
class PaisesController extends  AppController {
	var $name = 'Paises';
	var $layout = 'admin';
	var $helpers  = array(
              'Html', 
              'Session',
              'Paginator'
              );
	var $paginate = array(
              'limit' => 10,
              'order' => array(
                'Paise.id' => 'asc'
                )
              );                
	
	function add(){
		if (!empty($this->data) ){
			$this->Paise->create();
			if ($this->Paise->save($this->data) ){
				$this->Session->setFlash('El Pais fue guardado.');
				$this->redirect( array('action'=>'index'), null, true );
			} else {
				$this->Session->setFlash('El Pais no fue guardado. Intente Nuevamente.');
			}
		}
	}
	
	function index(){
		$this->set('paises', $this->paginate('Paise'));
	}
	
	function edit( $id=null ){
		if(!$id){
			$this->Session->setFlash('Pais invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Paise->find(array('Paise.id'=>$id));
		} else {
			if($this->Paise->save($this->data)){
				$this->Session->setFlash('El pais ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('El pais no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
	}
	
	function delete($id = null){	
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Paise->delete($id) ){
			$this->Session->setFlash('Pais: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}
	
}
?>