<?php
class ComentariosController extends  AppController {
	var $name = 'Comentarios';
	var $layout = 'admin';

	function add(){
            parent::soloAdministrador($this->Auth->user());
            
		if (!empty($this ->data) ){
			$this-> Comentario ->create();
			if ($this->Comentario->save($this->data)) {
				$this->Session->setFlash('El comentario a sido guardado');
				$this->redirect( array('controller'=>'catalogos',
										'action' => 'detalle',
										$this->data['Comentario']['item_id']), null, true);
			} else {
				$this->Session->setFlash('El comentario no fue guardado');
				$this->redirect( array('controller'=>'catalogos',
										'action' => 'detalle',
										$this->data['Comentario']['item_id']), null, true);
			}
		}
	}

	function index($id = null){
            parent::soloAdministrador($this->Auth->user());

            if($id!=null)
                $this->set('comentarios', $this->Comentario->find('all'), array('conditions' => array('Comentario.usuario_id' => $id)));
            else
		$this->set('comentarios', $this->Comentario->find('all'));
	}

	function edit( $id=null ){
            parent::soloAdministrador($this->Auth->user());

		if(!$id){
			$this->Session->setFlash('Comentario invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Comentario->find(array('Comentario.id'=>$id));
		} else {
			if($this->Comentario->save($this->data)){
				$this->Session->setFlash('El comentario ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('El comentario no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
	}


	function delete($id = null){
            parent::soloAdministrador($this->Auth->user());

		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Comentario->delete($id) ){
			$this->Session->setFlash('Comentario: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}

}
?>