<div class="prices form">
<?php echo $this->Form->create('Price'); ?>
	<fieldset>
		<legend><?php echo __('Edit Price'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('dozen');
		echo $this->Form->input('fund');
		echo $this->Form->input('sell');
		echo $this->Form->input('min');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Price.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Price.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
