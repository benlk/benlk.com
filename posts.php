<?php
$type_array = explode( ' ', $post_status );

$is_aside = in_array( 'aside', $type_array );

/**
 * Aside layout
 */
if ( $is_aside ) {
?>
	<article class="<?php echo($post_status); ?>">
		<div class="row">
			<div class="one-quarter meta">
				<ul>
					<li><?php echo($published_date); ?></li>
					<li><a href="<?php echo($post_link); ?>">permalink</a></li>
				</ul>
			</div>

			<div class="three-quarters post">

				<?php echo($post_content); ?>

			</div>
		</div>
	</article>

<?php
} else {
/**
 * Geenral post layout
 */
?>

	<article class="<?php echo($post_status); ?>">
		<div class="row">
			<div class="one-quarter meta">
				<ul>
					<li><?php echo($published_date); ?></li>
					<li><a href="<?php echo($post_link); ?>">permalink</a></li>
				</ul>
			</div>

			<div class="three-quarters post">
				<h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

				<?php echo($post_intro); ?>

				<ul class="actions">
					<li><a class="button" href="<?php echo($post_link); ?>">Continue Reading</a></li>
				</ul>
			</div>
		</div>
	</article>

<?php }
