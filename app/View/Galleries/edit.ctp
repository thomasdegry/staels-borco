<div class="galleries form">
<?php echo $this->Form->create('Gallery'); ?>
	<fieldset>
		<legend>"<?php echo $this->data["Gallery"]["name_nl"]; ?>" Aanpassen</legend>

		<div class="form-group">
			<?php 
				echo $this->Form->input('name_nl', array(
					'class' => 'form-control',
					'label' => 'Nederlands album naam'
				));
			?>
		</div>

		<div class="form-group">
			<?php 
				echo $this->Form->input('name_fr', array(
					'class' => 'form-control',
					'label' => 'Franse album naam'
				));
			?>
		</div>

		<div class="form-group">
			<?php 
				echo $this->Form->input('name_en', array(
					'class' => 'form-control',
					'label' => 'Engelse album naam'
				));
			?>
		</div>
		<?php echo $this->Form->submit('Album aanpassen', array('class' => array('btn', 'btn-primary'))); ?>
		<?php echo $this->Html->link('Annuleren', array('action' => 'index'), array('class' => array('btn', 'btn-danger'))); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>