<div class="fournisseurs form">
<?php echo $this->Form->create('Fournisseur'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fournisseur'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('adresse');
		echo $this->Form->input('paye_id');
		echo $this->Form->input('ville_id');
		echo $this->Form->input('Responsable');
		echo $this->Form->input('tel');
		echo $this->Form->input('fax');
		echo $this->Form->input('mail');
		echo $this->Form->input('siteweb');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Fournisseur.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Fournisseur.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fournisseurs'), array('action' => 'index')); ?></li>
	</ul>
</div>
