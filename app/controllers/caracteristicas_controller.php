<?php
class CaracteristicasController extends  AppController {
	var $name ='Caracteristicas';
	var $layout = 'admin';
	var $paginate = array(
				'order' => array(
							'Caracteristica.id' => 'asc'
						),
				'limit'=>10
              );

	function add($idItem = null){
            parent::soloAdministrador($this->Auth->user());

            if($idItem == null){
		    $this->set('items', $this->Caracteristica->Item->find('list'));
	    } else {
			$this->set('items', $this->Caracteristica->Item->find('list',array('conditions'=>array('Item.id'=>$idItem) ) ));
	    }

	    if (empty($this ->data) )
                return;

        $this-> Caracteristica ->create();
        if ($this->Caracteristica->save($this->data)) {
			$this->Session->setFlash('La caracteristica a sido guardada');
			$this->redirect( array('action' => 'index',$this->data['Caracteristica']['item_id']), null, true);
	    } else {
			$this->Session->setFlash('La tarea no fue guardada');
	    }
	}

	function index($id = null){
            parent::soloAdministrador($this->Auth->user());

                if (!$id){
			$this->set('caracteristicas', $this->paginate('Caracteristica'));
		} else {
			$this->set('caracteristicas', $this->paginate('Caracteristica', array('Item.id'=>$id)
												)
										  );
		}
		$this->set('idItem',$id);
	}

	function edit( $id = null ){
            parent::soloAdministrador($this->Auth->user());
	#debug($this->Item->find(array('Item.id'=>$id)));
		if(!$id){
			$this->Session->setFlash('Caracteristica invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Caracteristica->find(array('Caracteristica.id'=>$id));
			$this->set('items', $this->Caracteristica->Item->find('list'));
		} else {
			if($this->Caracteristica->save($this->data)){
				$this->Session->setFlash('La caracteristica ha sido guardado');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('La Caracteristica no ha podido ser guardado. Intentalo de nuevo.');
			}
		}
	}


	function delete($id = null){
            parent::soloAdministrador($this->Auth->user());
            
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Caracteristica->delete($id) ){
			$this->Session->setFlash('Caracteristica: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}

}
?>
