<div class="pictures view">
<h2><?php echo __('Picture'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gallery'); ?></dt>
		<dd>
			<?php echo $this->Html->link($picture['Gallery']['id'], array('controller' => 'galleries', 'action' => 'view', $picture['Gallery']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr Nl'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['descr_nl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr Fr'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['descr_fr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr En'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['descr_en']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Picture'), array('action' => 'edit', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Picture'), array('action' => 'delete', $picture['Picture']['id']), null, __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
	</ul>
</div>
