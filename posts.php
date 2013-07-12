<article class="<?php echo $post_status ?>">
    <div class="row frontpage">
        <div class="one-quarter meta">
            <div class="thumbnail">
                <img src="<?php echo $post_image ?>" alt="<?php echo $post_title ?>" />
            </div>

            <ul>
                <li><?php echo $published_date ?></li>
                <li><a href="<?php echo $blog_url.'/category/'.urlencode(trim(strtolower($post_category))); ?>"><?php echo $post_category ?></a></li>
                <li></li>
            </ul>
        </div>

        <div class="three-quarters post">
            <div class="post-headline">
                <h2><a href="<?php echo $post_link ?>"><?php echo $post_title ?></a></h2>
            </div>

            <div class="post-intro">
                <?php echo $post_intro ?>
            </div>
            

            <div class="post-actions">
                <ul class="actions">
                    <li><a class="button" href="<?php echo $post_link ?>">Continue Reading</a></li>
                    <?php if ($category) { ?>
                    <li><a class="button" href="<?php echo $blog_url ?>">More Articles</a></li>
                    <?php } ?>
                </ul>
            </div>  
        </div>
    </div>
</article>
