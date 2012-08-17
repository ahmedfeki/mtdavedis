<div class="editeurs view">
<h2><?php  echo __('Editeur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($editeur['Editeur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($editeur['Editeur']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Editeur'), array('action' => 'edit', $editeur['Editeur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Editeur'), array('action' => 'delete', $editeur['Editeur']['id']), null, __('Are you sure you want to delete # %s?', $editeur['Editeur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Editeurs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editeur'), array('action' => 'add')); ?> </li>
	</ul>
</div>
