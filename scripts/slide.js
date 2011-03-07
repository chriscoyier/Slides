$(window).load(function() {
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