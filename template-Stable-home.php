<?php /* Template Name: Stable Home*/ get_header(); ?>

<div class="view full-page-intro">


  <div class="view full-page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/pizza_sunshin2.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">

  </div>
  <!-- Mask & flexbox options-->

  <div class="mask d-flex pt-5">

    <!-- Content -->
    <div class="container">

      <!--Grid row-->
      <div class="col-10 offset-1 col-lg-8 offset-lg-2">
  
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stable_logo.svg" alt="Stable Logo Logo">
        <h1 class="header-text text-center">Southampton</h1>
        
        </div>
      <!--Grid row-->

      </div>
    <!-- Content -->

    

    </div>
  <!-- Mask & flexbox options-->

</div>
  <!-- Full Page Intro --> 




  <main class="container">
    <section class="pt-5 pb-5">
      <div class="row">
        <h1 class="text-center display-3 pb-5">Cronut</h1>
        <h3 class="text-center col-lg-8 offset-lg-2">Viral meggings plaid, live-edge vice synth Tumblr. Forage iPhone locavore vaporware venmo gastropub cray VHS raw denim swag vexillologist ugh tousled waistcoat literally.</h3>
<div class="row pt-5 pb-5">
  <div class="col-6 text-right"><a href="lets-talk"><button type="button" class="btn btn-primary waves-effect waves-light">BOOK</button></a></div>
  <div class="col-6 text-left"><a href="lets-talk"><button type="button" class="btn btn-primary waves-effect waves-light">MENU</button></a></div>

</div>
      </div>
     </section>



     <div class="entry-content container col-12">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-bootstrap-starter-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


<!--Grid row-->
<section class="alt-col-grid mt-5 mb-5">
<?php
// The Query
$the_query = new WP_Query( 'cat=1&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
  
        <!--Featured image-->
   
       
        <a href="<?php echo get_permalink() ?>" class="">
  <div class="container">
    <div class="row mt-5 mb-5">
        <div class="menu-image-box square col-12 col-lg-6" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
    
      </div>
       
      <div class="menu-content-box grit square col-12 col-lg-6 d-flex align-items-center">
	<header class="entry-header" style="width:100%;">

  <h2 class="m-5">
 <?php the_title(); ?>
        </h2>
        <div class="m-5"><?php the_excerpt(); ?></div>

        
	</header><!-- .entry-header -->




      




      </div>
     
      </div>
  <!--Grid row-->
  </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>

</a>
</section><!-- #main -->




  

	</main><!-- #main -->

<?php

get_footer();
