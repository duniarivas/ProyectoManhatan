<?php 
/**
*Creacion del modelo para la tabla categoria
*/
class Categoria extends AppModel{
	var $name = 'Categoria';
	var $displayField = 'nombre';
	var $hasMany='Subcategoria';
	var $validate = array(
		'nombre' => array(
			'nombrevalido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
				),
			'between'=>array(
				'rule'=>array('between',4,20),
				'message'=>'El nombre debe ser entre 4 y 20 caracteres'
			)
		)	
	);
}
?>