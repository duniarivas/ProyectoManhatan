<div class="urbangreymenu">
	<?php
		echo "<h3 class='head'>Categor&iacute;as</h3>";
		$categoriaActual='';
		foreach($subcategorias as $subcategoria):
			if($categoriaActual != $subcategoria['Categoria']['nombre']){
				if($categoriaActual!=''){
					echo "</ul>";
				}
				echo "<h3 class='headerbar'>".$subcategoria['Categoria']['nombre']."</h3>";
				echo "<ul class='submenu'>";
			}
			echo "<li>";
			echo $this->Html->link($subcategoria['Subcategoria']['nombre'],array('controller'=>'catalogos','action'=>'index',$subcategoria['Subcategoria']['id']));
			echo "</li>";
			
			$categoriaActual=$subcategoria['Categoria']['nombre'];
		endforeach;
	?>
</div>