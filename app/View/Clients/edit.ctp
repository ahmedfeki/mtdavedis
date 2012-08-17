<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('prenom');
		echo $this->Form->input('adresse');
		echo $this->Form->input('profession');
		echo $this->Form->input('tel');
		echo $this->Form->input('fax');
		echo $this->Form->input('mail');
		echo $this->Form->input('site');
		echo $this->Form->input('societe');
		echo $this->Form->input('employeur');
		echo $this->Form->input('mat');
		echo $this->Form->input('adressedomicile');
		echo $this->Form->input('reglement_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
	</ul>
</div>
