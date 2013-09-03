<div class="pictures index">
	<h2><?php echo __('Pictures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('gallery_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descr_nl'); ?></th>
			<th><?php echo $this->Paginator->sort('descr_fr'); ?></th>
			<th><?php echo $this->Paginator->sort('descr_en'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pictures as $picture): ?>
	<tr>
		<td><?php echo h($picture['Picture']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($picture['Gallery']['id'], array('controller' => 'galleries', 'action' => 'view', $picture['Gallery']['id'])); ?>
		</td>
		<td><?php echo h($picture['Picture']['descr_nl']); ?>&nbsp;</td>
		<td><?php echo h($picture['Picture']['descr_fr']); ?>&nbsp;</td>
		<td><?php echo h($picture['Picture']['descr_en']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $picture['Picture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $picture['Picture']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $picture['Picture']['id']), null, __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
	</ul>
</div>
