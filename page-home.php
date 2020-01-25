<?php
/**
 * Main Page template file
 * */
get_header();
?>
<section class="section-main">

	<div class="fr_section1 row">
		<div class="fr_section1_left col-md-6">
			<h1>दश ठाउँ किन जानी ?<br>जब धाराबिजुली छ नि !</h1>
			<a class="btn" href="#"> ORDER NOW </a>
		</div>
		<div class="fr_section1_wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/images/mod1.png" alt="center image of dharabijuli"/>
		</div>
		<div class="fr_section1_wrapper2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cir_white.png" alt="center image of dharabijuli"/>
		</div>
		<div class="fr_section1_right col-md-6">
		<img src="<?php echo get_template_directory_uri(); ?>/images/ellipse.png" alt="art dharabijuli"/>
		<img src="<?php echo get_template_directory_uri(); ?>/images/ellipse.png" alt="art dharabijuli"/>
		<img src="<?php echo get_template_directory_uri(); ?>/images/ellipse.png" alt="art dharabijuli"/>
		<h1>OPEN<br>ALL WEEKDAYS<br>(8AM TO 8PM)</h1>
		<div class="low_text">
			<h1>All Over Kathmandu</h1>
			<h3>( Outside ringroad as well )</h3>
		</div>
		</div>		
	</div>

	<div class="fr_section2 row">
		<div class="fr_section2_left col-md-6">
			<img class="left" src="<?php echo get_template_directory_uri();?>/images/mod1.png" alt="dharabijuli" />
				<div class="fr_card">
					<h1>Plumbing Service</h1>
				</div>
			<ul>
				<li>Repair and Replacement </li>
				<li>Repair and Replacement </li>
				<li>Repair and Replacement </li>
				<li>Repair and Replacement </li>
			</ul>

			<div class="fr_circle">

			</div>
		</div>
		<div class="fr_section2_right col-md-6">
			<ul>
				<li>Repair and Replacement </li>
				<li>Repair and Replacement </li>
				<li>Repair and Replacement </li>
				<li>Repair and Replacement </li>
			</ul>
			<img class="right" src="<?php echo get_template_directory_uri();?>/images/mod1.png" alt="dharabijuli" />
				<div class="fr_card">
					<h1>Electrical Service</h1>
				</div>
		</div>


	</div>

	<div class="fr_section3 row">
		<div class="col-md-8">
			<h1>Why Choose Us ?</h1>

			<p>Regardless of the size or scope of your plumbing problems,
you can count on Trusted JM PLUMBING UK to get you 
connected with an expert plumber that can handle the job
with professionalism and exceptional customer care.</p>

			<ul>
				<li>Expert Plumbers and Electricians</li>
				<li>Emergency Services </li>
				<li>Scheduled Visits </li>
			</ul>
		</div>

		<div class="col-md-4">
			<div class="fr_cir_wrap fr-tx-10" style="background:url(<?php echo get_template_directory_uri(); ?>/images/cir_white.png);   background-position: center;
    background-size: contain;" >
				<img src="<?php echo get_template_directory_uri(); ?>/images/pipe1.jpg" alt="pipe" />
			</div>
		</div>
	</div>

	<div class="fr_section4 row">
		<h1 class="text-center">How We Work ?</h1>
		<div class="row fr-step">
			<div class="col-md-2">
			1
			</div>
			<div class="col-md-8">
				<div class="fr-work-title">
					Select a service
				</div>
				<div class="fr-work-desc">
				Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="row fr-step fr-right">
		<div class="col-md-2">
			
			</div>
			<div class="col-md-8">
				<div class="fr-work-title">
					Get Response and Visit
				</div>
				<div class="fr-work-desc">
				Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</div>
			</div>
			<div class="col-md-2">
				2
			</div>
		</div>
		<div class="row fr-step fr-left">
			<div class="col-md-2">
				3
			</div>
			<div class="col-md-8">
				<div class="fr-work-title">
					Job Done !!
				</div>
				<div class="fr-work-desc">
				Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>
	<!-- fireant changes -->
    <!-- <div class="page-banner col-md-12">
		<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading">

				<?php //the_title(); ?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php //niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div> -->
    
<!-- page content start-->
<div class="theme-content page-margin-top col-md-12">
	<div class="container less-padding">
		<div class="row">
			<div class="content-blog col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="ourblog-box">
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-header">
						<div class="image-wrapper">
							<?php the_post_thumbnail( 'niche-blog-thumbnail-image', array( 'alt' => get_the_title(), 'class' => 'img-responsive') ); ?>
						</div>
					</div>	
					<?php endif; ?>
					<div class="post-detail">
						<?php the_content(); ?> 
				</div>
				<?php comments_template( '', true ); ?>
			</div>
		<?php endwhile;  ?> 	
				<!--pagination-->
				<div class="pagination col-md-12">
					 <?php
                       // Previous/next page navigation.
                       the_posts_pagination();
                     ?>
				</div>
			</div>
		<?php get_sidebar(); ?>
		</div>  
	</div>
</div>
<!-- page content end-->
</section>
<?php get_footer(); ?>
