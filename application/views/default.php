<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kohana 3.2 API Lookup</title>
	<link type="text/css" rel="stylesheet" href="<?php echo url::base(); ?>assets/jquery.autoSuggest.css">
	<link type="text/css" rel="stylesheet" href="<?php echo url::base(); ?>assets/gh-buttons.css">
	<link type="text/css" rel="stylesheet" href="<?php echo url::base(); ?>assets/style.css">
	<script type="text/javascript" src="<?php echo url::base(); ?>assets/jquery.js"></script>
	<script type="text/javascript" src="<?php echo url::base(); ?>assets/jquery.autoSuggest.js"></script>
	<script type="text/javascript">
		$(function() {
			$("input#query").autoSuggest("<?php echo url::site('search/ajax'); ?>",
				{
					minChars: 3,
					selectionLimit: 1,
					selectionAdded: function(elem){
						$.post("<?php echo url::site('search') ?>", {
							'query': elem.attr("data-value")
						}, function(data) {
							$("#api").html(data);
						});
					}}
			);
		});
	</script>
</head>
<body>

	<div id="box">
		<div id="form">
			<form method="post" action="<?php echo url::site('search') ?>">
				<input type="text" id="query" name="query">
				<button type="submit" class="button pill icon search">Search</button>
			</form>

			<div id="api"></div>
		</div>
	</div>
</body>
</html>
