<div class="collections form">
<?php echo $this->Form->create('Collection');?>
	<fieldset>
		<legend><?php echo __('Edit Collection'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('fournisseur_id');
		echo $this->Form->input('categorie_id');
		echo $this->Form->input('dateapparition');
		echo $this->Form->input('prixvente');
		echo $this->Form->input('prixachat');
		echo $this->Form->input('composition');
		echo $this->Form->input('nbvolume');
		echo $this->Form->input('qte_stock_phys');
		echo $this->Form->input('stock_alert');
		echo $this->Form->input('qte_stock_theo');
		echo $this->Form->input('editeur_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Collection.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Collection.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Collections'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Fournisseurs'), array('controller' => 'fournisseurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fournisseur'), array('controller' => 'fournisseurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Editeurs'), array('controller' => 'editeurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editeur'), array('controller' => 'editeurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
