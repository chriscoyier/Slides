<?php
	require_once("../setup.php");
	$title = "$slideTitle | $presentationTitle";
	include_once("../includes/doctype.php"); 
	include_once("../includes/header.php"); 
?>

<div id="content" class="slide-4">
	
	<section>
		
		<?php 
			// If you want to display, you have access to this here: 
			// echo $slideTitle; 
		?>
		
		<h2>Photo Credits</h2>
		<ul>
			<li>
				Slide 1: 
				<a href="http://www.flickr.com/photos/dotdoubledot/2208867228/">
					Photo by Sandy Redding
				</a>
			</li>
			<li>
				Slide 3:
				<a href="http://www.flickr.com/photos/claudio_ar/2077867996/">
					Photo by claudio_ar
				</a>
			</li>	
		</ul>
		
		<h2>Fonts</h2>
		<ul>
			<li>Helvetica Neue</li>
		</ul>
		
		<h2>Contact Info</h2>
		<ul>
			<li>@chriscoyier</li>
			<li>chriscoyier@gmail.com</li>
		</ul>
			
	</section>
	
</div><!--content-->

<?php  
	include_once("../includes/footer.php"); 
?>

