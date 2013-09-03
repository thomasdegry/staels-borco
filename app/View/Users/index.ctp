<div class="col-lg-8 col-lg-offset-2 login-form">
    <h1>Inloggen</h1>

    <?php 
        echo $this->Session->flash('auth');
        echo $this->Form->create(); 
    ?>

    <div class="form-group">
        <?php
            echo $this->Form->input('email', array(
                'label' => false,
                'placeholder' => 'Email adres',
                'class' => 'form-control',
                'value' => 'info@staelsborco.com',
                'type' => 'hidden'
            ));
        ?>
    </div>

    <div class="form-group">
        <?php
            echo $this->Form->input('password', array(
                'label' => false,
                'placeholder' => 'Wachtwoord',
                'class' => 'form-control'
            ));
        ?>
    </div>

    <?php
        echo $this->Form->submit('Inloggen', array(
            'class' => array('btn', 'btn-default')
        ));
        echo $this->Form->end();
    ?>
</div>

<div class="clearfix"></div>