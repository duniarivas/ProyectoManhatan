<?php
class Usuario extends AppModel{
	var $name ='Usuario';
	var $displayField = 'nombre';
	var $validate = array(
		'nombre' => array(
			'nombrevalido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
			),
			'between'=>array(
				'rule'=>array('between',3,15),
				'message'=>'El nombre debe ser entre 3 y 10 caracteres'
			)
		),
		'apellido' => array(
			'apellidovalido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
			),
			'between'=>array(
				'rule'=>array('between',4,25),
				'message'=>'El apellido debe ser entre 4 y 25 caracteres'
			)
		),
		'email' => array(
			'email'=>array(
				'rule'=>array('email', true),
				'required'=>true,
				'message'=>'Escriba un email valido'
			),
			'login'=>array(
				'rule'=>'isUnique',
				'message'=>'Este e-mail ya existe'
			)
		),
		'passwordConfirm' => array(
			'between'=>array(
				'rule'=>array('between',8,25),
				'message'=>'El password debe ser entre 8 y 25 caracteres'
			)
		)
	);

}
?>