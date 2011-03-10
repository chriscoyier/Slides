<?php
    function array_key_relative ($array, $current_key, $offset = 1) {
        $keys = array_keys($array);
        $current_key_index = array_search($current_key, $keys);
        if (isset($keys[$current_key_index + $offset])) {
            return $keys[$current_key_index + $offset];
        }
        return false;
    }
?>

	<footer>
		<section>
			
			<?php 
				reset($pageNames); // move array pointer to beginning
				if (basename($_SERVER["SCRIPT_NAME"]) != key($pageNames)) { ?>
					<a href="<?php echo array_key_relative($pageNames, basename($_SERVER["SCRIPT_NAME"]), -1); ?>" id="previous">Previous</a>
			<?php } ?>
			
			Jump to: 
			<select id="jumper">
				<?php
					for ($index=0; $index < $slideCount; $index++) {
				        if (substr("$slidesArray[$index]", 0, 1) != "." && substr("$slidesArray[$index]", 0, 1) != "*") { 
							echo "<option value='$slidesArray[$index]'";
							if ($slidesArray[$index] == $currentFile) {
								echo ' selected="selected"';
							}
							echo '>' . $pageNames[$slidesArray[$index]] . '</option>';
						}
					}
				?>
			</select>
			
			<?php 
				end($pageNames); // move array pointer to last
				if (basename($_SERVER["SCRIPT_NAME"]) != key($pageNames)) { ?>
					<a href="<?php echo array_key_relative($pageNames, basename($_SERVER["SCRIPT_NAME"]), 1); ?>" id="next">Next</a>
			<?php } ?>
			
		</section>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="../scripts/slide.js"></script>

</body>

</html>