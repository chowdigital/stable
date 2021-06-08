<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<div class="view full-page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/ob1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="col-6 offset-3 col-lg-4 offset-lg-4  z-depth-5">
 
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/OB_logo.svg" alt="">
  
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 






<main class="container">


  <div class="pt-6 pb-6 z-depth-3">
    <div class="row">
      <div class="menu-image-box col-12 col-lg-6 z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="menu-content-box col-12 col-lg-6 d-flex flex-column justify-content-center">

      <header class="entry-header">
	          	<?php the_title( '<h2>', '</h2>' ); ?>
	    </header><!-- .entry-header -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <a href="at-home"><button type="button" class="btn btn-primary waves-effect waves-light">find out more</button></a>

      </div>
    </div>
  </div>

  
</main><!-- #main -->

<div class="container">
  <div class="text-box col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
    <h4>Wine and cheese bar</h4>
    <h3>Stumptown affogato thundercats, godard four loko vape cardigan. </h3>
  </div>
</div>

<main id="primary" class="site-main container  pt-6 pb-6">

    <section class="z-depth-3">
      
  <div class="blog-content-box col-12">
 
  <div class="d-flex justify-content-center">
 
<header class="entry-header">
  <h2 class="entry-title">What's happening at Old Brompton</h2>	</header><!-- .entry-header -->

</div>
<div class="more-box text-center pb-5">
    <a href="events"><button type="button" class="btn btn-primary">view all our upcoming events</button></a>
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
            <h2 class="mb-3 font-weight-bold">
                <strong><?php the_title(); ?></strong>
            </h2>
          
              <p class="grey-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="mt-auto">
              <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">find out More </button></a>
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
    
    </div>
    </section>
</main>

<?php get_footer(); ?>