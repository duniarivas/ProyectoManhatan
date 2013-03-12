<?php
class Imagene extends AppModel{
	var $name ='Imagene';
	var $belongsTo = array('Item' =>
							array('className' => 'Item',
								  'condition' =>'',
								  'order' => '',
								  'foreignKey' => 'item_id'
							)
					);
					
	var $actsAs = array( 
		'Uploader.Attachment' => array(
			'fileName' => array(
				'name'		=> 'formatFileName',	// Nombre del metodo para formatear archivos
				'dbColumn'	=> 'url',	// El nombre de la columna de la base de datos que guarda la ruta.
				'maxNameLength'	=> 30,			// Tamano maximo del nombre del archivo
				'overwrite'	=> true,		// sobreescribir el archivo con el mismo nombre
				'stopSave'	=> true,		// Detener el metodo guardar si falla el archivo.
			)
		),
		'Uploader.FileValidation' => array(
        'fileName' => array(
                       'maxWidth' => array(
                               'value' => 250,
                               'error' => 'Ancho Incorrecto'
                       ),
                       'maxHeight' => array(
                               'value' => 300,
                               'error' => 'Altura Incorrecta'
                       ),
                       'extension' => array(
                               'value' => array('gif', 'jpg', 'png', 'jpeg'),
                               'error' => 'Extension Incorrecta',
                       ),
                       'filesize' => array(
                               'value' => 5242880,
                               'error' => 'Imagen Muy Pesada'
                       ),
                       'required' => array(
                               'value' => true,
                               'error' => 'Campo Requerido'
                       )
               )
		)
	);
	
	/**
	 * Format the filename a specific way before uploading and attaching.
	 * 
	 * @access public
	 * @param string $name	- The current filename without extension
	 * @param string $ext	- The file extension
	 * @param string $field	- The form field name
	 * @param array $file	- The $_FILES data
	 * @return string
	 */
	public function formatFileName($name, $ext, $field, $file) {
		return $this->find('count').$name.'.'. $ext;
	}
}
?>