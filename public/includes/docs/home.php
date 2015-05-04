<form method="get" id="search-form">
	<input type="text" class="intext" name="q" placeholder="Search" id="search-input">
</form>
<div class="search-results">
</div>

<script>

	$("#search-form").submit(function(event){
		event.preventDefault();

		var text = $("#search-input").val();

		var request = $.ajax({
			type:"get",
			cache:false,
			url:"apps/file_search.php",
			data:{q: text}
		});

		$("#search-input").val("");

		request.done(function(data){
			$(".search-results").html(data);
		});
	});

	
</script>