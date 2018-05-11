function clickInRequired(elem) {
	var t = performance.now();
	var startWidth = elem.width;
	requestAnimationFrame(function anim(time) {
		time = time - t;
		if(time >= CLICK_ANIMATION_DURATION) {
			elem.width = (1 + CLICK_SIZE_CHANGE)*startWidth;
			setInterval(function() {
				elem.hidden = true;
				setElementIsComleted(elem);
			}, CLICK_PAUSE_BRFORE_HIDDEN);
			return;
		}
		elem.width = startWidth + clickTimeFunction(time/CLICK_ANIMATION_DURATION)*CLICK_SIZE_CHANGE*startWidth;
		requestAnimationFrame(anim);
	});
}
	
function mouseOverInRequired(elem) {
	var t = performance.now();
	var startWidth = elem.width;
	requestAnimationFrame(function anim(time) {
		time = time - t;
		if(time >= MOUSE_MOVE_ANIMATION_DURATION) {
			elem.width = (1 + MOUSE_MOVE_SIZE_CHANGE)*startWidth;
			return;
		}
		elem.width = startWidth + mouseMoveTimeFunction(time/MOUSE_MOVE_ANIMATION_DURATION)*MOUSE_MOVE_SIZE_CHANGE*startWidth;
		requestAnimationFrame(anim);
	});
}
function mouseOutInRequired(elem) {
	var t = performance.now();
	var startWidth = elem.width;
	requestAnimationFrame(function anim(time) {
		time = time - t;
		if(time >= MOUSE_MOVE_ANIMATION_DURATION) {
			elem.width = (1 - MOUSE_MOVE_SIZE_CHANGE)*startWidth;
			return;
		}
		elem.width = startWidth - 0.1*mouseMoveTimeFunction(time/MOUSE_MOVE_ANIMATION_DURATION)*MOUSE_MOVE_SIZE_CHANGE*startWidth;
		requestAnimationFrame(anim);
	});
}


function setElementIsComleted(elem) {
	
}
function clickTimeFunction(time) {
	return time;
}
function mouseMoveTimeFunction(time) {
	return time;
}
var CLICK_SIZE_CHANGE = 0.25;
var MOUSE_MOVE_SIZE_CHANGE = 0.1;
var CLICK_ANIMATION_DURATION = 1000;
var MOUSE_MOVE_ANIMATION_DURATION = 500;
var CLICK_PAUSE_BRFORE_HIDDEN = 150;