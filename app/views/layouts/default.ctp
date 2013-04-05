<!DOCTYPE html>
<html lang="es">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Boutique
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('estilo');
		echo $this->Html->css('/rating/css/rating');
		echo $this->Html->css('tango/skin');

		echo $scripts_for_layout;
		
		echo $this->Html->script('jquery');
		echo $this->Html->script('cloud-carousel');
		echo $this->Html->script('/rating/js/rating_jquery_min');
		echo $this->Html->script('ddaccordion');
		echo $this->Html->script('jquery.jcarousel.min');
		echo $this->Html->script('conf-cloud-carousel');
		echo $this->Html->script('conf-miacordion');
		echo $this->Html->script('conf-micarousel');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="headercontenido">
				<div id="comandos">
                    <div id="comandosContenido">
					<?php 
						if( $user==null){
							echo $this->Html->link('registrarse','/usuarios/registro');
				 			echo " o "; 
							echo $this->Html->link('iniciar sesion','/usuarios/login');
						} else {
							echo "Bienvenido ". $user['Usuario']['nombre']." ".$user['Usuario']['apellido']."<br>";
							echo "opciones: ".
									$this->Html->link('perfil','/usuarios/perfil')
									." ".
									$this->Html->link('salir','/usuarios/logout');
						}
					?>
                      </div>
				</div>
				<?php echo $this->Html->image('logo.png',array('title'=>'Boutique Romane','alt'=>'Boutique Romane','width'=>'150px','height'=>'150px')) ?>
                
                 <div id="flash">
					<?php 
						echo $this->Session->flash(); 
						echo $this->Session->flash('auth'); 
					?>
				</div>
			</div>
			<div id="gris">
				<div id="menusuperior">
				<?php echo $this->Html->link('Home', array('controller'=>'home','action'=>'index') ); ?>
				<?php echo $this->Html->link('Catalogo', array('controller'=>'catalogos','action'=>'index') ); ?>
				<?php echo $this->Html->link('Cajita de Deseos', array('controller'=>'deseos','action'=>'deseo') ); ?>
				<?php echo $this->Html->link('Buscar Perfil', array('controller'=>'deseos','action'=>'buscar') ); ?>
				<?php echo $this->Html->link('Buscar Item', array('controller'=>'catalogos','action'=>'buscar') ); ?>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="contentcontenido">
				<?php echo $content_for_layout; ?>
			</div>
		</div>
		<div id="footer">
			<div id="footercontenido">
				<div id="footercaja">
                	Misc.
					<ul>
						<li> 
						<?php 
							echo $html->link('Acerca de Nosotros', array(
												'controller'=>'home',
												'action'=>'acercaDe'
											)); 
						?> 
						</li>
						<li>
						<?php 
							echo $html->link('Ubicacion - Google Maps', array(
												'controller'=>'home',
												'action'=>'ubicacion'
											)); 
						?> 
						</li>
					</ul>
				</div>
				<div id="footercaja">
					Ayuda
					<ul>
                                                <li>
						<?php 
							echo $html->link('PUF', array(
												'controller'=>'home',
												'action'=>'puf'
											)); 
						?> 
						</li>
					</ul>
				</div>
				<div id="footercaja">
					<ul style="list-style-type:none">
						<li> <?php echo $html->image('cake.power.gif',array('alt'=>'CakePHP','title'=>'CakePHP','url'=>'http://cakephp.org')) ?></li>
						<li> <?php echo $html->image('cc.png',array('alt'=>'Creative Commons','title'=>'Creative Commons','url'=>'http://creativecommons.org/licenses/by-nc-nd/3.0/')) ?></li>
						<li> <?php echo $html->image('paypal.jpg',array('alt'=>'PayPal','title'=>'PayPal','url'=>'http://paypal.com/')) ?></li>
					</ul>
				</div>
				<div id="footercajafin">
					Estamos En:
					<ul>
						<li> facebook </li>
						<li> twitter </li>
						<li> tumblr </li>
						<li> youtube </li>
					</ul>
					<hr>
					<?php
						echo $html->link($html->image('facebook.png', array('class'=>'socialImageLeft')),
										'http://facebook.com/pages/Boutique/278333322203367',
										array('escape'=>false,'target'=>'_BLANK'));
						
						echo $html->link($html->image('twitter.png', array('class'=>'socialImageRight')),
										'http://twitter.com/duniaboutique',
										array('escape'=>false,'target'=>'_BLANK'));
						
						echo $html->link($html->image('tumblr.png', array('class'=>'socialImageLeft')),
										'http://duniaboutique.tumblr.com',
										array('escape'=>false,'target'=>'_BLANK'));
						
						echo $html->link($html->image('youtube.png', array('class'=>'socialImageRight')),
										'http://youtube.com/user/duniarivi',
										array('escape'=>false,'target'=>'_BLANK'));
					?>
				</div>
			<!-- licencia -->
			<div style="width:960px; float:left; display:block; margin:15px auto; text-align:center; font-size:12px;">
			Boutique por Dunia Rivas esta licenciado debajo de <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License</a>.<br /> Permisos que se encuentren fuera del marco de esta licencia pueden ser otorgados en <a xmlns:cc="http://creativecommons.org/ns#" href="duniarivas@hotmail.com" rel="cc:morePermissions">duniarivas@hotmail.com</a>.
			</div>
		</div>
	</div>
</body>
</html>