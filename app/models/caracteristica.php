<?php
class Caracteristica extends AppModel{
	var $name ='Caracteristica';
	var $belongsTo = array('Item' =>
							array('className' => 'Item',
								  'condition' =>'',
								  'order' => '',
								  'foreignKey' => 'item_id'
							)
					);
		
	var $validate = array(
		'talla' => array(
			'tallavalido'=>array(
				'rule'=>'/[A-Za-z0-9]+/',
				'message'=>'Escriba solo Letras o Numeros',
				'required'=>true
				),
			'between'=>array(
				'rule'=>array('between',1,5),
				'message'=>'El nombre debe ser entre 1 y 5 caracteres'
			)
		),
		'color' => array(
			'color'=>array(
				'rule'=>'/[A-Za-z]+/',
				'required'=>true,
				'message'=>'Escriba solo letras'
			)
		)	
	);
}
?>