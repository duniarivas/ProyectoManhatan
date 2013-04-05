<?php
class SubcategoriasController extends  AppController {
	var $name = 'Subcategorias';
	var $layout = 'admin';
	var $helpers  = array(
              'Html',
              'Session',
              'Paginator'
              );
	var $paginate = array(
              'limit' => 5,
              'order' => array(
                'Subcategoria.id' => 'asc'
                )
              );

	function add(){
            parent::soloAdministrador($this->Auth->user());

		if (!empty($this->data) ){
			$this->Subcategoria->create();
			if ($this->Subcategoria->save($this->data) ){
				$this->Session->setFlash('La subcategoria fue guardada.');
				$this->redirect( array('action'=>'index'), null, true );
			} else {
				$this->Session->setFlash('La subcategoria no fue guardada. Intente Nuevamente.');
			}
		}
		$this->set('categorias',$this->Subcategoria->Categoria->find('list'));
	}

	function index($id = null){
            parent::soloAdministrador($this->Auth->user());

		if (!$id){
			$this->set('subcategorias', $this->paginate('Subcategoria'));
		} else {
			$condicion = array('Categoria.id'=>$id);
			$this->set('subcategorias', $this->paginate('Subcategoria', $condicion));
		}
	}

	function edit( $id=null ){
            parent::soloAdministrador($this->Auth->user());

		if(!$id){
			$this->Session->setFlash('Subcategoria invalida');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Subcategoria->find(array('Subcategoria.id'=>$id));
			$this->set('categorias',$this->Subcategoria->Categoria->find('list'));
		} else {
			if($this->Subcategoria->save($this->data)){
				$this->Session->setFlash('La subcategoria ha sigo guardada');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('La subcategoria no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
	}


	function delete($id = null){
            parent::soloAdministrador($this->Auth->user());
            
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Subcategoria->delete($id) ){
			$this->Session->setFlash('Subcategoria: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index'), null, true);
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}

}
?>
