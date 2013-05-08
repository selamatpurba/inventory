<script>
	function minus(){
		var fund=document.getElementById("PriceFund").value;
		var sell=document.getElementById("PriceSell").value;
		if(fund<0){
			alert("Kesalahan pada nilai modal.");
			document.getElementById("PriceFund").value="";
		}else if(sell<0){
			alert("Kesalahan pada nilai jual.");
			document.getElementById("PriceSell").value="";
		}
		else{
			var minus2=sell-fund;
		}
		document.getElementById("PriceMin").value=minus2;
	}
</script>
<div id="demo"></div>
<div class="prices form">
<?php echo $this->Form->create('Price'); ?>
	<fieldset>
		<legend><?php echo __('Add Price'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('dozen');
		echo $this->Form->input('fund',array("onchange"=>"minus()"));
		echo $this->Form->input('sell',array("onchange"=>"minus()"));
		echo $this->Form->input('min',array("readonly"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>