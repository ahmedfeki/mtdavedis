<div class="villes view">
<h2><?php  echo __('Ville'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ville['Ville']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ville['Ville']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paye Id'); ?></dt>
		<dd>
			<?php echo h($ville['Ville']['paye_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ville'), array('action' => 'edit', $ville['Ville']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ville'), array('action' => 'delete', $ville['Ville']['id']), null, __('Are you sure you want to delete # %s?', $ville['Ville']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Villes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ville'), array('action' => 'add')); ?> </li>
	</ul>
</div>
