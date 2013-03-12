<?php
class Item extends AppModel{
	var $name = 'Item';
	var $displayField = 'nombre';
	var $belongsTo = array('Subcategoria' =>
								array( 'className' => 'Subcategoria',
									   'condition' => '',
									   'order' => '',
									   'foreignKey' => 'subcategoria_id'
								)
					  );
	
	var $validate = array(
		'nombre' => array(
			'nombrevalido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
				),
			'between'=>array(
				'rule'=>array('between',4,30),
				'message'=>'El nombre debe ser entre 4 y 30 caracteres'
			)
		),
		'precio' => array(
			'decimal'=>array(
				'rule'=>array('decimal',2),
				'required'=>true,
				'message'=>'Inserte numeros con dos puntos decimal'
			)
		)	
	);
}
?>