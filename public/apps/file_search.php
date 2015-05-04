<?php

	$q = $_GET['q'];

	for($i = 0; $i < 20; $i++){
	?>
		<div class="search-result" id="s-<?php echo $i; ?>">
			<?php echo $q; ?>
		</div>
		<script>
			$("#s-<?php echo $i; ?>").hide().slideDown(400*<?php echo $i; ?>);
		</script>
	<?php
	}




?>