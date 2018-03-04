<?php get_header(); ?>
<?php the_post(); ?>
<div class="col-1 d-lg-block d-xl-block d-md-block d-none "></div>
<div class="col-lg-11 col-md-11 col-12 post_content">
	<div class="row justify-content-center align-items-center">
		<div class="gallery_photo col-xl-8 col-lg-8 col-md-10 col-12">
			<div class="title" id="top">
				<div class="title_block">
					<h1><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> Gallery</h1>
					<p><?php single_post_title(); ?></p>
				</div>
			</div>

			<?php the_content(); ?>
		</div>
	</div>

<div class="to_top">
		<a href="#top">TOP<i class="icon-angle-up"></i></a>
	</div>


</div>

<?php get_footer(); ?>
