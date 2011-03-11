$(window).load(function() {
	$("html").addClass("loaded");
});

function gotoThere(link) {
	window.location = link;
}

$("#previous, #next").click(function(e) {
	$("html").addClass("leaving");
	setTimeout(gotoThere, 1500, this.href);
	return false;
});

$("#jumper").change(function() {
 	$("html").addClass("leaving");
	setTimeout(gotoThere, 1500, $(this).val());
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