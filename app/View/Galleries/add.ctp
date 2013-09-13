<div class="galleries form">
<?php echo $this->Form->create('Gallery'); ?>
	<fieldset>
		<legend>Galerij toevoegen</legend>

		<div class="form-group">
			<?php 
				echo $this->Form->input('name_dut', array(
					'class' => 'form-control',
					'label' => 'Nederlands album naam'
				));
			?>
		</div>

		<div class="form-group">
			<?php 
				echo $this->Form->input('name_fre', array(
					'class' => 'form-control',
					'label' => 'Franse album naam'
				));
			?>
		</div>

		<div class="form-group">
			<?php 
				echo $this->Form->input('name_eng', array(
					'class' => 'form-control',
					'label' => 'Engelse album naam'
				));
			?>
		</div>
		<?php echo $this->Form->submit('Album aanmaken', array('class' => array('btn', 'btn-primary'))); ?>
		<?php echo $this->Html->link('Annuleren', array('action' => 'index'), array('class' => array('btn', 'btn-danger'))); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>