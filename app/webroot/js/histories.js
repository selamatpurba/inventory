$(document).ready(function(){
    $("#loading").hide();
    /*************************************************
     * Get autocomplete blok
     * Author : Andre
     * param  : none
     * return : none
     *************************************************/
    
    /*************************************************
     * Get autocomplete propinsi
     * Author : Fransiscus
     * param  : none
     * return : none
     *************************************************/
    
//    $( "#provinsi" ).autocomplete({
//		source: Shop.basePath + "ajax/provinsi",
//		minLength:1,
//		select: function(event, ui) {
//			$("#pid").val(ui.item.id);
//			$("#cop").val(ui.item.cop);
//		}
//    });
//    
    var ajax_load = "<img class='loading' src='../img/load.gif' alt='loading...' />";
	loadUrl = "ajax/histories";
	$("#load_basic").click(function(){
		$("#result").html(ajax_load).load(loadUrl);
	});
	
	$( "#NewsTags" ).autocomplete({
		source: Shop.basePath + "ajax/tags",
		minLength:1,
	});
    	
});
