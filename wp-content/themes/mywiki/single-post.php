<?php
/*
 * Template Name: Article
 * Template Post Type: post
 */
   
 get_header();
 ?>

<div class="content">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<br>
				<header>
				  <div class="page-catheader cat-catheader">
					<h1 class="blog-post-title">
					  <?php the_title(); ?>
					</h1>
					<?php echo get_the_date(); ?>
				  </div>
				</header> 
				<br>
                <div class="">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- post single start -->
                            <div class="post-content-single blog-post">
								<?php
				                while ( have_posts() ) :
				                    the_post();
									
									the_content();

				                endwhile; // End of the loop.
				                ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php
get_footer();
