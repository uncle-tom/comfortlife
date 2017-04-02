<?php get_header(); ?>
<?php $mainImage = wp_get_attachment_url( get_post_thumbnail_id($post_id, 'full'))
?>

<?php include 'innerheader.php'; ?>

<div class="margin50"></div>

<div class="container">
	<div class="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>