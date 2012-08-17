<div class="payes view">
<h2><?php  echo __('Paye'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paye['Paye']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($paye['Paye']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paye'), array('action' => 'edit', $paye['Paye']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paye'), array('action' => 'delete', $paye['Paye']['id']), null, __('Are you sure you want to delete # %s?', $paye['Paye']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paye'), array('action' => 'add')); ?> </li>
	</ul>
</div>
