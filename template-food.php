<?php /* Template Name: Food*/ get_header(); ?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>





<!--Grid row-->

<?php
// The Query
$the_query = new WP_Query( 'cat=5&posts_per_page=1' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
  
        <!--Featured image-->
   
        <section class="container-fluid">
        <?php the_content(); ?>

    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>

</a>
</section><!-- #main -->
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>