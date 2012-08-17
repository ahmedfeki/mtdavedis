<div class="commercials form">
<?php echo $this->Form->create('Commercial'); ?>
	<fieldset>
		<legend><?php echo __('Add Commercial'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('prenom');
		echo $this->Form->input('adresse');
		echo $this->Form->input('tel');
		echo $this->Form->input('date_embauche');
		echo $this->Form->input('chef_id');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Commercials'), array('action' => 'index')); ?></li>
	</ul>
</div>
