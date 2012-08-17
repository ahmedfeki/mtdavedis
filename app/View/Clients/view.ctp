<div class="clients view">
<h2><?php  echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($client['Client']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($client['Client']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo h($client['Client']['profession']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($client['Client']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($client['Client']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($client['Client']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo h($client['Client']['site']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Societe'); ?></dt>
		<dd>
			<?php echo h($client['Client']['societe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employeur'); ?></dt>
		<dd>
			<?php echo h($client['Client']['employeur']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mat'); ?></dt>
		<dd>
			<?php echo h($client['Client']['mat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adressedomicile'); ?></dt>
		<dd>
			<?php echo h($client['Client']['adressedomicile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reglement Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['reglement_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
	</ul>
</div>
