function edit( $id=null ){
		if(!$id){
			$this->Session->setFlash('Categoria invalida');
			$this->redirect(array('action'=>'index'),null, true);
		}
			if(empty($this->data)){
			  $this->data=$this->Categoria->find(array('id'=>$id));
			}else{
				if($this->Categoria->save($this->data)){
					$this->Session->setFlash('La categoria ha sido guardado');
					$this->redirect(array('action'=>'index', null, true);
					}else{
					$this->Session->setFlash('La categoria no ha podido ser guardado'.'Intentalo de nuevo.');
					}
				}
			}