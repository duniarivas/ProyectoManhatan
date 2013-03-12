<?php 
/**
*Creacion del modelo para la tabla paises
*/
class Paise extends AppModel{
	var $name = 'Paise';
	var $displayField = 'nombre';
	var $hasMany = 'Direccione';
	var $validate = array(
		'nombre' => array(
			'nombrevalido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
				),
			'between'=>array(
				'rule'=>array('between',3,50),
				'message'=>'El nombre debe ser entre 3 y 50 caracteres'
			)
	
		)	
	);
}
?>