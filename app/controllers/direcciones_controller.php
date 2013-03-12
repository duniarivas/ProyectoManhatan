<?php
class DireccionesController extends  AppController {
	var $name = 'Direcciones';
	var $layout = 'admin';
		
	function add(){
		$this->layout='default';
		if (!empty($this ->data) ){
			$this-> Direccione ->create();
			if ($this->Direccione->save($this->data)) {
				$this->Session->setFlash('La direccion ha sido guardada');
				$this->redirect( array(
									'controller'=>'usuarios',
									'action' => 'perfil',
									$data['Usuario']['id']), null, true);
			} else {
				$this->Session->setFlash('La direccion no fue guardada');
			}
		} else {
			if($this->Auth->user()){
				$this->set('paises', $this->Direccione->Paise->find('list'));
				$usuario = $this->Auth->user();
				$this->set('usuarioID',$usuario['Usuario']['id']);
				
			} else {
				$this->redirect( array('controller'=>'home','action' => 'index'), null, true);
			}
		}
	}

	function index(){
		$this->set('direcciones', $this->Direccione->find('all'));
	}
	
	function edit( $id=null ){
		if(!$id){
			$this->Session->setFlash('Direccion invalida');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Direccione->find(array('Direccione.id'=>$id));
			if($this->Auth->user()){
				$this->set('paises', $this->Direccione->Paise->find('list'));
				$usuario = $this->Auth->user();
				$this->set('usuarioID',$usuario['Usuario']['id']);
				
			} else {
				$this->redirect( array('controller'=>'home','action' => 'index'), null, true);
			}
		} else {
			if($this->Direccione->save($this->data)){
				$this->Session->setFlash('La direccion ha sido guardada');
				$this->redirect( array(
									'controller'=>'usuarios',
									'action' => 'perfil',
									$data['Usuario']['id']), null, true);
			} else {
				$this->Session->setFlash('La direccion no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
	}
	
	
		function delete($id = null){
		
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Direccione->delete($id) ){
			$this->Session->setFlash('Direccione: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}
	
}
			
?>
	