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

	<div class="wrapper contact-us">
        <h1 class="row fr-page-title text-center">Contact Us</h1>
        <div class="row">
            <div class="col-md-6">
            <?php echo do_shortcode( '[everest_form id="26"]' ) ;?>
            </div>
            <div class="col-md-6">

            </div>
        </div>

	</div>
<!-- page content start-->

<!-- page content end-->
</section>
<?php get_footer(); ?>
