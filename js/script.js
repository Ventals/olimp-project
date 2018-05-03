jQuery('document').ready(function(){
	var linkNav = document.querySelectorAll('[href^="#"]'), 
    V = 0.6;  
for (var i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function(e) { 
        e.preventDefault(); 
        var w = window.pageYOffset, 
            hash = this.href.replace(/[^#]*(.*)/, '$1');  
        t = document.querySelector(hash).getBoundingClientRect().top,  
            start = null;
        requestAnimationFrame(step); 
        function step(time) {
            if (start === null) start = time;
            var progress = time - start,
                r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
            window.scrollTo(0,r);
            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash  
            }
        }
    }, false);
}
	jQuery('.in1').on('click', function(){
		jQuery(this).css("background-image", "url(images/ina.png)");
		jQuery(this).css("height", "3.3vw");
		jQuery('.reg1').css("background-image", "url(images/reg.png)");
		jQuery('.reg1').css("height", "3vw");
		jQuery('.form').css("margin-left", "-500%");
		jQuery('.out').css("margin-left", "-500%");
	});
	jQuery('.reg1').on('click', function(){
		jQuery(this).css("background-image", "url(images/rega.png)");
		jQuery(this).css("height", "3.3vw");
		jQuery('.in1').css("background-image", "url(images/in.png)");
		jQuery('.in1').css("height", "3vw");
		jQuery('.form').css("margin-left", "0");
		jQuery('.out').css("margin-left", "40%");
	});
	jQuery('.btn1').on('click', function(){
		jQuery(this).css("transform", "scale(1.5, 1.5)");
		jQuery(this).css("opacity", "1");
		jQuery('.btn2').css("transform", "scale(1, 1)");
		jQuery('.btn2').css("opacity", "0.8");
		jQuery('.btn3').css("transform", "scale(1, 1)");
		jQuery('.btn3').css("opacity", "0.8");
	});
	jQuery('.btn2').on('click', function(){
		jQuery(this).css("transform", "scale(1.5, 1.5)");
		jQuery(this).css("opacity", "1");
		jQuery('.btn1').css("transform", "scale(1, 1)");
		jQuery('.btn1').css("opacity", "0.8");
		jQuery('.btn3').css("transform", "scale(1, 1)");
		jQuery('.btn3').css("opacity", "0.8");
	});
	jQuery('.btn3').on('click', function(){
		jQuery(this).css("transform", "scale(1.5, 1.5)");
		jQuery(this).css("opacity", "1");
		jQuery('.btn1').css("transform", "scale(1, 1)");
		jQuery('.btn1').css("opacity", "0.8");
		jQuery('.btn2').css("transform", "scale(1, 1)");
		jQuery('.btn2').css("opacity", "0.8");
	});
	jQuery('.reg').on('click', function(){
		jQuery('.form').css("margin-left", "0");
		jQuery('.reg1').css("background-image", "url(images/rega.png)");
		jQuery('.reg1').css("height", "3.3vw");
		jQuery('.out').css("margin-left", "40%");
		jQuery('.btn3').css("transform", "scale(1.5, 1.5)");
		jQuery('.btn3').css("opacity", "1");
		jQuery('.btn1').css("transform", "scale(1, 1)");
		jQuery('.btn1').css("opacity", "0.8");
		jQuery('.btn2').css("transform", "scale(1, 1)");
		jQuery('.btn2').css("opacity", "0.8");
	});
	jQuery('.in').on('click', function(){
		jQuery('.btn3').css("transform", "scale(1.5, 1.5)");
		jQuery('.btn3').css("opacity", "1");
		jQuery('.btn1').css("transform", "scale(1, 1)");
		jQuery('.btn1').css("opacity", "0.8");
		jQuery('.btn2').css("transform", "scale(1, 1)");
		jQuery('.btn2').css("opacity", "0.8");
	});
	jQuery('.out').on('click', function(){
		jQuery(this).css("margin-left", "-500%");
		jQuery('.reg1').css("background-image", "url(images/reg.png)");
		jQuery('.reg1').css("height", "3vw");
		jQuery('.form').css("margin-left", "-500%");
	});
	jQuery('.block1').hover(function(){
		jQuery('.btn1').css("transform", "scale(1.5, 1.5)");
		jQuery('.btn1').css("opacity", "1");
		jQuery('.btn1').css("transition", "0.5s");
		jQuery('.btn2').css("transform", "scale(1, 1)");
		jQuery('.btn2').css("opacity", "0.8");
		jQuery('.btn3').css("transform", "scale(1, 1)");
		jQuery('.btn3').css("opacity", "0.8");
	});
	jQuery('.block2').hover(function(){
		jQuery('.btn2').css("transform", "scale(1.5, 1.5)");
		jQuery('.btn2').css("opacity", "1");
		jQuery('.btn2').css("transition", "0.5s")
		jQuery('.btn1').css("transform", "scale(1, 1)");
		jQuery('.btn1').css("opacity", "0.8");
		jQuery('.btn3').css("transform", "scale(1, 1)");
		jQuery('.btn3').css("opacity", "0.8");
	});
	jQuery('.block3').hover(function(){
		jQuery('.btn3').css("transform", "scale(1.5, 1.5)");
		jQuery('.btn3').css("opacity", "1");
		jQuery('.btn3').css("transition", "0.5s")
		jQuery('.btn1').css("transform", "scale(1, 1)");
		jQuery('.btn1').css("opacity", "0.8");
		jQuery('.btn2').css("transform", "scale(1, 1)");
		jQuery('.btn2').css("opacity", "0.8");
	});
});