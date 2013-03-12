<?php
class Direccione extends AppModel{
	var $name = 'Direccione';
	var $belongsTo = array('Usuario' =>
								array( 'className' => 'Usuario',
									   'condition' => '',
									   'order' => '',
									   'foreignKey' => 'usuario_id'
								),
							'Paise'=> 
								        array('className'=>'Paise',
										'condition'=>'',
										'order'=>'',
										'foreignKey'=>'paise_id')
						
					  );
		 var $validate = array(
		'ciudad' => array(
			'ciudadvalido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
				),
			'between'=>array(
				'rule'=>array('between',5,15),
				'message'=>'El nombre debe ser entre 5 y 15 caracteres'
			)
		),
		'direccion1' => array(
			'direccion1valido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
				),
			'between'=>array(
				'rule'=>array('between',5,150),
				'message'=>'El nombre debe ser entre 5 y 150 caracteres'
			)
		),
		'direccion2' => array(
			'direccion2valido'=>array(
				'rule'=>'/[A-Za-z]+/',
				'message'=>'Escriba solo Letras',
				'required'=>true
				),
			'between'=>array(
				'rule'=>array('between',5,150),
				'message'=>'El nombre debe ser entre 5 y 150 caracteres'
			)
		),
		'telefono' => array(
			'telefono'=>array(
				'rule'=>'/[0-9]+/',
				'required'=>true,
				'message'=>'Escriba solo numeros'
			)
		),
			
	);
}
?>