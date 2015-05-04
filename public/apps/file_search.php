<?php

	$q = $_GET['q'];

	for($i = 0; $i < 20; $i++){
	?>
		<div class="search-result" id="s-<?php echo $i; ?>">
			<div class="text">
				<?php echo $q; ?>
			</div>
		</div>
		<script>
			$("#s-<?php echo $i; ?>").hide().fadeIn(600*<?php echo $i; ?>);
		</script>
	<?php
	}




?>