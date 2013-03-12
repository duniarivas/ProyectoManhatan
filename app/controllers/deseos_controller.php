<?php
class DeseosController extends  AppController {
	var $name = 'Deseos';
	var $layout = 'admin';
	var $uses = array('Deseo', 'Subcategoria');
	
	function add(){
		if (!empty($this->data) ){
			$filas = $this->Deseo->find('all',array('conditions'=>array(
														'Deseo.usuario_id'=>$this->data['Deseo']['usuario_id'],
														'Deseo.item_id'=>$this->data['Deseo']['item_id']
													)
												)
									);
			$existe = false;
			foreach($filas as $fila){
				$existe = true;
			}
			
			if(!$existe){
				$this->Deseo->create();
				if ($this->Deseo->save($this->data) ){
					$this->Session->setFlash('Agregaste Un Nuevo Deseo En Tu Cajita.');
					$this->redirect( array('controller'=>'catalogos',
											'action' => 'detalle',
											$this->data['Deseo']['item_id'],
											$this->data['Deseo']['talla']), null, true);
				} else {
					$this->Session->setFlash('Ocurrio Un Error, Intenta Nuevamente');
					$this->redirect( array('controller'=>'catalogos',
											'action' => 'detalle',
											$this->data['Deseo']['item_id'],
											$this->data['Deseo']['talla']), null, true);
				}
			} else {
				$this->Session->setFlash('Ya Tiene Este Item En Sus Deseos.');
					$this->redirect( array('controller'=>'catalogos',
											'action' => 'detalle',
											$this->data['Deseo']['item_id'],
											$this->data['Deseo']['talla']), null, true);
			}
		}
	}
	
	function index(){
		$this->set('deseos', $this->Deseo->find('all'));
	}
	
	function edit( $id=null ){
		if(!$id){
			$this->Session->setFlash('Deseo invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Deseo->find(array('Deseo.id'=>$id));
		} else {
			if($this->Deseo->save($this->data)){
				$this->Session->setFlash('El deseo a sido guardado');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('El deseo no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
	}


	function delete($id = null){
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'deseos'), null, true);
		}
		if( $this->Deseo->delete($id) ){
			$this->Session->setFlash('Su Deseo ha sido eliminado.');
			$this->redirect(array('action'=>'deseo'), null, true);
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'deseo'), null, true);
		}
	}
	
	function deseo(){
		// Para Generar Menu, Buscamos Subcategorias
		$subcategorias=$this->Subcategoria->find('all',array('order'=>'Subcategoria.categoria_id ASC'));
		$this->set('subcategorias',$subcategorias);
		//////////
		$this->layout='default';
		if($this->Auth->user()){
			$usuario = $this->Auth->user();
			
			$this->paginate = array(
								 'order' => array(
								'Item.nombre' => 'asc'
								),
								'limit' => 4
							);
							
			$deseos = $this->paginate('Deseo', array('Deseo.usuario_id'=>$usuario['Usuario']['id']));
			$this->set('deseos',$deseos);
		} else {
			$this->Session->setFlash('Debe iniciar Sesion.');
		}
	}
	
	function buscar(){
		// Para Generar Menu, Buscamos Subcategorias
		$subcategorias=$this->Subcategoria->find('all',array('order'=>'Subcategoria.categoria_id ASC'));
		$this->set('subcategorias',$subcategorias);
		//////////
		$this->layout='default';
		$this->paginate = array(
								 'order' => array(
								'Usuario.id' => 'asc'
								),
								'limit' => 5,
								 'fields' => array('DISTINCT (Usuario.id) as id, Usuario.nombre, Usuario.apellido')
							);
		$perfiles = null;
		if(!empty($this->data)){
			$nombre_apellido = $this->data['Deseo']['nombre'];
			$conditions = array("OR" => array (
								"Usuario.nombre LIKE" => "%".$nombre_apellido."%",
								"Usuario.apellido LIKE" => "%".$nombre_apellido."%"
								)
						);
			//$perfiles=$this->Deseo->find('all', array('conditions' => $conditions));
			$perfiles=$this->paginate('Deseo', $conditions);
			$this->set('perfiles',$perfiles);
		} else {
			$this->set('perfiles',$perfiles);
		}
	}
	
	function perfil($id = null){
		// Para Generar Menu, Buscamos Subcategorias
		$subcategorias=$this->Subcategoria->find('all',array('order'=>'Subcategoria.categoria_id ASC'));
		$this->set('subcategorias',$subcategorias);
		//////////
		$this->layout='default';
		
		$this->paginate = array(
								 'order' => array(
								'Item.nombre' => 'asc'
								),
								'limit' => 4
							);
		
		if($id == null){
			$this->redirect(array('action'=>'buscar'), null, true);
		} else {
			$deseos = $this->paginate('Deseo', array('Deseo.usuario_id'=>$id) );
			$this->set('deseos',$deseos);
										
		}
	}
				
}
?>