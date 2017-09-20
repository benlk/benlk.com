<?php
header("X-Clacks-Overhead: GNU Terry Pratchett");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo($page_title); ?></title>

		<!--

	       _ _____   /
	 |_____|   |    /
	 |     | __|__ .

	Theme source can be found at https://github.com/benlk/benlk.com

-->

		<link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@benlkeith" />
		<meta name="twitter:title" content="<?php echo $post_title; ?>" />
		<meta name="twitter:description" content="A blog post on The Writing Hat." />


		<link rel="icon" type="img/png" href="<?php echo($template_dir_url); ?>custom/favicon.png" />

		<script src="jquery-1.10.2.min.js"></script>
		<?php echo($page_meta); ?>
		<?php get_header(); ?>
	</head>

	<body>
		<?php
			if ( IS_HOME ) {
				include("header-intro.php");
			} else if ( isset($category) ) {
				include("header-category.php");
			} else if ( IS_SINGLE ) {
				include("header-single.php");
			}

			// Only display pagination at top if the page is greater than 1
			if ( $page > 1 && ( IS_HOME || isset($category) ) ) {
				echo $pagination;
			}
			echo($content);

			// Always display pagination at bottom if it's home or a category
			if ( IS_HOME || isset($category) ) {
				echo $pagination;
			}
			get_footer(); 
		?>
	</body>
</html>
