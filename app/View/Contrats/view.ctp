<div class="contrats view">
<h2><?php  echo __('Contrat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contrat['Contrat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commercial Id'); ?></dt>
		<dd>
			<?php echo h($contrat['Contrat']['commercial_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contrat['Contrat']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contrat'), array('action' => 'edit', $contrat['Contrat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contrat'), array('action' => 'delete', $contrat['Contrat']['id']), null, __('Are you sure you want to delete # %s?', $contrat['Contrat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contrats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrat'), array('action' => 'add')); ?> </li>
	</ul>
</div>
