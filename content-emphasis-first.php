<article id="post-<?php echo $post->ID; ?>" class='emphasis featured'>
<!-- <article id="post-<?php echo $post->ID; ?>" class='span-11 extended emphasis first halfcolborder'> -->
	<aside>
		<a href='<?php echo post_permalink($post->ID); ?>'><?php echo get_the_post_thumbnail($post->ID, array(450,450)); ?></a>
	</aside>
	  <header>
		<h3><a href='<?php echo post_permalink($post->ID); ?>'><?php the_title(); ?></a></h3>
		<p class='context'><?php echo get_the_date(); ?></p>
	  </header>
	<section>
		<a href='<?php echo post_permalink($post->ID); ?>'><?php the_excerpt(); ?></a>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
