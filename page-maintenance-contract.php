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
    <div class="wrapper services">
        <h1 class="row fr-page-title text-center">Maintenance Contract</h1>
        <p class="fr-grey-fg text-center">Regardless of the size or scope of your plumbing problems,
					you can count on Trusted JM PLUMBING UK to get you 
					connected with an expert plumber that can handle the job
                    with professionalism and exceptional customer care.</p>
                
    </div>
	<div class="fr_section5 row contract">

		<div class="col-sm-12 col-md-6 col-lg-3 wow bounceIn" data-wow-delay="0.5s">
			<div class="col-sm-12">
				<h4>Rs 1,000</h4>
				<p>Per Month</p>
				<h2>Service Upto Rs 2,000</h2>
				<h3>1 Routine Checkup</h3>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 wow bounceIn" data-wow-delay="0.25s"">
		<img class="" src="<?php echo get_template_directory_uri();?>/images/mod1.png" alt="dharabijuli" />
		<div class="col-sm-12 f_red f_w fr_active_card">
				<h4>Rs 3,000</h4>
				<p>Per Month</p>
				<h2>Service Upto Rs 2,000</h2>
				<h3>1 Routine Checkup</h3>
			</div>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-3 wow bounceIn" data-wow-delay="0.5s"">
		<div class="col-sm-12 f_green f_w">
				<h4>Rs 5,000</h4>
				<p>Per Month</p>
				<h2>Service Upto Rs 2,000</h2>
				<h3>1 Routine Checkup</h3>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 wow bounceIn" data-wow-delay="0.5s"">
		<div class="col-sm-12 f_purple f_w">
				<h4>Rs 7,000</h4>
				<p>Per Month</p>
				<h2>Service Upto Rs 2,000</h2>
				<h3>1 Routine Checkup</h3>
			</div>
		</div>
	</div>
<!-- page content start-->

<!-- page content end-->
</section>
<?php get_footer(); ?>
