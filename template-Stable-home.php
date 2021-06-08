<?php /* Template Name: Stable Home*/ get_header(); ?>


<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">
<img id="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/stable_logo.svg" alt="Stable Logo Logo">

  </div>
</div>
<main id="primary" class="site-main container  pt-6 pb-6">
 

<div class="row col-12pt-5 pb-4">
  <h2 class="text-center display-1 pb-5">Cronut single-origin coffee</h2>
  <h3 class="text-center col-lg-8 offset-lg-2 pb-4">Viral meggings plaid, live-edge vice synth Tumblr. Forage iPhone locavore vaporware venmo gastropub cray VHS raw denim swag vexillologist ugh tousled waistcoat literally. </h3>
  <div class="row">
    <div class="col-6 text-right"><a href="../lets-talk/"><button type="button" class="btn btn-primary">Let's Talk</button></a></div>
    <div class="col-6 text-left"><a href="../lets-talk/"><button type="button" class="btn btn-primary">Let's Talk</button></a></div>
  </div>
  

</div>
  





     
 
  <!--Grid row-->
  <div class="row wow fadeIn">
    <?php
    // The Query
    $the_query = new WP_Query( 'cat=1&posts_per_page=3' );
    //posts_per_page=5'


    // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); 
            ?>		


        <!--Grid column-->
        <div class="col-lg-4 col-md-4 col-sm-12 mb-4 d-flex flex-column">
     

            <!--Featured image-->
            <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 thumb-wrapper">

              <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
          
                <a href="<?php echo get_permalink() ?>">
                    <div class="mask"></div>
                </a>
            </div>

            <div>
            <h4 class="mb-3 font-weight-bold">
                <strong><?php the_title(); ?></strong>
            </h4>
          
          
            <p class="grey-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="mt-auto">
            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-light">Find out More </button></a>
            </div>
        </div>
        <!--Grid column-->

      <?php
      
      $counter++;
      } // end while
      } // end if
      wp_reset_postdata(); 
      ?>
     </div>
    <!--Grid row-->
      <!-- END -- BLog Posts  -->






  

	</main><!-- #main -->

<?php

get_footer();
