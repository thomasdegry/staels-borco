<header class="site-header header-contact">
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
    <div class="introduction">
        <h1 class="introduction-heading"><span>Contact</span></h1>
        <div class="sidebar">
            <h2 class="hidden">Contacteer ons</h2>
            <div class="sidebar-section">
                <h3>
                    <?php echo $this->Html->image('logo-staels@2x.png', array('alt' => 'Staels Borco', 'width' => 352, 'height' => 87)); ?>
                </h3>
                <address>
                    <p>
                        Lodderstraat 4<br />
                        2880 Bornem<br />
                        BTW BE 0400.797.070
                    </p>
                    <p>
                        0032 3 897 12 88
                    </p>
                </address>
            </div>
            <div class="sidebar-section">
                <h3>
                    <?php echo $this->Html->image('logo-slenna@2x.png', array('alt' => 'Slenna', 'width' => 184, 'height' => 87)); ?>
                </h3>
                <address>
                    <p>
                        Route de Bouhothmen ZI92<br />
                        5010 Ouardanine<br />
                        Tunesie
                    </p>
                    <p>
                        0021 67 351 218
                    </p>
                </address>
            </div>
        </div>
        <div class="main">
            <h2 class="hidden">Stuur ons een e-mail</h2>
            <form>
                <div>
                    <input type="hidden" name="lang" value="nl" />
                </div>
                <div class="input-group">
                    <label for="contact-name"><?php echo __('Naam'); ?></label>
                    <input type="text" id="contact-name" name="name" placeholder="<?php echo __('Naam'); ?>" />
                    <span class="error-message"><?php echo __('Verplicht veld'); ?></span>
                </div>
                <div class="input-group">
                    <label for="contact-email"><?php echo __('E-mailadres'); ?></label>
                    <input type="email" id="contact-email" name="email" placeholder="<?php echo __('E-mailadres'); ?>" />
                    <span class="error-message"><?php echo __('Ongeldig emailadres'); ?></span>
                </div>
               <!-- <div class="input-group hidden">
                    <label for="contact-subject"><?php echo __('Kies een onderwerp'); ?></label>
                    <select name="subject" id="contact-subject">
                        <option><?php echo __('Kies een onderwerp'); ?></option>
                        <optgroup>
                            <option value="1"><?php echo __('Algemene vragen'); ?></option>
                            <option value="2"><?php echo __('Stofkeuze'); ?></option>
                            <option value="3"><?php echo __('Kostprijs'); ?></option>
                            <option value="4"><?php echo __('Patronen'); ?></option>
                            <option value="5"><?php echo __('Ordergrootte'); ?></option>
                            <option value="6"><?php echo __('Doorlooptijd'); ?></option>
                        </optgroup>
                    </select>
                </div>-->
        <!--        <div class="dropdown-group">
                    <div class="fake-dropdown" data-select="contact-subject">
                        <a href="#" class="fake-dropdown-toggle"><?php echo __('Kies een onderwerp'); ?></a>
                        <ul class="fake-dropdown-options">
                            <li><a href="#1" class="fake-dropdown-option"><?php echo __('Algemene vragen'); ?></a></li>
                            <li><a href="#2" class="fake-dropdown-option"><?php echo __('Stofkeuze'); ?></a></li>
                            <li><a href="#3" class="fake-dropdown-option"><?php echo __('Kostprijs'); ?></a></li>
                            <li><a href="#4" class="fake-dropdown-option"><?php echo __('Patronen'); ?></a></li>
                            <li><a href="#5" class="fake-dropdown-option"><?php echo __('Ordergrootte'); ?></a></li>
                            <li><a href="#6" class="fake-dropdown-option"><?php echo __('Doorlooptijd'); ?></a></li>
                        </ul>
                    </div>
                </div>-->
                <div class="input-group">
                    <label for="contact-message"><?php echo __('Je vraag'); ?></label>
                    <textarea id="contact-message" name="message" placeholder="<?php echo __('Je vraag'); ?>"></textarea>
                    <span class="error-message error-message-textarea"><?php echo __('Jouw boodschap moet minstens tien woorden lang zijn'); ?></span>
                </div>
                <div class="button-group">
                    <input type="submit" value="<?php echo __('Verzenden'); ?>" class="button" />
                </div>
            </form>
        </div>
    </div>
</section>