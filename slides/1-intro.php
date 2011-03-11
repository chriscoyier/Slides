<?php
	require_once("../setup.php");
	$title = "$slideTitle | $presentationTitle";
	include_once("../includes/doctype.php"); 
	include_once("../includes/header.php"); 
?>

<div id="content" class="slide-1">
	
	<section>
		
		<?php 
			// If you want to display, you have access to this here: 
			// echo $slideTitle; 
		?>

		<blockquote>
			Children and dogs are as necessary to the welfare of the country as Wall Street and the railroads.
			<br><cite>- Harry S Truman</cite>
		</blockquote>
			
	</section>
	
</div><!--content-->

<?php  
	include_once("../includes/footer.php"); 
?>