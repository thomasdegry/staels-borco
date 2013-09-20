<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>

    <title>Staels Borco</title>

    <?php
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

    <?php echo $this->Html->script(array('vendor/modernizr.js')); ?>

    <?php echo $this->Html->css(array('http://fonts.googleapis.com/css?family=Bitter:400,700,400italic', 'normalize.css', 'style.css')); ?>

    <?php echo $this->Html->script(array('vendor/jquery-1.8.3.min.js')); ?>

    <!--[if lt IE 9]>
        <?php echo $this->Html->script(array('vendor/respond.js', 'vendor/selectivizr.js', 'vendor/opacity-polyfill.js')); ?>
    <![endif]-->
</head>
<body>

<?php echo $this->fetch('content'); ?>

<footer class="site-footer">
    <div class="container">
        <?php echo $this->Html->image('footer-logo.png', array('class' => 'site-footer-logo', 'width' => '67', 'height' => '90')); ?>
        <address class="site-footer-contact">
            <h1 class="site-footer-heading"><?php echo __('Contacteer ons'); ?></h1>
            <p class="site-footer-contact-address">
                <?php echo __('Staels Borco NV<br />Lodderstraat 4<br />2880  Bornem'); ?>
            <p>
            <p class="site-footer-contact-tel">
                (+32) 3 897 12 88
            </p>
            <p class="site-footer-contact-email">
                <a href="mailto:astaels@staels.com">astaels@staels.com</a>
            </p>
        </address>
        <div class="site-footer-map">
            <span class="site-footer-map-marker site-footer-map-marker-staels">
              <span class="tooltip tooltip-right">Staels-borco</span>
            </span>
            <span class="site-footer-map-marker site-footer-map-marker-borco">
              <span class="tooltip tooltip-right">Slenna</span>
            </span>
        </div>
        <p class="copyright">
        <?php echo __('&copy; Copyright Staels Borco 2013 :: Website door'); ?> <a href="http://tatiana.be">Tatiana.be</a> &amp; <a href="http://pieterbeulque.be">Pieter Beulque</a>.
        </p>
    </div>
</footer>

<?php echo $this->element('sql_dump'); ?>

<?php
    echo $this->Html->script(array('vendor/jquery.stapel.js', 'app.js'));
?>

</body>

</html>