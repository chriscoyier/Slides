$(window).load(function() {
	// Would be nice if this would delay a little bit if it fires too fast
	// ... like a minimum time (if page is cached)
	$("html").addClass("loaded");	
});

function gotoThere(link) {
	window.location = link;
}

$("#previous, #next").click(function(e) {
	$("html").addClass("leaving");
	setTimeout(gotoThere, 400, this.href);
	return false;
});

$("#jumper").change(function() {
 	$("html").addClass("leaving");
	setTimeout(gotoThere, 400, $(this).val());
});

$(document).keydown(function(e) {
	// right arrow
	if (e.keyCode == 39) {
		$("#next").click();
	}
	// left arrow
	if (e.keyCode == 37) {
		$("#previous").click();
	}
});