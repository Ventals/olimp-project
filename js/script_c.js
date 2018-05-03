jQuery('document').ready(function(){
	jQuery('button').on('click', function(){
		var bal1, bal2, bal3, bal4, bal5, res;
		bal1 = jQuery('#bal1').val();
		bal2 = jQuery('#bal2').val();
		bal3 = jQuery('#bal3').val();
		bal4 = jQuery('#bal4').val();
		bal5 = jQuery('#bal5').val();
		bal1 = parseInt(bal1);
		bal2 = parseInt(bal2);
		bal3 = parseInt(bal3);
		bal4 = parseInt(bal4);
		bal5 = parseInt(bal5);
		bal1 = bal1 * 0.5;
		bal2 = bal2 * 0.2;
		bal3 = bal3 * 0.2;
		bal4 = bal4 * 0.05;
		bal5 = bal5 * 0.05;
		res = bal1 + bal2 + bal3 + bal4 + bal5;
		jQuery('#res').val(res);
	});
	jQuery('.table').on('click', function(){
		jQuery('.baltab').css("margin-left", "60%");
		jQuery('.exit').css("margin-left", "95%");
	});
	jQuery('.exit').on('click', function(){
		jQuery(this).css("margin-left", "-500%");
		jQuery('.baltab').css("margin-left", "-500%");
	});
});