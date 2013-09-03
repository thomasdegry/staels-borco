<div class="pictures form">
<?php echo $this->Form->create('Picture'); ?>
	<fieldset>
		<legend><?php echo __('Add Picture'); ?></legend>
	<?php
		echo $this->Form->input('gallery_id');
		echo $this->Form->input('descr_nl');
		echo $this->Form->input('descr_fr');
		echo $this->Form->input('descr_en');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pictures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
	</ul>
</div>
