<?php
class Subcategoria extends AppModel{
	var $name ='Subcategoria';
	var $displayField = 'nombre';
	var $belongsTo = 'Categoria';
	var $hasMany = 'item';
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