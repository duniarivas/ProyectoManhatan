<div style="width:450px;margin:60px auto;">
	<fieldset>
		<legend style="background-color:transparent;">Inicie Sesi&oacute;n</legend>
		
	<?php
    	echo $form->create('Usuario', array('action' => 'login'));
		echo $form->input('email',array('placeholder'=>'Tuemail@TuDominio.com'));
   		echo $form->input('password',array('placeholder'=>'*****'));
    	echo $form->end('Login');
        echo $this->Html->link('No Tienes Una Cuenta?, Registrate','/usuarios/registro');
	?>
	</fieldset>
	
</div>