<nav class="site-nav-container">
    <div class="container">
        <a href="index.html" class="current site-nav-logo"><?php echo $this->Html->image('footer-logo.png'); ?></a>
        <ul class="site-nav">
            <li class="site-nav-item <?php if($this->name == 'Home'): ?>current<?php endif; ?>"><?php echo $this->Html->link(__('Over ons'), array('controller' => 'Home', 'action' => 'index'), array('id' => 'nav-index-link')); ?></li>
            <li class="site-nav-item <?php if($this->name == 'About'): ?>current<?php endif; ?>"><?php echo $this->Html->link(__('Productieproces'), array('controller' => 'About', 'action' => 'index')); ?></li>
            <li class="site-nav-item <?php if($this->name == 'Galleries'): ?>current<?php endif; ?>"><?php echo $this->Html->link(__('Galerij'), array('controller' => 'Showroom', 'action' => 'index')); ?></li>
            <li class="site-nav-item <?php if($this->name == 'Contact'): ?>current<?php endif; ?>"><?php echo $this->Html->link(__('Contact'), array('controller' => 'Contact', 'action' => 'index')); ?></li>
        </ul>
        <?php
            $activeNumber = 1;

            switch ($this->Session->read('Config.language')) {
                case 'fre':
                    $activeNumber = 1;
                    break;
                case 'eng':
                    $activeNumber = 2;
                    break;
                case 'dut':
                    $activeNumber = 3;
                    break;
            }
        ?>

        <ul class="language-nav language-nav-active-<?php echo $activeNumber; ?>">
            <li class="language-nav-active-indicator"></li>
            <li class="language-nav-item <?php if($this->Session->read('Config.language') == 'fre'): ?>active<?php endif; ?>">
                <?php echo $this->Html->link("<abbr title='Francais'>FR</abbr>", array('controller' => $this->name, 'action' => 'setLanguage/fre'), array('escape' => false)); ?>
            </li>
            <li class="language-nav-item <?php if($this->Session->read('Config.language') == 'eng'): ?>active<?php endif; ?>">
                <?php echo $this->Html->link("<abbr title='English'>EN</abbr>", array('controller' => $this->name, 'action' => 'setLanguage/eng'), array('escape' => false)); ?>
            </li>
            <li class="language-nav-item <?php if($this->Session->read('Config.language') == 'dut'): ?>active<?php endif; ?>">
                <?php echo $this->Html->link("<abbr title='Nederlands'>NL</abbr>", array('controller' => $this->name, 'action' => 'setLanguage/dut'), array('escape' => false)); ?>
            </li>
        </ul>
    </div>
</nav>

