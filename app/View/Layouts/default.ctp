<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Vilgenis site web');
?>
<!DOCTYPE html>
<html class="Fond">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('vilgenis');
		
		echo $this->Html->script('http://code.jquery.com/jquery-1.9.1.js');
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		echo $this->Html->script('http://code.jquery.com/ui/1.10.3/jquery-ui.js');
		echo $this->Html->script('bootstrap.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container contenuWhite">
		<?php echo $this->element('Header'); ?>
		<?php echo $this->element('carousel'); ?>
		
		<div class="contenuWhite">
			<?php echo $this->element('menu-horizontal-sanssousrub'); ?>
			<?php echo $this->element('menu-gauche-sousrub'); ?>
			<?php //echo $this->element('menu-gauche'); ?>
			<?php echo $this->Session->flash(); ?>
			<div class="Contenu">
			<?php echo $this->fetch('content'); ?>
				
				
			</div>
		</div>
		<?php //echo $this->element('sql_dump'); ?>
		<?php echo $this->element('footer'); ?>
	</div>
	
	
</body>
</html>
