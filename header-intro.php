<header class="intro">
    <div class="row">
        <div class="one-quarter meta">
            <ul>
                <li><a href="mailto:<?php echo $blog_email ?>?subject=Hello"><?php echo $blog_email ?></a></li>
                <li><a href="https://twitter.com/<?php echo $blog_twitter ?>">&#64;<?php echo $blog_twitter ?></a></li>
            </ul>
        </div>

        <div class="three-quarters post">
            <h2><?php echo $intro_title ?></h2>

            <?php echo markdown($intro_text); ?>

			<?php
				include "custom/intro-buttons.php"
				// These are if you want to put some buttons in your header.
			?>
        </div>
    </div>
</header>
