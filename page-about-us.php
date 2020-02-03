<?php
/**
 * Main Page template file
 * */
get_header();
?>
<style>
	#mainmenu ul li a {
	color: #9d9d9d !important;
	}
</style>
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
			<h1 class="fr-black-fg">About Us</h1>

			<p class="fr-grey-fg">Regardless of the size or scope of your plumbing problems,
					you can count on Trusted JM PLUMBING UK to get you 
					connected with an expert plumber that can handle the job
					with professionalism and exceptional customer care.</p>
		</div>

		<div class="col-md-4 wow bounceInRight" data-wow-delay="0.5s">
			<div class="fr_cir_wrap fr-tx-10 fr-red-bg" style="background:url(<?php echo get_template_directory_uri(); ?>/images/cir_white.png);   background-position: center; background-size: contain;" >
				<img src="<?php echo get_template_directory_uri(); ?>/images/pipe1.jpg" alt="pipe" />
			</div>
		</div>
	</div>
	<div class="wrapper about-us">
		<h1 class="row fr-page-title text-center">Our Team</h1>
		<?php echo do_shortcode( '[tlpteam id="48" title="Our Team"]' ) ?>
	</div>
<!-- page content start-->

<!-- page content end-->
</section>
<?php get_footer(); ?>
