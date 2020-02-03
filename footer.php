<footer>
<?php $footer_widget_style = get_theme_mod('footerWidgetStyle',2);
$hide_footer_widget_bar = get_theme_mod('hideFooterWidgetBar',1); 
 if(($hide_footer_widget_bar == 1) || ($hide_footer_widget_bar == '')) : 
    $footer_widget_style = $footer_widget_style+1;
    $footer_col_value = floor(12/($footer_widget_style)); ?>
    <div  class="main-footer">
    <div class="fr-footer-img"></div>
		<div class="container less-padding">
			<div class="col-md-12 footer-row2 ">
				<div class="row footer-main">

                <?php $flag_widget=true; $k = 1; ?>
                <?php for( $i=0; $i<$footer_widget_style; $i++) { ?>
                    <?php if (is_active_sidebar('footer-'.$k)) { ?>
                        <div class="col-md-<?php echo esc_attr($footer_col_value); ?> col-sm-<?php echo esc_attr($footer_col_value); ?> col-xs-12"><?php dynamic_sidebar('footer-'.$k); ?></div>
                    <?php $flag_widget=false;}
                    $k++;
                }
                 if($flag_widget){

                    $default_widget=array(
                    'before_widget' => '<aside id="footer_default_widget" class="footer-widget widget custom_footer_widget"><div class="col-md-'.esc_attr($footer_col_value).' col-sm-'.esc_attr($footer_col_value).' col-xs-12">',

                    'after_widget' => '</div></aside>',

                    'before_title' => '<div class="widget-title">',

                    'after_title' => '</div>', );                            

                    the_widget('WP_Widget_Pages', null, $default_widget);
                    
                    the_widget('WP_Widget_Categories', null, $default_widget);
                    
                    the_widget('WP_Widget_Archives', null, $default_widget);                           
               
                }
                 ?>
        		</div>
    		</div>    
        </div>
    </div>
	<?php endif; ?>      
    <div class="col-md-12 footer-row3">
		<div class="container less-padding">
			<div class="col-md-12 footer-bottom">
				<div class="row">
					<div class="col-md-6 col-sm-6 copyright-text">
					    <p>
						<?php printf(/* translators: 1 is theme url*/ esc_html__( 'Powered by %1$s', 'niche' ),'<a href="'.esc_url('https://prithakcreation.com').'" target="_blank">Priithak Creation </a>' ); 
						
						 $niche_copyright_check = get_theme_mod( 'copyright_text' );
							if( $niche_copyright_check != '' ) {
								 echo esc_html( get_theme_mod('copyright_text', '') );   } 
						 ?>
						</p>
					</div>
					<div class="col-md-6 col-sm-6 footer-sociallink">
					   <ul class="social-links">
							<?php for($i=1; $i<=5; $i++) : ?>
                            <?php if(get_theme_mod('TopHeaderSocialIconLink'.$i)!='' && get_theme_mod('TopHeaderSocialIcon'.$i)!=''): ?>
                               <li><a href="<?php echo esc_url(get_theme_mod('TopHeaderSocialIconLink'.$i)); ?>" class="icon" title="" target="_blank">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('TopHeaderSocialIcon'.$i)); ?>"></i>
                                </a></li>
                            <?php endif; ?>
                        <?php endfor; ?>	
                        </ul>
					</div>
					
				</div>  
			</div>
		</div>
	</div>
</footer>
<div class="fr-floating-button order" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="top" title="Order Us">
<i class="fas fa-shopping-basket"></i>
</div>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row fr-form-step">
              <div class="col-sm-6">
                <h1 class="active">1</h1>
                <hr class="active">
              </div>
              <div class="col-sm-6">
              <h1>2</h1>
                <hr>
              </div>         
          </div>
          <div class="fr_section5 row">
            <h4 class="pack">Our Package Deals</h4>
              <div class="col-lg-4 wow bounceIn" data-wow-delay="0.25s"">
              <div class="col-sm-12 f_red f_w">
                  <h4>Rs 3,000</h4>
                  <p>Per Month</p>
                  <h2>Service Upto Rs 2,000</h2>
                  <h3>1 Routine Checkup</h3>
                </div>
              </div>

              <div class="col-lg-4 wow bounceIn" data-wow-delay="0.5s"">
              <div class="col-sm-12 f_green f_w">
                  <h4>Rs 5,000</h4>
                  <p>Per Month</p>
                  <h2>Service Upto Rs 2,000</h2>
                  <h3>1 Routine Checkup</h3>
                </div>
              </div>
              <div class="col-lg-4 wow bounceIn" data-wow-delay="0.5s"">
              <div class="col-sm-12 f_purple f_w">
                  <h4>Rs 7,000</h4>
                  <p>Per Month</p>
                  <h2>Service Upto Rs 2,000</h2>
                  <h3>1 Routine Checkup</h3>
                </div>
              </div>
          </div>
          <div class="fr-submit-everest">
            <button type="submit" id="fr-proceed" class="everest-forms-submit-button button evf-submit">Proceed</button> 
          </div>
        <?php echo do_shortcode('[everest_form id="50"]'); ?>
        </div>
        
      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
new WOW({
    mobile: false,
}).init();
</script>
<?php wp_footer(); ?>
</body>
</html>


