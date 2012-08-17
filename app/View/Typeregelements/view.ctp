<div class="typeregelements view">
<h2><?php  echo __('Typeregelement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeregelement['Typeregelement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($typeregelement['Typeregelement']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Typeregelement'), array('action' => 'edit', $typeregelement['Typeregelement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Typeregelement'), array('action' => 'delete', $typeregelement['Typeregelement']['id']), null, __('Are you sure you want to delete # %s?', $typeregelement['Typeregelement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Typeregelements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typeregelement'), array('action' => 'add')); ?> </li>
	</ul>
</div>
