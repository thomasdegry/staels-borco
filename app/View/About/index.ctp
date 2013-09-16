<header class="site-header header-production-process">
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
        <h1 class="introduction-heading heading-production-process"><span><?php echo __('Productieproces'); ?></span></h1>
        <div class="production-process">
            <span class="production-process-zipper">
                <span class="production-process-zipper-base"></span>
                <span class="production-process-zipper-top production-process-zipper-top-up"></span>
            </span>
            <ol>
                <li class="production-process-item production-process-item-odd production-process-item-first">
                    <h2 class="production-process-item-heading"><?php echo __('Styling'); ?></h2>
                    <span class="production-process-item-step">01</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_01.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Styling'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-01'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item production-process-item-second">
                    <h2 class="production-process-item-heading"><?php echo __('Stoffen keuze'); ?></h2>
                    <span class="production-process-item-step">02</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_02.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Stoffen keuze'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-02'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item production-process-item-odd">
                    <h2 class="production-process-item-heading"><?php echo __('Modelisme'); ?></h2>
                    <span class="production-process-item-step">03</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_03.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Modelisme'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-03'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item">
                    <h2 class="production-process-item-heading"><?php echo __('Proto'); ?></h2>
                    <span class="production-process-item-step">04</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_04.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Proto'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-04'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>

                <li class="production-process-item production-process-item-odd">
                    <h2 class="production-process-item-heading"><?php echo __('Aanpassing'); ?></h2>
                    <span class="production-process-item-step">05</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_05.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Aanpassing'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-05'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item">
                    <h2 class="production-process-item-heading"><?php echo __('Verkoopstalen'); ?></h2>
                    <span class="production-process-item-step">06</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_06.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Verkoopstalen'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-06'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item production-process-item-odd">
                    <h2 class="production-process-item-heading"><?php echo __('Order'); ?></h2>
                    <span class="production-process-item-step">07</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_07.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Order'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-07'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item">
                    <h2 class="production-process-item-heading"><?php echo __('Gradatie'); ?></h2>
                    <span class="production-process-item-step">08</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_08.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Gradatie'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-08'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item production-process-item-odd">
                    <h2 class="production-process-item-heading"><?php echo __('Productie'); ?></h2>
                    <span class="production-process-item-step">09</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_09.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Productie'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-09'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item">
                    <h2 class="production-process-item-heading"><?php echo __('Verpakking &amp; facturatie'); ?></h2>
                    <span class="production-process-item-step">10</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_10.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Verpakking &amp; facturatie'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-10'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="production-process-item production-process-item-odd">
                    <h2 class="production-process-item-heading"><?php echo __('Transport'); ?></h2>
                    <span class="production-process-item-step">11</span>
                    <div class="flipcard-card flipcard-bordered">
                        <?php echo $this->Html->image('production-process/step_11.png', array('class' => 'flipcard-front')); ?>
                        <div class="flipcard-back flipcard-production-back">
                            <h3><?php echo __('Transport'); ?></h3>
                            <p>
                              <?php echo $translations['p-p-11'][$language]; ?>
                            </p>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>

    <p class="introduction-content">
        <?php echo __('Heeft u nog vragen? Neem dan gerust'); ?> <?php echo $this->Html->link('contact', array('controller' => 'Contact', 'action' => 'index')); ?> <?php echo __('met ons op!'); ?>
    </p>
</section>