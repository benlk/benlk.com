<article class="<?php echo($post_status); ?>">
    <div class="row">
        <div class="one-quarter meta">

            <ul>
                <li><?php echo($published_date); ?></li>
            </ul>
        </div>

        <div class="three-quarters post">
            <h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

            <?php echo($post_intro); ?>

            <ul class="actions">
                <li><a class="button" href="<?php echo($post_link); ?>">Continue Reading</a></li>
                <?php if ($category) { ?>
                <li><a class="button" href="<?php echo($blog_url); ?>">More Articles</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</article>
