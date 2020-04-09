<article class="single">
	<div class="single-head-container">
		<div class="g-headline">
			<h1><?php the_title(); ?></h1>
			<div><?php the_time('Y-m-d a g:i'); ?>
			</div>
		</div>
	</div>



	<div class="single-content-bg">
		<div class="single-content-container">
			<?php
			the_post_thumbnail();
			the_content();
			?>
		</div>
	</div>

	<div class="single-content-comments-bg">
		<div class="single-content-comments">
			<?php
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>
		</div>
	</div>

</article>