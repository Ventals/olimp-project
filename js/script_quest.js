jQuery('document').ready(function(){
	jQuery('.mesform').css("margin-left", "25%");
	jQuery('.out1').css("margin-left", "74%");
	jQuery('.mesform').html("<h2>Вітаємо в квесті!</h2> <br \/> Який безлад! Напевно буде важко знайти тут щось. Ви маєте зібрати усі документи потрібні для вступу, натиснувши на них. Будьте уважні, не натискайте на непотрібні документи! Удачі!");
	jQuery('.out1').on('click', function(){
		jQuery('.mesform').css("margin-left", "-500%");
		jQuery(this).css("margin-left", "-500%");
	});
	var documents = 0;
	localStorage.setItem('docs', documents);
	jQuery('.table').delegate('.need', 'click', function(){
		documents = documents + 1;
		localStorage.setItem('docs', documents);
		jQuery(this).css("margin-left", "-500%");
		jQuery(this).css("transition", "0.5s");
		if(documents == 4){
		jQuery('#finish').css("margin-left", "65%");
		jQuery('.mesform').css("margin-left", "25%");
		jQuery('.out1').css("margin-left", "74%");
		jQuery('.mesform').html("<h2>Дуже добре!</h2> <br \/> Ви зібрали усі потрібні документи і готові іти до університету. Натисніть на <h3>Завершити квест</h3>");
	}
	});
	var wrong = 0;
	localStorage.setItem('wrong', wrong);
	jQuery('.table').delegate('.notneed', 'click', function(){
		wrong = wrong + 1;
		localStorage.setItem('wrong', wrong);
		jQuery('.mesform').css("margin-left", "25%");
		jQuery('.out1').css("margin-left", "74%");
		jQuery('.mesform').html("<h2>Будьте уважнішими!</h2> <br \/> Вам не потрібен цей документ, неправильні вибори призведуть до програшу.");
		if(wrong == 4){
			jQuery('#restart').css("margin-left", "21%");
			jQuery('#restart').css("margin-top", "18%");
			jQuery('#restart').css("z-index", "70");
			jQuery('.out1').css("margin-left", "-500%");
			jQuery('.mesform').css("margin-left", "20%");
			jQuery('.mesform').css("margin-top", "2%");
			jQuery('.mesform').css("width", "70%");
			jQuery('.mesform').css("height", "40vw");
			jQuery('.mesform').html("<h2>Забагато невірних виборів!</h2> <br \/> Почніть квест заново.");
		}

	});
	jQuery('#docb2').on('click', function(){
		jQuery('#point1').html("<s>1. Паспорт<s>");
	});
	jQuery('#docb3').on('click', function(){
		jQuery('#point2').html("<s>2. Екзаменаційний листок<s>");
	});
	jQuery('#docb4').on('click', function(){
		jQuery('#point3').html("<s>3. Військовий квиток<s>");
	});
	jQuery('#docb1').on('click', function(){
		jQuery('#point4').html("<s>4. Сертифікат з іноземної мови<s>");
	});
});