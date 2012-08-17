<div class="fournisseurs view">
<h2><?php  echo __('Fournisseur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paye Id'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['paye_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville Id'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['ville_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['Responsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siteweb'); ?></dt>
		<dd>
			<?php echo h($fournisseur['Fournisseur']['siteweb']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fournisseur'), array('action' => 'edit', $fournisseur['Fournisseur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fournisseur'), array('action' => 'delete', $fournisseur['Fournisseur']['id']), null, __('Are you sure you want to delete # %s?', $fournisseur['Fournisseur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fournisseurs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fournisseur'), array('action' => 'add')); ?> </li>
	</ul>
</div>
