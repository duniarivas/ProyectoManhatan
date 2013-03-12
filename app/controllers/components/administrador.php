<?php
class AdministradorComponent extends Object {
	var $name ='Admin755';
	var $layout = 'login';
	
	/**
	 *	Metodo para revisar si un usuario logueado
	 * 	es Un Administrador.
	 *	Si no es un administrador, se redirecciona al admin controller
	 *	y se lo desloguea. de modo que se le exija iniciar sesion
	 *	como administrador.
	 */
	function soloAdministrador($datosUsuario){
		if($datosUsuario['Usuario']['tipo']==1){	// Si Es Un Usuario Normal: 0->admin;1->usuario
			$this->redirect(array(
								'controller'=>'admin755',
								'action'=>'logout'
							)
					);
		}
	}
	
}
?>