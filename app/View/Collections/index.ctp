<div class="collections index">
	<h2><?php echo __('Collections');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('fournisseur_id');?></th>
			<th><?php echo $this->Paginator->sort('categorie_id');?></th>
			<th><?php echo $this->Paginator->sort('dateapparition');?></th>
			<th><?php echo $this->Paginator->sort('prixvente');?></th>
			<th><?php echo $this->Paginator->sort('prixachat');?></th>
			<th><?php echo $this->Paginator->sort('composition');?></th>
			<th><?php echo $this->Paginator->sort('nbvolume');?></th>
			<th><?php echo $this->Paginator->sort('qte_stock_phys');?></th>
			<th><?php echo $this->Paginator->sort('stock_alert');?></th>
			<th><?php echo $this->Paginator->sort('qte_stock_theo');?></th>
			<th><?php echo $this->Paginator->sort('editeur_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($collections as $collection): ?>
	<tr>
		<td><?php echo h($collection['Collection']['id']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($collection['Fournisseur']['name'], array('controller' => 'fournisseurs', 'action' => 'view', $collection['Fournisseur']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($collection['Categorie']['name'], array('controller' => 'categories', 'action' => 'view', $collection['Categorie']['id'])); ?>
		</td>
		<td><?php echo h($collection['Collection']['dateapparition']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['prixvente']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['prixachat']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['composition']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['nbvolume']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['qte_stock_phys']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['stock_alert']); ?>&nbsp;</td>
		<td><?php echo h($collection['Collection']['qte_stock_theo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($collection['Editeur']['name'], array('controller' => 'editeurs', 'action' => 'view', $collection['Editeur']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $collection['Collection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $collection['Collection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $collection['Collection']['id']), null, __('Are you sure you want to delete # %s?', $collection['Collection']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Collection'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fournisseurs'), array('controller' => 'fournisseurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fournisseur'), array('controller' => 'fournisseurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Editeurs'), array('controller' => 'editeurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editeur'), array('controller' => 'editeurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
