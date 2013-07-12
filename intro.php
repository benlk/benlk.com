<header class="intro">
    <div class="row">
        <div class="one-quarter meta">
            <div class="thumbnail">
                <img src="<?php echo get_twitter_profile_img($blog_twitter) ?>" alt="profile" />
            </div>

            <ul>
                <li><?php echo $blog_title ?></li>
                <li><a href="mailto:<?php echo $blog_email ?>?subject=Hello"><?php echo $blog_email ?></a></li>
                <li><a href="http://twitter.com/<?php echo $blog_twitter ?>">&#64;<?php echo $blog_twitter ?></a></li>
                <li></li>
            </ul>
        </div>

        <div class="three-quarters post">
            <h2><?php echo $intro_title ?></h2>

            <p><?php echo $intro_text ?></p>
			<p>
				<ul class="links">
				<!-- set manually in intro.php, because $intro_text doesn't have Markdown support yet-->
					<a href="http://resume.benlk.com/"><li>Resume</li></a>
					<a href="https://github.com/benlk/"><li>GitHub</li></a>
					<a href="https://secure.flickr.com/photos/benlk"><li>Flickr</li></a>
					<a href="https://twitter.com/benlkeith"><li>Twitter</li></a>
				</ul>
			</p>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
</header>
