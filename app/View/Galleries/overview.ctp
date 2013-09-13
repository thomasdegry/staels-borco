<?php echo $this->Session->flash(); ?>
<h1>Galerijen</h1>


<div class="table-responsive">
	<table class="table">
		<tr>
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('name_dut', 'Naam NL'); ?></th>
			<th><?php echo $this->Paginator->sort('name_fre', 'Naam FR'); ?></th>
			<th><?php echo $this->Paginator->sort('name_eng', 'Naam EN'); ?></th>
			<th>#Foto's</th>
			<th class="actions"><?php echo __('Acties'); ?></th>
		</tr>
		<?php foreach ($galleries as $gallery): ?>
			<tr>
				<td><?php echo $gallery['Gallery']['id']; ?></td>
				<td><?php echo $gallery['Gallery']['name_dut']; ?></td>
				<td><?php echo $gallery['Gallery']['name_fre']; ?></td>
				<td><?php echo $gallery['Gallery']['name_eng']; ?></td>
				<td><?php echo count($gallery['Picture']); ?></td>
				<td class="actions" width="320">
					<?php echo $this->Html->link('<span class="glyphicon glyphicon-picture"></span> Foto\'s beheren', array('action' => 'view', $gallery['Gallery']['id']), array('class' => array('btn', 'btn-xs', 'btn-default'), 'escape' => false)); ?>

					<?php echo $this->Html->link('<span class="glyphicon glyphicon-wrench"></span> Aanpassen', array('action' => 'edit', $gallery['Gallery']['id']), array('class' => array('btn', 'btn-xs', 'btn-default'), 'escape' => false)); ?>

					<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span> Verwijderen', array('action' => 'delete', $gallery['Gallery']['id']), array('escape' => false, 'class' => array('btn', 'btn-xs', 'btn-default')), __('Bent u zeker dat u dit album met de naam &quot;%s&quot; wilt verwijderen?', $gallery['Gallery']['name_dut'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php echo $this->Html->link('Galerij toevoegen', array('action' => 'add'), array('class' => array('btn', 'btn-primary', 'table-primary-button'))); ?>
</div>


