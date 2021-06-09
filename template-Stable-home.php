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
<!-- ** START ** what's On Section -->
<div class="whats-on-boxes">
  <section class="mb-5 mt-5">


              <?php
          $is_on = get_field('on_off');
          if( $is_on ): ?>
              <div class="row home-box-row">
              <div class="col-lg-7 home-box-image z-depth-1" style="background-image: url('<?php the_field('box1-image'); ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                  
                  </div>
                <div class="col-lg-4 box-1 p-5 d-flex flex-column justify-content-center">
                      <h3><?php the_field('Box1_Title'); ?></h3>
                      <p><?php the_field('box_1_copy'); ?></p>
                      <a href="<?php the_field('box_1_link'); ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Find out more</button></a>
                      </div>
                
              
              </div>
            <?php endif; ?>
          
  </section>
  <section class="mb-5 mt-5">


              <?php
          $is_on = get_field('on_off');
          if( $is_on ): ?>
              <div class="row home-box-row">
              <div class="col-lg-7 home-box-image z-depth-1" style="background-image: url('<?php the_field('box1-image'); ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                  
                  </div>
                <div class="col-lg-4 box-2 p-5 d-flex flex-column justify-content-center">
                      <h3><?php the_field('Box1_Title'); ?></h3>
                      <p><?php the_field('box_1_copy'); ?></p>
                      <a href="<?php the_field('box_1_link'); ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Find out more</button></a>
                      </div>
                
               
              </div>
            <?php endif; ?>
          
  </section>
  <section class="mb-5 mt-5">


              <?php
          $is_on = get_field('on_off');
          if( $is_on ): ?>
              <div class="row home-box-row">
              <div class="col-lg-7 home-box-image z-depth-1" style="background-image: url('<?php the_field('box1-image'); ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                  
                  </div>
                <div class="col-lg-4  box-3 p-5 d-flex flex-column justify-content-center">
                      <h3><?php the_field('Box1_Title'); ?></h3>
                      <p><?php the_field('box_1_copy'); ?></p>
                      <a href="<?php the_field('box_1_link'); ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Find out more</button></a>
                      </div>
                
               
              </div>
            <?php endif; ?>
          
  </section>
</div>
<!-- ** END ** what's On Section -->

	</main><!-- #main -->

<?php

get_footer();
