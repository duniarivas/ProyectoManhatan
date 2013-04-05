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
            $this->soloAdministrador($this->Auth->user());

		if (!empty($this ->data) ){
			if ($this->Imagene->validates()) {
                            $this-> Imagene ->create();
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
            parent::soloAdministrador($this->Auth->user());

		if (!$id){
			$this->set('imagenes', $this->paginate('Imagene'));
		} else {
			$condicion = array('Item.id'=>$id);
			$this->set('imagenes', $this->paginate('Imagene', $condicion));
		}
	}

	function edit( $id = null ){
            parent::soloAdministrador($this->Auth->user());
	#debug($this->Item->find(array('Item.id'=>$id)));
		if(!$id){
			$this->Session->setFlash('ID invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data = $this->Imagene->find(array('Imagene.id'=>$id));
                        $this->set('items', $this->Imagene->Item->find('list'));
                        $this->set('data',$this->data);
		} else {
			if($this->Caracteristica->save($this->data)){
				$this->Session->setFlash('La imagen ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('La Imagen no ha podido ser guardado. Intentalo de nuevo.');
			}
		}
	}


	function delete($id = null){
            $this->soloAdministrador($this->Auth->user());

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
