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

	<div class="wrapper contact-us">
        <h1 class="row fr-page-title text-center">Contact Us</h1>
        <div class="row">
            <div class="col-md-6">
            <?php echo do_shortcode( '[everest_form id="49"]' ) ;?>
            </div>
            <div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.2542786624776!2d85.34938601438537!3d27.74030203065126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1994b8a96c49%3A0x324b5693dcd86983!2sDharabijuli!5e0!3m2!1sen!2snp!4v1580733651998!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>

	</div>
<!-- page content start-->

<!-- page content end-->
</section>
<?php get_footer(); ?>
