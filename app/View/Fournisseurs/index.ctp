<div class="fournisseurs index">
	<h2><?php echo __('Fournisseurs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('adresse'); ?></th>
			<th><?php echo $this->Paginator->sort('paye_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ville_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Responsable'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th><?php echo $this->Paginator->sort('siteweb'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fournisseurs as $fournisseur): ?>
	<tr>
		<td><?php echo h($fournisseur['Fournisseur']['id']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['name']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['paye_id']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['ville_id']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['Responsable']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['tel']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['fax']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['mail']); ?>&nbsp;</td>
		<td><?php echo h($fournisseur['Fournisseur']['siteweb']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fournisseur['Fournisseur']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fournisseur['Fournisseur']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fournisseur['Fournisseur']['id']), null, __('Are you sure you want to delete # %s?', $fournisseur['Fournisseur']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fournisseur'), array('action' => 'add')); ?></li>
	</ul>
</div>
