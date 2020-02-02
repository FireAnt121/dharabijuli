<?php
/**
 * Main Page template file
 * */
get_header();
?>
<section class="section-main">
    <!-- <div class="page-banner col-md-12">
		<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading">
				<?php the_title(); ?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div> -->
	<div class="fr_section3 row f-about">
		<div class="col-md-8 wow bounceInLeft" data-wow-delay="0.5s">
			<h1>About Us</h1>

			<p >Regardless of the size or scope of your plumbing problems,
					you can count on Trusted JM PLUMBING UK to get you 
					connected with an expert plumber that can handle the job
					with professionalism and exceptional customer care.</p>
		</div>

		<div class="col-md-4 wow bounceInRight" data-wow-delay="0.5s">
			<div class="fr_cir_wrap fr-tx-10 " style="background:url(<?php echo get_template_directory_uri(); ?>/images/cir_white.png);   background-position: center; background-size: contain;" >
				<img src="<?php echo get_template_directory_uri(); ?>/images/pipe1.jpg" alt="pipe" />
			</div>
		</div>
	</div>
<!-- page content start-->

<!-- page content end-->
</section>
<?php get_footer(); ?>
