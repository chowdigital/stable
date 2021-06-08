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
    <div class="col-6 offset-3 col-lg-4 offset-lg-8 z-depth-5">
 
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
          <a href="mailto:info@oldbrompton.co.uk"><button type="button" class="btn btn-primary waves-effect waves-light">Make a reservation</button></a>

      </div>
    </div>
  </div>

  
</main><!-- #main -->



<?php get_footer(); ?>