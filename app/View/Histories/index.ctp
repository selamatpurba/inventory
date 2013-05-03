	<script>
		$(function() {
			   $("#datepicker_awal").datepicker({ dateFormat: "yy-mm-dd", showAnim:"slide" });
			   $("#datepicker_akhir").datepicker({ dateFormat: "yy-mm-dd", showAnim:"slide" });
		});
	</script>
	<div class="histories index">
	<h2><?php echo __('Histories'); ?></h2>
	
	<input type="text" id="datepicker_awal" placeholder="Awal" />
	-
	<input type="text" id="datepicker_akhir" placeholder="Akhir"/>
	<input type="button" value="Cari" class="button_cari" >
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Tanggal'); ?></th>
			<th><?php echo $this->Paginator->sort(''); ?></th>
	</tr>
	<?php foreach ($histories as $history): ?>
	<tr>
		<td><?php echo h($history['History']['created']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['value']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller'=>'stocks','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller'=>'items','action' => 'index')); ?></li>
	</ul>
</div>
