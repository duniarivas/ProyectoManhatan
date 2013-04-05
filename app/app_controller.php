<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * This is a placeholder class.
 * Create the same file in app/app_controller.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller {
	var $components = array('Auth','Session','RequestHandler');

	/**
	 *	Metodo para revisar si un usuario logueado
	 * 	es Un Administrador.
	 *	Si no es un administrador, se redirecciona al admin controller
	 *	y se lo desloguea. Y se lo envia a la interfaz de home para usuarios
	 */
	function soloAdministrador($datosUsuario){
                if (!isset($datosUsuario['Usuario']['tipo']))
                   $this->redirect(array('controller' => 'admin755', 'action' => 'index'));

                if( $datosUsuario['Usuario']['tipo'] == 1 ){	// Si Es Un Usuario Normal: 0->admin; 1->usuario
		    $this->redirect(array( 'controller'=>'home', 'action'=>'index' ) );
		}
                //$this->Auth->logout();
	}

        function __url() {
            $port = env('SERVER_PORT') == 80 ? '' : ':'.env('SERVER_PORT');
            return env('SERVER_NAME').$port.env('REQUEST_URI');
        }

	/**
	 *	Configuracion de la Autorizacion de usuarios
	 */
	function beforeFilter() {
            //if(!$this->RequestHandler->isSSL()) {
            //    $this->redirect('https://'.$this->__url());
            //}


		$this->Auth->userModel = 'Usuario';
  		$this->Auth->fields = array('username' => 'email', 'password' => 'password');
		$this->Auth->loginError = "Lo siento, El email o password son incorrectos.";
		$this->Auth->authError = "Lo Sentimos, Usted debe estar registrado para ver esta p&&aacute;gina";
			$this->Auth->loginAction = array('controller' => 'usuarios', 'action' => 'login');
			$this->Auth->loginRedirect = array('controller' => 'home', 'action' => 'index');
			$this->Auth->logoutRedirect = array('controller' => 'home', 'action' => 'index');
		$this->Auth->allow();
		$this->set('user', $this->Auth->user());

	}
}
