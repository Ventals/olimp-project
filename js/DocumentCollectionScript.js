var documents = [
	{
		name: "1",
		description: "1st document",
		src: "images/bag.png",
		requered: true
	},
	{
		name: "2",
		description: "2nd document",
		src: "",
		requered: true
	},
	{
		name: "3",
		description: "3rd document",
		src: "images/nout.png",
		requered: true
	}
];



for (var i = 0; i < documents.length; i++) {
	let img = document.createElement("img");
	img.src = documents[i].src;
	img.doc = documents[i];
	if (documents[i].requered) {
		img.onmouseover = mouseOverInRequired;
		img.onmouseout = mouseOutInRequired; 
		img.onclick = clickInRequired;
	} 
	else {
		img.onmouseout = mouseOverInRequired;
		img.onmouseover = mouseOutInRequired; 
	}
	document.getElementById("questImages").appendChild(img);
}
function clickInRequired(event) {
	var elem = event.currentTarget;
	var t = performance.now();
	var startWidth = elem.width;
	requestAnimationFrame(function anim(time) {
		time = time - t;
		if(time >= CLICK_ANIMATION_DURATION) {
			elem.width = (1 + CLICK_SIZE_CHANGE)*startWidth;
			setTimeout (function() {
				elem.hidden = true;
				setElementIsComleted(elem);
			}, CLICK_PAUSE_BEFORE_HIDDEN);
			return;
		}
		elem.width = startWidth + clickTimeFunction(time/CLICK_ANIMATION_DURATION)*CLICK_SIZE_CHANGE*startWidth;
		requestAnimationFrame(anim);
	});
}

function mouseOverInRequired(event) {
	var elem = event.currentTarget;
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
function mouseOutInRequired(event) {
	var elem = event.currentTarget;
	var t = performance.now();
	var startWidth = elem.width;
	requestAnimationFrame(function anim(time) {
		time = time - t;
		if(time >= MOUSE_MOVE_ANIMATION_DURATION) {
			elem.width = (1/(1 + MOUSE_MOVE_SIZE_CHANGE))*startWidth;
			return;
		}
		elem.width = startWidth - mouseMoveTimeFunction(time/MOUSE_MOVE_ANIMATION_DURATION)*MOUSE_MOVE_SIZE_CHANGE*startWidth;
		requestAnimationFrame(anim);
	});
}
function setElementIsComleted(elem) {
	document.getElementById("nameOut").value = elem.doc.name;
	document.getElementById("descriptionOut").value = elem.doc.description;
	document.getElementById("dialog").hidden = false;
	return;
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
var CLICK_PAUSE_BEFORE_HIDDEN = 150;
