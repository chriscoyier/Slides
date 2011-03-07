<?php

	// Put your logo in the images folder. Alpha transparent PNG @ 64px x 24px

	// Title of your Presentation
	$presentationTitle = "My Amazing Slide Deck";
	
	// Brand Name (like alt text for logo kinda)
	$brand = "Brand";
	
	// Put file names and names of slides here
	// This could probably be improved...
	$pageNames = array(
		'1-intro.php'         => 'This is my <strong>amazing</strong> first slide',
		'2-whatever.php'      => 'You like <strong>code</strong> don\'t you?',
		'3-graphic.php'       => 'Thank you <strong>very</strong> much.'
	);
	
	
	
	
	
	// Nerd alert
	
	$currentFile = $_SERVER["SCRIPT_NAME"];
    $parts = Explode('/', $currentFile);
    $currentFile = $parts[count($parts) - 1];
	$slideTitle = $pageNames[$currentFile];
	
	$thisDirectory = opendir(".");
	while($entryName = readdir($thisDirectory)) {
		$slidesArray[] = $entryName;
	}
	closedir($thisDirectory);
	
	sort($slidesArray);

	$slideCount = count($slidesArray);

?>