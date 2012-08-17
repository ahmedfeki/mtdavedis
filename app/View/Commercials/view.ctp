<div class="commercials view">
<h2><?php  echo __('Commercial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Embauche'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['date_embauche']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chef Id'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['chef_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Id'); ?></dt>
		<dd>
			<?php echo h($commercial['Commercial']['group_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commercial'), array('action' => 'edit', $commercial['Commercial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Commercial'), array('action' => 'delete', $commercial['Commercial']['id']), null, __('Are you sure you want to delete # %s?', $commercial['Commercial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Commercials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commercial'), array('action' => 'add')); ?> </li>
	</ul>
</div>
