<?php
$appointment_options=theme_setup_data();
$news_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($news_setting['home_blog_enabled'] == 0 ) { ?>
<div class="blog-section">
	<div class="container">
	
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading-title">
					<h1><?php echo $news_setting['blog_heading']; ?></h1>
					<p><?php echo $news_setting['blog_description']; ?></p>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		
		<div class="row">
		<?php
		
		$cat_id = array();
		$cat_id = $news_setting['blog_selected_category_id'];
		$no_of_post = $news_setting['post_display_count'];	

		 $args = array( 'post_type' => 'post','ignore_sticky_posts' => 1 , 'category__in' => $cat_id, 'posts_per_page' => $no_of_post);
		 $news_query = new WP_Query($args);	
		 

		 $i=1;
			while($news_query->have_posts() ) : $news_query->the_post();				
			?>
			
			<?php 
			  if($i==2)
			  { 
			     echo '<div class="clearfix"></div>';
				 $i=0;
			  }$i++;
			  wp_reset_postdata();
			endwhile;  ?>
		</div>
	</div>
<?php } ?>
</div>