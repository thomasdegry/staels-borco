<header class="site-header header-showroom">
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
    <header class="introduction introduction-no-bottom">
        <h1 class="introduction-heading"><span><?php echo __('Showroom'); ?></span></h1>
        <div class="showroom-current-album">
            <h2 class="showroom-current-album-title">
                <span>Album 01</span> <a href="#" class="showroom-back"><?php echo __('Overzicht'); ?></a>
            </h2>
        </div>
    </header>

    <ul id="showroom" class="tp-grid gallery-grid">
        <?php foreach($galleries as $gallery): ?>
            <?php foreach($gallery['Picture'] as $picture): ?>
                <li data-pile="<?php echo $gallery['Gallery']['name_' . $language]; ?>">
                    <a href="#">
                        <?php echo $this->Html->image('uploads/thumbnail/' . $picture['name'], array('data-src' => 'img/uploads/' . $picture['name'])); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</section>

<div class="overlay-container">
    <div class="overlay-content">
        <div class="overlay-image">
            <img src="" />
            <a href="#" class="overlay-next"></a>
            <a href="#" class="overlay-previous"></a>
        </div>
        <div class="overlay-title">
            <h2>Showroom 01</h2>
            <ul class="overlay-actions">
                <li class="overlay-action"><a href="#" class="overlay-previous"></a></li>
                <li class="overlay-action"><a href="#" class="overlay-close"></a></li>
                <li class="overlay-action"><a href="#" class="overlay-next"></a></li>
            </ul>
        </div>
    </div>
</div>