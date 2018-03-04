<?php get_header(); ?>
	<div class="col ">
		<div class="row home_main">

			<div class="col-lg-6 col-xl-6 col-md-6 col-11 align-self-lg-center align-self-xl-center align-self-md-center align-self-top home_center-block" >
				<div class="logo d-xl-block d-lg-block d-md-block d-none fade">
					<?php the_custom_logo(); ?>
				</div>
				<div class="d-lg-block d-md-block d-xl-block d-none home_contact fade">
					<p>( Viber/ WhatsApp / Telegram ):</p>
					<p><?php the_field('phone');?></p>
  					<a href="https://www.instagram.com/hellolucy11/" target="_blank"><div class="social-item"><i class="icon-instagram"></i></div></a>
			    	<a href="https://www.facebook.com/hellolucy111" target="_blank"><div class="social-item"><i class="icon-facebook"></i></div></a>
				</div>
			</div>
			<div class="col-1 d-lg-block d-xl-block d-md-block d-none"></div>
			<div class="col-lg-5 col-xl-5 col-md-5 col-12 fade">
				<div class="home-photo_block" style="background: url('<?php the_field('photo1');?>');  background-repeat: no-repeat; background-position: 50% 50%; background-size: cover;"></div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
