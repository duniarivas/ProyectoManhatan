<div style="width:450px;margin:10px auto;">
	<fieldset>
		<legend style="background-color:transparent;">Llene Sus Datos</legend>
		
	<?php
    	echo $form->create('Usuario', array('action' => 'login'));
		echo $form->input('email',array('placeholder'=>'Tuemail@TuDominio.com'));
   		echo $form->input('password',array('placeholder'=>'*****'));
    	echo $form->end('Login');
	?>
	</fieldset>
	
</div>