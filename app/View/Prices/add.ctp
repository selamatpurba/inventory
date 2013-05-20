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
		
		var counter = 0;
		$("#addButton").click(function () {
		    if(counter>10){
			alert("Only 10 textboxes allow");
			return false;
		    }   
		    var newTextBoxDiv = $(document.createElement('div'))
			 .attr("id", 'TextBoxDiv' + counter);
		    newTextBoxDiv.after().html('<input name="data[Price][dozen]['+counter+']" maxlength="255" type="text" id="PriceDozen'+counter+'" required="required"/>');
		    newTextBoxDiv.appendTo("#TextBoxesGroup");
			$('#PriceDozen'+counter+'').on('change', function() {
			    if(this.value<0){
				    $().toastmessage('showErrorToast', "Kesalahan nilai lusin");
				    $(this).focus();
				    $(this).css("background-color","red");
				    $('#dozen').show();
				    $('#dozen').text("salah nih bro");
			    }else{
				    $(this).css("background-color","white");
				    $('#dozen').hide();
			    }  
			});
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
		 
		$('#PriceDozen').on('change', function() {
			if(this.value<0){
				$().toastmessage('showErrorToast', "Kesalahan nilai lusin");
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
				$().toastmessage('showErrorToast', "Kesalahan nilai modal");
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
				$().toastmessage('showErrorToast', "Kesalahan nilai jual");
				$(this).focus();
				$(this).css("background-color","red");
				$('#sell').show();
				$('#sell').text("salah nih bro");
			}else{
				$(this).css("background-color","white");
				$('#sell').hide();
				}  
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
		<table>
			<tr>
				<td>
					<?php	echo $this->Form->input('item_id'); ?>
				</td>
				<td>
					<?php echo $this->Form->input('dozen'); ?>
					<div id='dozen'></div>
				</td>
				<td>
					<?php echo $this->Form->input('fund',array("onkeyup"=>"minus()")); ?>
					<div id='fund'></div>
				</td>
				<td>
					<?php echo $this->Form->input('sell',array("onkeyup"=>"minus()")); ?>
					<div id='sell'></div>
				</td>
				<td>
					<?php echo $this->Form->input('min',array("readonly")); ?>
				</td>
			</tr>
		</table>
	</fieldset>
	<div id='TextBoxesGroup'>
		<div id="TextBoxDiv1">
			<label>Textbox #1 : </label><input type='text' id='textbox1' >
		</div>
	</div>	
<?php echo $this->Form->end(__('Submit')); ?>

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