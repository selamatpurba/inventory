<div class="stocks index">
	<h2><?php echo __('Stocks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Nama Barang'); ?></th>
			<th><?php echo $this->Paginator->sort('Stok Awal'); ?></th>
			<th><?php echo $this->Paginator->sort('Sisa'); ?></th>
			<th><?php echo $this->Paginator->sort('Keterangan'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($stocks as $stock): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($stock['Item']['name'], array('controller' => 'items', 'action' => 'view', $stock['Item']['id'])); ?>
		</td>
		<td><?php echo h($stock['Stock']['first_value']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['second_value']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['note']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['created']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stock['Stock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stock['Stock']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stock['Stock']['id']), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
