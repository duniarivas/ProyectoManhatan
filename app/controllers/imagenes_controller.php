<?php
class ImagenesController extends  AppController {
	var $name ='Imagenes';
	var $layout = 'admin';
	var $helpers = array(
		'Html',
		'Session',
		'Paginator'
	);
	var $paginate = array(
		'limit'=>5,
		'order'=>array('Imagene.id'=>'asc')
	);
	var $components = array('Uploader.Uploader');
	
	function add(){
		if (!empty($this ->data) ){
			$this-> Imagene ->create();
			if ($this->Imagene->validates()) {
				if ($this->Imagene->save($this->data)) {
					$this->Session->setFlash('La Imagen a sido guardada');
					$this->redirect( array('action' => 'index'), null, true);
				} else {
					$this->Session->setFlash('La Imagen no fue guardada, Revise El Formulario');
				}
			}
		}
		$this->set('items',$this->Imagene->Item->find('list'));
	}

	function index($id = null){
		if (!$id){
			$this->set('imagenes', $this->paginate('Imagene'));
		} else {
			$condicion = array('Item.id'=>$id);
			$this->set('imagenes', $this->paginate('Imagene', $condicion));
		}
	}
	
	function edit( $id = null ){
	#debug($this->Item->find(array('Item.id'=>$id)));
		if(!$id){
			$this->Session->setFlash('Caracteristica invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Caracteristica->find(array('Caracteristica.id'=>$id));
		} else {
			if($this->Caracteristica->save($this->data)){
				$this->Session->setFlash('La caracteristica ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('La Caracteristica no ha podido ser guardado. Intentalo de nuevo.');
			}
		}
	}
	
	
	function delete($id = null){
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Imagene->delete($id) ){
			$this->Session->setFlash('Imagen: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}
	
}

?>
	