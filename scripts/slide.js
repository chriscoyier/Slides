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