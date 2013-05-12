<script>
	$(document).ready(function() {
		$('#dozen').hide();
		$('#fund').hide();
		$('#sell').hide();
		//$('#PriceFund').val("4000");
		//$('#PriceSell').val("5000");
		
		//$('#PriceMin').each(function () {
		//	var valueFund = $('#PriceFund').val();
		//	var valueSell = $('#PriceSell').val();
		//	var valueMin = valueSell-valueFund;
		//	$('#PriceMin').val(valueMin);
		//});
		//
		$('#PriceDozen').on('change', function() {
			if(this.value<0){
				alert("Nilai tidak valid");
				$(this).focus();
				$(this).css("background-color","red");
				$('#dozen').show();
				$('#dozen').text("salah nih bro");
			}else{
				$(this).css("background-color","white");
				$('#dozen').hide();
			}  
		});
		$('#PriceFund').on('change', function() {
			if(this.value<0){
				alert("Nilai tidak valid");
				$(this).focus();
				$(this).css("background-color","red");
				$('#fund').show();
				$('#fund').text("salah nih bro");
			}else{
				$(this).css("background-color","white");
				$('#fund').hide();
			}  
		});
		$('#PriceSell').on('change', function() {
			if(this.value<0){
				alert("Nilai tidak valid");
				$(this).focus();
				$(this).css("background-color","red");
				$('#sell').show();
				$('#sell').text("salah nih bro");
			}else{
				$(this).css("background-color","white");
				$('#sell').hide();
				}  
		});
		
		var counter = 2;
 
		$("#addButton").click(function () {
		    if(counter>10){
			alert("Only 10 textboxes allow");
			return false;
		    }   
		    var newTextBoxDiv = $(document.createElement('div'))
			 .attr("id", 'TextBoxDiv' + counter);
		    newTextBoxDiv.after().html('<label>Textbox #'+ counter + ' : </label>' +
			  '<input type="text" name="textbox' + counter + 
			  '" id="textbox' + counter + '" value="" >');
		    newTextBoxDiv.appendTo("#TextBoxesGroup");
		    counter++;
		 });
		 $("#removeButton").click(function () {
		    if(counter==1){
		      alert("No more textbox to remove");
		      return false;
		   }   
		    counter--;
		    $("#TextBoxDiv" + counter).remove();
		 });
		 $("#getButtonValue").click(function () {
		    var msg = '';
		    for(i=1; i<counter; i++){
		      msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
		    }
		      alert(msg);
		 });
	});
	
	function minus(){
		var fund=document.getElementById("PriceFund").value;
		var sell=document.getElementById("PriceSell").value;
		var minus2=sell-fund;
		if(minus2<0){
			document.getElementById("PriceMin").value="0";
		}else{
			document.getElementById("PriceMin").value=minus2;
		}
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
		echo "<div id='dozen'></div>";
		echo $this->Form->input('fund',array("onkeyup"=>"minus()"));
		echo "<div id='fund'></div>";
		echo $this->Form->input('sell',array("onkeyup"=>"minus()"));
		echo "<div id='sell'></div>";
		echo $this->Form->input('min',array("readonly"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div id='TextBoxesGroup'>
	<div id="TextBoxDiv1">
		<label>Textbox #1 : </label><input type='text' id='textbox1' >
	</div>
</div>
<input type='button' value='Add Button' id='addButton'>
<input type='button' value='Remove Button' id='removeButton'>
<input type='button' value='Get TextBox Value' id='getButtonValue'>

</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>