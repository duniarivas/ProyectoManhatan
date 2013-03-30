<?php
class UsuariosController extends  AppController {
	var $name ='Usuarios';
	var $layout = 'admin';
	var $components = array('Email','Auth','Administrador');
	var $uses= array('Usuario','Direccione');
	
	function login() {
            $this->layout = 'login';
	}
 
	function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	/**
	 *	Metodo Administrador
	 */
	function add(){
		$this->soloAdministrador($this->Auth->user());
		$this->layout='admin';
		if (!empty($this->data) ){
			$this->Usuario->create();
			if ($this->Usuario->save($this->data) ){
				$this->Session->setFlash('El usuario fue guardado.');
				$this->redirect( array('action'=>'index'), null, true );
			} else {
				$this->Session->setFlash('El Usuario no fue guardado. Intente Nuevamente.');
			}
		}
	}
	
	function registro(){
		$this->layout = 'default';
                
		if (!empty($this->data) ){
                    
			//$this->Usuario->create();
			if ($this->data['Usuario']['password'] ==
				$this->Auth->password($this->data['Usuario']['passwordConfirm'])) {
				
				$this->Usuario->create();
			
				if ($this->Usuario->save($this->data) ){
					
					// Passwords match, continue processing
					$this->Session->setFlash('Usted fue registrado exitosamente.');
					$this->redirect( array('controller'=>'home','action'=>'index'), null, true );
				} else {
					$this->Session->setFlash('Usted no pudo registrarse. Intente Nuevamente.');
				}
				
			} else {
				$this->Session->setFlash('Los Passwords No Coinciden.');
			}
		}
	}

	function perfil(){
		$this->layout = 'default';
		if($this->Auth->user()){
			$dataUsuario = $this->Auth->user();
			$usuario = $this->Usuario->read(null,$dataUsuario['Usuario']['id']);
			$this->set('usuario',$usuario);
			$direcciones = $this->Direccione->find('all', array('conditions'=>
													array('Direccione.usuario_id'=>$dataUsuario['Usuario']['id'])
														)
											);
			$this->set('direcciones',$direcciones);
		} else {
			$this->Session->setFlash('Debe Iniciar Sesion');
			$this->redirect(array('action'=>'login'),null, true);
		}
	}
	
	function password(){
		$this->layout = 'default';
		
		if (!empty($this->data)) {
				
			if ($this->data['Usuario']['password'] ==
				$this->Auth->password($this->data['Usuario']['passwordConfirm'])) {
				
				if ($this->Usuario->save($this->data)) {
					$this->Session->setFlash('Password ha Sido Cambiado.');
					$this->redirect(array('action'=>'perfil',$this->data['Usuario']['id']),null, true);
				} else {
					$this->Session->setFlash('Password no pudo ser Cambiado.');
				}
				
			} else {
				$this->Session->setFlash('Los Passwords No Coinciden.');
			}
				
		} else {
			$this->data = $this->Usuario->findById($this->Auth->user('id'));
		}

	}
	/**
	 *	Metodo Administrador
	 */
	function index(){
		$this->layout='admin';		
		$this->set('usuarios', $this->Usuario->find('all'));
	}
	
	function edit( $id=null ){
		$this->soloAdministrador($this->Auth->user());
		
		if(!$id){
			$this->Session->setFlash('Usuario invalido');
			$this->redirect(array('action'=>'index'),null, true);
		}
		if(empty($this->data)){
			$this->data=$this->Usuario->find(array('Usuario.id'=>$id));
		} else {
			if($this->Usuario->save($this->data)){
				$this->Session->setFlash('El usuario ha sido guardado');
				$this->redirect(array('action'=>'index', null, true));
			} else {
				$this->Session->setFlash('El usuario no ha podido ser guardado'.'Intentalo de nuevo.');
			}
		}
	}
	
	/**
	 *	Metodo Administrador
	 */
	function delete($id = null){
		$this->layout='admin';
		if (!$id){
			$this->Session->setFlash('ID invalida');
			$this->redirect(array('action'=>'index', null, true));
		}
		if( $this->Usuario->delete($id) ){
			$this->Session->setFlash('Usuario: '.$id.' ha sido eliminado.');
			$this->redirect(array('action'=>'index', null, true));
		} else {
			$this->Session->setFlash('ID no es valida.');
			$this->redirect(array('action'=>'index', null, true));
		}
	}
	
	/**
	 *	Metodo Administrador
	 */
	function email(){
		$this->layout='admin';
		if (!empty($this->data) ){
			$usuarios = $this->Usuario->find('all');
			
			foreach($usuarios as $usuario) {
				//$User = $this->Usuario->read(null,2);
				
				$this->Email->to = $usuario['Usuario']['email'];				// A Quien Enviamos
				$this->Email->bcc = array('copia@boutique.com');				// Con Copia
				$this->Email->subject = $this->data['Usuario']['titulo'];		// Titulo de Email	
				$this->Email->replyTo = 'soporte@boutique.com';					// Respuesta A:
				$this->Email->from = 'Boutique <no_respuesta@boutique.com>';	// De Que Email
				$this->Email->template = 'default'; 							// Que Plantilla
				$this->Email->sendAs = 'both'; 									// Envio como texto o HTML o Ambos
				
				//Set view variables as normal
				$this->set('nombre', $usuario['Usuario']['nombre']);
				$this->set('apellido', $usuario['Usuario']['apellido']);
				$this->set('mensaje', $this->data['Usuario']['contenido']);
				
				$this->Email->send();
			}	
			
			$this->Session->setFlash('Se Envio El Email.');	
		} 
	}
	
}
?>