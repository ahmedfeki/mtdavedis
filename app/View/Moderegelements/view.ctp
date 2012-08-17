<div class="moderegelements view">
<h2><?php  echo __('Moderegelement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moderegelement['Moderegelement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($moderegelement['Moderegelement']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Moderegelement'), array('action' => 'edit', $moderegelement['Moderegelement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Moderegelement'), array('action' => 'delete', $moderegelement['Moderegelement']['id']), null, __('Are you sure you want to delete # %s?', $moderegelement['Moderegelement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Moderegelements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moderegelement'), array('action' => 'add')); ?> </li>
	</ul>
</div>
