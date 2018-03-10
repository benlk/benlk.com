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
		<script type="text/javascript" src="/templates/benlk.com/js/text-balancer/text-balancer.standalone.js"></script>
		<script type="text/javascript">
		textBalancer.initialize('h1, h2, h3');
		</script>

		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-59485687-1', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>

		<footer>
			<p>This site uses Google Analytics to satisfy the author's curiosity about browser viewport sizes. If you don't want to be tracked, <abbr title="Electronic Frontier Foundation">EFF</abbr>'s <a href="https://www.eff.org/privacybadger">Privacy Badger</a> and/or gorhill's <a href="https://github.com/gorhill/uBlock">uBlock</a> browser extensions are recommended as methods to prevent tracking on all sites.</p>
		</footer>
	</body>
</html>
