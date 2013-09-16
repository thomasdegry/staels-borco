<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>

	<title>Staels Borco Back Office</title>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min', 'screen'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<?php if($this->action == "view" && $this->name == "Galleries"): ?>
		<?php echo $this->Html->css(array('blueimp-gallery.min', 'jquery.fileupload-ui')); ?>
		<noscript><?php echo $this->Html->css('jquery.fileupload-ui-noscript'); ?></noscript>
	<?php endif; ?>
</head>
<body>
	<?php if($logged_in == true): ?>
		<?php echo $this->Html->link('Afmelden', array('controller' => 'Users', 'action' => 'logout'), array('class' => array('btn', 'btn-default', 'btn-logout'))); ?>
	<?php endif; ?>
	<div id="container">
		<header></header>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<div class="logo"></div>
			<?php echo $this->fetch('content'); ?>
		</div>
		<footer></footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>

	<?php if($this->action == "view" && $this->name == "Galleries"): ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<?php echo $this->Html->script(array('vendor/jquery.ui.widget.js', 'vendor/tmpl.min.js', 'vendor/load-image.min.js', 'vendor/canvas-to-blob.min.js', 'vendor/bootstrap.min.js', 'vendor/jquery.blueimp-gallery.min.js', 'jquery.iframe-transport.js', 'jquery.fileupload.js', 'jquery.fileupload-process.js', 'jquery.fileupload-image.js', 'jquery.fileupload-audio.js', 'jquery.fileupload-video.js', 'jquery.fileupload-validate.js', 'jquery.fileupload-ui.js', 'upload.js', 'StaelsBorco')); ?>
	<?php endif; ?>
</body>
</html>