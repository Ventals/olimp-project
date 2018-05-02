jQuery('document').ready(function(){
	jQuery('.form').css("margin-left", "20%");
	jQuery('.out').css("margin-left", "80%");
	jQuery('.out').on('click', function(){
		jQuery('.form').css("margin-left", "-500%");
		jQuery(this).css("margin-left", "-500%");
	});
	jQuery('.help').on('click', function(){
		jQuery('.form').css("margin-left", "20%");
		jQuery('.out').css("margin-left", "80%");
	});
});