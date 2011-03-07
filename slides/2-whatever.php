<?php
	require_once("../setup.php");
	$title = "$slideTitle | $presentationTitle";
	include_once("../includes/doctype.php"); 
	include_once("../includes/header.php"); 
?>

<div id="content" class="slide-2">
	
	<section>

		<h3>CSS Gradient Text</h3>
	
		<pre><code>h1 {
  font-size: 60px;
  background: -webkit-gradient(linear, 
	left top, 
	left bottom, 
	from (#eee), 
	to   (#333)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}</code></pre>
	
	</section>
	
</div><!--content-->

<?php  
	include_once("../includes/footer.php"); 
?>