<?php get_header(); ?>
<div class="col-1 d-lg-block d-xl-block d-md-block d-none"></div>
<div class="col-lg-11 col-md-11 col-12">
	<div class="title">
		<div class="title_block">
			<h1 class="title_content">About Me</h1>
		</div>
	</div>
	<div class="row justify-content-center about_content">
		<div class="col-xl-4 col-lg-5 col-md-5 col-12 about-photo_block fade">
			<?php

			$image = get_field('luda_photo');

			if( !empty($image) ): ?>

				<img class="about_photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
		<div class="col-xl-4 col-lg-5 col-md-5 col-12 align-self-center about_text fade">
			<h4><?php the_field('title1');?></h4>
			<p><?php the_field('text1');?></p>
			<h4><?php the_field('title2');?></h4>
			<p><?php the_field('text2');?></p>
			<h4><?php the_field('title3');?></h4>
			<p><?php the_field('text3');?></p>
		</div>
	</div>
</div>
<?php get_footer(); ?>
