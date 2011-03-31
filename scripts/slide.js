$(function() {

	// Prevent window.load from happening too fast
	// Idea by Chris Coyier and debungled by Paul Irish
	(function fn() {
      fn.now = +new Date;

      $(window).load(function() {
	     // 500ms seems to be enough... feel free to adjust per machine
         if (+new Date - fn.now < 500) setTimeout(fn, 500);
         $("html").addClass("loaded");
      });

    })();

	// Simple redirect function
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

	// Left and right arrow keys for changing slides
	$(document).keydown(function(e) {
		// right arrow
		if (e.keyCode == 39) {
			gotoThere($("#next").attr("href"));
		}
		// left arrow
		if (e.keyCode == 37) {
			gotoThere($("#previous").attr("href"));
		}
	});

});