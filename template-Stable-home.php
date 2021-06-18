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
        <h1 class="text-center display-3 pb-5">Welcome to the Southampton Stablet</h1>
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
<section class="pb-5 pt-5">
       <div class="row">
         <div class="col-12 col-lg-7">
            <h2 class="display-1 col-12 ">What's on</h2>
            <h2 class="display-1 col-12 col-lg-10 offset-lg-2">the menu?</h2>
            
            <img class="image-fluid col-12 col-lg-6 offset-lg-5" src="http://localhost:8888/stable/wp-content/uploads/2021/06/CD1_9289-scaled-e1623252643119.jpg" alt="">
          </div> 
          <div class="menu-links col-12 col-lg-5 pt-5">
            <a href="#"><h4>Food</h4></a>
            <a href="#"><h4>Drink</h4></a>
            <a href="#"><h4>Kids</h4></a>
            <a href="#"><h4>Bottomless Brunch</h4></a>
          </div>
  </div>
     </section>
<!-- BOOK -->
<section class="pb-5 pt-5">
  <div class="col-md-6 ">
    <script src="//partners.designmynight.com/pf/js?venue_id=5979c969016f8370d1257809" id="dmn-js"></script>
  </div>

  <style>

.dmn-form {
    border: 5px solid #1a2a72;
    box-sizing: content-box;
    color: #1a2a72;
    font-family: arboria, sans-serif;
    font-weight: 400;
    font-size: 1em;
    padding: 7px;
    position: relative;
    text-shadow: none;
    width: 100%;
    padding: 6em;
}
.dmn-form h1{
    color: #1a2a72;
    font-family: kansasnew, serif;
    font-weight: 700;
    font-style: normal;
    text-align: left;
    font-size: 2em;
    line-height: 1.2em;
}
.dmn-form .btn-primary{
  background-image: none;
  background-color: #1a2a72 !important;
  color: #fff;
  border: none;
  font-size: 1em;
  line-height: 1.5em
}
.dmn-form .btn-primary:hover{
  color: #ff7acf !important;
  -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);
  box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);
}
.dmn-form select, .dmn-form input, #dmn-date{
    width: 100%;
    background-color: #C4EAE3;
    border: none;
}
.dmn-form label {
  font-size: 1em;
  color: #1a2a72;
  font-family: arboria, sans-serif;
    font-weight: 400;
    font-style: normal;
}
.dmn-form .powered-by {
  display: none;
}

    </style>
</section>

	</main><!-- #main -->

<?php

get_footer();
