<?php
class CategoriasController extends  AppController {
	var $name = 'Categorias';
	var $layout = 'admin';
	var $helpers = array(
				'Html',
				'Session',
				'Paginator'
				);
	var $paginate = array(
				'limit' => 5,
				'order' => array(
					'Categoria.id'=>'asc'
					)
				);

	function add(){
            parent::soloAdministrador($this->Auth->user());

		if (!empty($this ->data) ){
			$this-> Categoria ->create();
			if ($this->Categoria->save($this->data)) {
				$this->Session->setFlash('La categoria ha sido a sido guardada');
				$this->redirect( array('action' => 'index'), null, true);
			} else {
				$this->Session->setFlash('La categoria no fue guardada');
			}
		}
	}

	function index(){
            parent::soloAdministrador($this->Auth->user());
		$this->set('categorias', $this->paginate('Categoria'));
	}

	function edit( $id=null ){
		if(!$id){
			$this->Session->setFlash('Categoria invalida');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Categoria->find(array('Categoria.id'=>$id));
		} else {
			if($this->Categoria->save($this->data)){
				$this->Session->setFlash('La categoria ha sido guardada');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('La categoriano ha podido ser guardado.Intentalo de nuevo.');
			}
		}
	}


    function delete($id = null){
        parent::soloAdministrador($this->Auth->user());

		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Categoria->delete($id) ){
			$this->Session->setFlash('Categoria: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}

}
?>