<?php
header("X-Clacks-Overhead: GNU Terry Pratchett");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo($page_title); ?></title>

		<!--

	 _	 _ _____   /
	 |_____|   |	/
	 |	 | __|__ .

	Theme source can be found at https://github.com/benlk/benlk.com

-->

		<link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu+Mono|Source+Sans+Pro:400,400italic|Oswald&subset=latin,latin-ext">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" type="img/png" href="<?php echo($template_dir_url); ?>custom/favicon.png" />

		<script src="jquery-1.10.2.min.js"></script>
		<?php echo($page_meta); ?>
		<?php get_header(); ?>
	</head>

	<body>
		<?php
#			var_dump(IS_HOME) . var_dump(isset($category)) . var_dump(IS_SINGLE);
			if ( IS_HOME ) {
				include("header-intro.php");
			} else if ( isset($category) ) {
				include("header-category.php");
			} else if ( IS_SINGLE ) {
				include("header-single.php");
			}
			echo($content);
			get_footer(); 
		?>
	</body>
</html>
