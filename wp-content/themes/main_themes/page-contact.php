<?php get_header(); ?>
<div class="col-1 d-lg-block d-xl-block d-md-block d-none"></div>
<div class="col-lg-11 col-md-11 col-12">
	<div class="title">
		<div class="title_block">
			<h1 class="title_content">Contact</h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-12 d-flex contact_block">
			<div class="contact_content fade">
				<h3><?php the_field('call_me');?></h3>
				<p><?php the_field('phone');?></p>
				<p><?php the_field('email');?></p>
				<p>
					<a href="https://www.facebook.com/hellolucy111">
					<i class="icon-facebook"></i>Facebook</a>
				</p>
				<p>
					<a href="https://www.instagram.com/hellolucy11/">
					<i class="icon-instagram"></i>Instagram </a>
				</p>
			</div>
			<div class="contact_logo fade">
				<?php the_custom_logo(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
