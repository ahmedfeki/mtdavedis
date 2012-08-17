<div class="typeimpayes view">
<h2><?php  echo __('Typeimpaye'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeimpaye['Typeimpaye']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($typeimpaye['Typeimpaye']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Typeimpaye'), array('action' => 'edit', $typeimpaye['Typeimpaye']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Typeimpaye'), array('action' => 'delete', $typeimpaye['Typeimpaye']['id']), null, __('Are you sure you want to delete # %s?', $typeimpaye['Typeimpaye']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Typeimpayes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typeimpaye'), array('action' => 'add')); ?> </li>
	</ul>
</div>
