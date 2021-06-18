<?php /* Template Name: Menu*/ get_header(); ?>




<main class="container pt-6 pb-6">
  <h2 class="display-1 col-12 col-lg-6">What's on</h2>
  <h2 class="display-1 col-12 col-lg-6 offset-lg-1">the menu?</h2>

  <div class="row pt-6 pb-6 gx-5">
  <div class="col-lg-3">
    <h2 class="pt-6 pb-3">Sharers</h2>
    <h4> Garlic Bread 4.5 (vg)</h4>
    <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
    <h4> Garlic Bread 4.5 (vg)</h4>
    <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
    <h2 class="pt-6 pb-3">Salads</h2>
    <h4> Garlic Bread 4.5 (vg)</h4>
    <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
    <h4> Garlic Bread 4.5 (vg)</h4>
    <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
  </div>
  <div class="col-lg-8 offset-lg-1">
    <h2 class="pt-6 pb-3">Sourdough Pizzas</h2>
    <div class="row">
      <div class="col-lg-5">
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
      </div> 
      <div class="col-lg-5 offset-lg-1">
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
        <h4> Garlic Bread 4.5 (vg)</h4>
        <p><i>freshly baked sourdough, garlic butter, fresh parsley</i></p>
      </div> 
    </div>
  </div>

  </row>
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


<?php
// The Query
$the_query = new WP_Query( 'cat=6&posts_per_page=1' );
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

</section><!-- #main -->
</main><!-- #main -->
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>