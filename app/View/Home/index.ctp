<header class="site-header big-header">
    <div class="container">
        <h1 class="logo">
            Staels Borco | Slenna
        </h1>
        <p class="tagline">
            <?php echo $translations['tagline'][$language]; ?>
        </p>
    </div>
</header>

<?php echo $this->element('menu'); ?>

<section class="container">
<header class="introduction">
        <h1 class="introduction-heading heading-about-us"><?php echo __('Over ons'); ?></h1>
        <p class="introduction-content">
            <?php echo $translations['introduction-content'][$language]; ?>
        </p>
</header>
<ul class="stats">
    <li class="stats-item">
        <h2 class="stats-item-heading"><?php echo __('Ontstaan'); ?></h2>
        <div class="flipcard-card">
            <?php echo $this->Html->image('stats/ontstaan-front.png', array('class' => 'flipcard-front')); ?>
            <div class="flipcard-back flipcard-back-stats">
                <p class="flipcard-back-top"><?php echo __('Staels Borco is ontstaan in'); ?></p>
                <p class="flipcard-back-left"><span class="flipcard-number">1956</span><?php echo __('in Bornem'); ?></p>
                <p class="flipcard-back-right"><span class="flipcard-number">1990</span><?php echo __('in Tunesi&euml;'); ?></p>
            </div>
        </div>
    </li>

    <li class="stats-item">
        <h2 class="stats-item-heading"><?php echo __('Werknemers') ?></h2>
        <div class="flipcard-card">
            <?php echo $this->Html->image('stats/werknemers.png', array('class' => 'flipcard-front')); ?>
            <div class="flipcard-back flipcard-back-stats">
                <p class="flipcard-back-top"><?php echo __('Aantal werknemers') ?></p>
                <p class="flipcard-back-left"><span class="flipcard-number">10</span><?php echo __('in Bornem'); ?></p>
                <p class="flipcard-back-right"><span class="flipcard-number">200</span><?php echo __('in Tunesi&euml;'); ?></p>
            </div>
        </div>
    </li>

    <li class="stats-item stats-item-third">
        <h2 class="stats-item-heading"><?php echo __('Klanten'); ?></h2>
        <div class="flipcard-card">
            <?php echo $this->Html->image('stats/man-vrouw.png', array('class' => 'flipcard-front')); ?>
            <div class="flipcard-back flipcard-back-stats-alternate">
                <p class="flipcard-back-top"><?php echo __('Aantal klanten waarvoor we werken'); ?></p>
                <p class="flipcard-back-bottom"><span class="flipcard-number flipcard-number-big">25</span></p>
            </div>
        </div>
    </li>

    <li class="stats-item">
        <h2 class="stats-item-heading"><?php echo __('Ligging'); ?></h2>
        <div class="flipcard-card">
            <?php echo $this->Html->image('stats/ligging.png', array('class' => 'flipcard-front')); ?>
            <div class="flipcard-back flipcard-back-stats">
                <p class="flipcard-back-top"><?php echo __('Wij zijn gelegen in') ?></p>
                <p class="flipcard-back-left"><span class="flipcard-number"><?php echo __('Belgi&euml;'); ?></span><?php echo __('Bornem'); ?></p>
                <p class="flipcard-back-right"><span class="flipcard-number"><?php echo __('Tunesi&euml;'); ?></span><?php echo __('Ouardanine'); ?></p>
            </div>
        </div>
    </li>

    <li class="stats-item">
        <h2 class="stats-item-heading"><?php echo __('Producten'); ?></h2>
        <div class="flipcard-card">
            <?php echo $this->Html->image('stats/merken.png', array('class' => 'flipcard-front')); ?>
            <div class="flipcard-back flipcard-back-stats-alternate">
                <p class="flipcard-back-top"><?php echo __('Wij maken&hellip;'); ?></p>
                <p class="flipcard-back-bottom"><?php echo __('Kleedjes, rokken, broeken en bloesjes voor dames en kinderen'); ?></p>
            </div>
        </div>
    </li>

    <li class="stats-item stats-item-third">
        <h2 class="stats-item-heading"><?php echo __('Transport'); ?></h2>
        <div class="flipcard-card flipcard-back-alternate">
            <?php echo $this->Html->image('stats/transport.png', array('class' => 'flipcard-front')); ?>
            <div class="flipcard-back flipcard-back-stats-alternate">
                <p class="flipcard-back-top"><?php echo __('Vrachtwagens tussen Belgi&euml; &amp; Tunesi&euml; per week'); ?></p>
                <p class="flipcard-back-bottom"><span class="flipcard-number flipcard-number-big">2</span></p>
            </div>
        </div>
    </li>
</ul>
</section>

<div class="full-width">
    <div class="half-width image-container">
        <span class="image-overlay">
            <?php echo __('Dynamisch team'); ?>
        </span>
        <?php echo $this->Html->image('team.jpg'); ?>
    </div>
    <div class="half-width image-container">
        <span class="image-overlay">
            <?php echo __('Modern materiaal'); ?>
        </span>
        <?php echo $this->Html->image('materiaal.jpg'); ?>
    </div>
</div>