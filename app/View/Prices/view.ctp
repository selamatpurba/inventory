<div class="prices view">
<h2><?php  echo __('Price'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($price['Price']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($price['Item']['name'], array('controller' => 'items', 'action' => 'view', $price['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dozen'); ?></dt>
		<dd>
			<?php echo h($price['Price']['dozen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fund'); ?></dt>
		<dd>
			<?php echo h($price['Price']['fund']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sell'); ?></dt>
		<dd>
			<?php echo h($price['Price']['sell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min'); ?></dt>
		<dd>
			<?php echo h($price['Price']['min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($price['Price']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($price['Price']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Price'), array('action' => 'edit', $price['Price']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Price'), array('action' => 'delete', $price['Price']['id']), null, __('Are you sure you want to delete # %s?', $price['Price']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Price'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
