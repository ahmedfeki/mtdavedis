<div class="collections view">
<h2><?php  echo __('Collection');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fournisseur'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collection['Fournisseur']['name'], array('controller' => 'fournisseurs', 'action' => 'view', $collection['Fournisseur']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collection['Categorie']['name'], array('controller' => 'categories', 'action' => 'view', $collection['Categorie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dateapparition'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['dateapparition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prixvente'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['prixvente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prixachat'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['prixachat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Composition'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['composition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbvolume'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['nbvolume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qte Stock Phys'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['qte_stock_phys']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Alert'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['stock_alert']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qte Stock Theo'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['qte_stock_theo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Editeur'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collection['Editeur']['name'], array('controller' => 'editeurs', 'action' => 'view', $collection['Editeur']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Collection'), array('action' => 'edit', $collection['Collection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Collection'), array('action' => 'delete', $collection['Collection']['id']), null, __('Are you sure you want to delete # %s?', $collection['Collection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fournisseurs'), array('controller' => 'fournisseurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fournisseur'), array('controller' => 'fournisseurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Editeurs'), array('controller' => 'editeurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editeur'), array('controller' => 'editeurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
