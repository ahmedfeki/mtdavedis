<div class="contrats form">
<?php echo $this->Form->create('Contrat'); ?>
	<fieldset>
		<legend><?php echo __('Add Contrat'); ?></legend>
	<?php
		echo $this->Form->input('commercial_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contrats'), array('action' => 'index')); ?></li>
	</ul>
</div>
