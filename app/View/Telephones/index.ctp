<div class="telephones index">
	<h2><?php echo __('Telephones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fournisseur_id'); ?></th>
			<th><?php echo $this->Paginator->sort('commercial_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($telephones as $telephone): ?>
	<tr>
		<td><?php echo h($telephone['Telephone']['id']); ?>&nbsp;</td>
		<td><?php echo h($telephone['Telephone']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($telephone['Telephone']['client_id']); ?>&nbsp;</td>
		<td><?php echo h($telephone['Telephone']['fournisseur_id']); ?>&nbsp;</td>
		<td><?php echo h($telephone['Telephone']['commercial_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $telephone['Telephone']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $telephone['Telephone']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $telephone['Telephone']['id']), null, __('Are you sure you want to delete # %s?', $telephone['Telephone']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Telephone'), array('action' => 'add')); ?></li>
	</ul>
</div>
