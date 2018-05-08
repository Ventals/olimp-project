jQuery('document').ready(function(){
	jQuery('.form').css("margin-left", "20%");
	jQuery('.out').css("margin-left", "80%");
	jQuery('.out').on('click', function(){
		jQuery('.form').css("margin-left", "-500%");
		jQuery(this).css("margin-left", "-500%");
		jQuery('.compscreen').css("margin-left", "-500%");
		jQuery('.noutscreen').css("margin-left", "-500%");
	});
	jQuery('.help').on('click', function(){
		jQuery('.form').css("margin-left", "20%");
		jQuery('.out').css("margin-left", "80%");
	});
	jQuery('.laptop').on('click', function(){
		jQuery('.noutscreen').css("margin-left", "15%");
		jQuery('.out').css("margin-left", "83%");
		jQuery('.out').css("margin-top", "1%");
	});
	jQuery('.comp').on('click', function(){
		jQuery('.compscreen').css("margin-left", "15%");
		jQuery('.out').css("margin-left", "83%");
		jQuery('.out').css("margin-top", "1%");
	});
	jQuery('#next1').on('click', function(){
		jQuery(this).css("margin-left", "-500%");
		jQuery('#next2').css("margin-left", "39%");
		jQuery('.prof1').css("margin-top", "-500%");
		jQuery('.prof1').css("opacity", "0");
		jQuery('.prof1').css("transform", "scale(0.1, 0.1)");
		jQuery('.prof2').css("margin-top", "0");
		jQuery('.prof2').css("opacity", "1");
		jQuery('.prof2').css("transform", "scale(1, 1)");
	});
	jQuery('#next2').on('click', function(){
		jQuery(this).css("margin-left", "-500%");
		jQuery('#next3').css("margin-left", "39%");
		jQuery('.prof2').css("margin-top", "-500%");
		jQuery('.prof2').css("opacity", "0");
		jQuery('.prof2').css("transform", "scale(0.1, 0.1)");
		jQuery('.prof3').css("margin-top", "0");
		jQuery('.prof3').css("opacity", "1");
		jQuery('.prof3').css("transform", "scale(1, 1)");
	});
	jQuery('#next3').on('click', function(){
		jQuery(this).css("margin-left", "-500%");
		jQuery('#next1').css("margin-left", "39%");
		jQuery('.prof3').css("margin-top", "-500%");
		jQuery('.prof3').css("opacity", "0");
		jQuery('.prof3').css("transform", "scale(0.1, 0.1)");
		jQuery('.prof1').css("margin-top", "0");
		jQuery('.prof1').css("opacity", "1");
		jQuery('.prof1').css("transform", "scale(1, 1)");
	});
	jQuery('.next').hover(function(){
		jQuery(this).css("cursor", "pointer");
		jQuery(this).css("background-color", "#00CED1");
	},
	function(){
		jQuery(this).css("background-color", "#66CDAA");
	});

	var choise_sphere='';
	jQuery('#choose1').on('click', function(){
		choise_sphere = "Ви збираєтесь стати юристом";
		jQuery('.board').html(choise_sphere);
		jQuery('.out').css("margin-left", "-500%");
		jQuery('.compscreen').css("margin-left", "-500%");
	});
	jQuery('#choose2').on('click', function(){
		choise_sphere = "Ви збираєтесь стати програмістом";
		jQuery('.board').html(choise_sphere);
		jQuery('.out').css("margin-left", "-500%");
		jQuery('.compscreen').css("margin-left", "-500%");
	});
	jQuery('#choose3').on('click', function(){
		choise_sphere = "Ви збираєтесь стати механіком";
		jQuery('.board').html(choise_sphere);
		jQuery('.out').css("margin-left", "-500%");
		jQuery('.compscreen').css("margin-left", "-500%");
	});
});