<?php $postnum = 1;
if (have_posts()): while (have_posts()) : the_post(); ?>
<section class="page-<?php echo $postnum ?>">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



		<!-- post title -->
		<h2 class="post-title">
			<!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>-->
			<?php the_title(); ?>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<!--<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>-->
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->

		<?php the_content(); ?>
		<!--<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>-->

		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>

		<!--<?php edit_post_link(); ?>-->

	</article>
	<!-- /article -->

	<!-- post thumbnail -->
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">-->
			<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
		<!--</a>-->
	<?php endif; ?>
	<!-- /post thumbnail -->

</section>
<?php 
$postnum++;
endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
