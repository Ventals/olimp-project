jQuery('document').ready(function(){
	jQuery('button').on('click', function(){
		var bal1, bal2, bal3, bal4, bal5, res;
		res = 0;
		localStorage.setItem('bal', res);
		bal1 = jQuery('#bal1').val();
		bal2 = jQuery('#bal2').val();
		bal3 = jQuery('#bal3').val();
		bal4 = jQuery('#bal4').val();
		bal5 = jQuery('#bal5').val();
		if(jQuery('#bal5').val() == "" 
			|| jQuery('#bal4').val() == "" 
			|| jQuery('#bal3').val() == ""
			|| jQuery('#bal2').val() == "" 
			|| jQuery('#bal1').val() == "" 
			|| jQuery('#bal5').val() > 200 
			|| jQuery('#bal4').val() > 200 
			|| jQuery('#bal3').val() > 200
			|| jQuery('#bal2').val() > 200 
			|| jQuery('#bal').val() > 200 
			|| jQuery('#bal5').val() < 100 && jQuery('#bal5').val() > 1 
			|| jQuery('#bal4').val() < 100 && jQuery('#bal4').val() > 1
			|| jQuery('#bal3').val() < 100 && jQuery('#bal3').val() > 1
			|| jQuery('#bal2').val() < 100 && jQuery('#bal2').val() > 1
			|| jQuery('#bal1').val() < 100 && jQuery('#bal1').val() > 1){
		if(jQuery('#bal5').val() == "" 
			|| jQuery('#bal4').val() == "" 
			|| jQuery('#bal3').val() == ""
			|| jQuery('#bal2').val() == "" 
			|| jQuery('#bal1').val() == ""){
			alert("Введіть дані, якщо у вас немає цих балів, введіть 0.");
		}
		if(jQuery('#bal5').val() > 200 
			|| jQuery('#bal4').val() > 200 
			|| jQuery('#bal3').val() > 200
			|| jQuery('#bal2').val() > 200 
			|| jQuery('#bal').val() > 200){
			alert("Бали ЗНО, ФДП та атестату не можуть перевищувати 200.");
		}
		if(jQuery('#bal5').val() < 100 && jQuery('#bal5').val() > 1 
			|| jQuery('#bal4').val() < 100 && jQuery('#bal4').val() > 1
			|| jQuery('#bal3').val() < 100 && jQuery('#bal3').val() > 1
			|| jQuery('#bal2').val() < 100 && jQuery('#bal2').val() > 1
			|| jQuery('#bal1').val() < 100 && jQuery('#bal1').val() > 1){
			alert("Бали ЗНО, ФДП та атестату не можуть бути меньше 100.");
		}
			jQuery('#res').val("Невірні дані");
		} else {
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
		localStorage.setItem('bal', res);
		jQuery('#res').val(res);
	}
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
