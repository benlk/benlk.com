<?php 

$toc = '';

if (strpos($post_status, "toc") !== false ) {

	/*
	 * Based on AutoTOC function written by Alex Freeman
	 * Released under CC-by-sa 3.0 license
	 * http://www.10stripe.com/articles/automatically-generate-table-of-contents-php.php  
	 *  This only works if:
	 	* you replace your standard dropplets/includes/Markdown.php with the classic version of PHP Markdown Extra from https://michelf.ca/projects/php-markdown/
	 	* Headlines are formatted with an ID: # Headline {#id}
	 */
	
	function TableOfContents($html_string, $depth)
		
		{
		$filename = __FILE__;
	 
		//get the headings down to the specified depth
		$pattern = '/<h[2-'.$depth.']*[^>]*>.*?<\/h[2-'.$depth.']>/';
		$whocares = preg_match_all($pattern,$html_string,$winners);
	 
		//reformat the results to be more usable
		$heads = implode("\n",$winners[0]);
		$heads = str_replace('id="','href="#',$heads); // Replace ids with refs
		$heads = str_replace('</a>','',$heads);
		$heads = preg_replace('/<h([1-'.$depth.'])([^>]*)>/','<li class="toc$1"> <a $2>',$heads);
		$heads = preg_replace('/<\/h[1-'.$depth.']>/','</a></li>',$heads);
	 
		//plug the results into appropriate HTML tags
		$contents = '<div id="toc"> 
		<span class="toc-header">Contents</span>
		<ul>
		'.$heads.'
		</ul>
		</div>';
		return $contents;
	}
	
	$toc = TableOfContents($post_content, 3);

}
?>
<article class="single <?php echo($post_status); ?>">
    <div class="row">
        <div class="one-quarter meta">

            <ul>
                <li>Written by <a href="https://twitter.com/<?php echo($post_author_twitter); ?>"><?php echo($post_author); ?></a></li>
                <li><?php echo($published_date); ?></li>
                <li>Category: <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></li>
            </ul>
        </div>

        <div class="three-quarters post">
            <?php echo($toc); ?>
            <?php echo($post_content); ?>

            <ul class="actions left">
                <li><a class="button" href="<?php echo($blog_url); ?>">⌫ More Articles</a></li>
                <?php if ($toc) { ?>
                <li><a class="button" href="#toc" title="Scroll to table of contents">&uarr;</a></li>
                <?php } ?>
                <li><a class="button" href="https://twitter.com/intent/tweet?text=&quot;<?php echo($post_title); ?>&quot;%20<?php echo($post_link); ?>%20via%20<?php echo($post_author_twitter); ?>" data-dnt="true">Tweet this! →</a></li>
                
            </ul>
        </div>
    </div>
</article>
