<?php
/* 
*
* Template Name: Static Front Page
*
* This template is for a one page scrolling site.
* Make sure to change page slug in the custom loops to match pages in backend.
*/
?>

<?php get_header(); ?>
<div id="main" class="clearfix" role="main">
  <div id="home-content">
        <!-- begin sections where each section is a page of content -->
        <div class="section" id="first">
          <div class="container">
            <div class="row home1">
        <?php
          $query = new WP_query ('pagename=home'); // page slug adds pages to loop
            // The LooP
            if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                <section class="post_content">
              <?php the_content(); ?>
                </section> <!-- end article section -->
              </article><!-- / article-->  
            <?php 
            }
            }
          wp_reset_postdata();
        ?>
            </div><!--row-->
          </div><!--/container-->
        </div><!--/.section-->

  <div class="section sep1">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
           <p class="h1 wow fadeIn" data-wow-delay="0.5s">4th generation family farm located in New York’s Black Dirt Region</p><!-- /.h1 -->
        </div><!-- /.col-sm-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.section sep1 -->

  <div class="section" id="second">
    <div class="container">
      <div class="row">
          <?php
            $query = new WP_query ('pagename=home-social'); // page name adds pages to loop
              // The LooP
              if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post(); ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                  <section class="post_content">
                <?php the_content(); ?>
                  </section> <!-- end article section -->
                </article><!-- / article-->  
              <?php 
              }
              }
            wp_reset_postdata();
          ?>
      </div><!--row-->
    </div><!--/container-->
  </div><!--/.section-->

    <div class="section" id="third">
      <div class="container">
        <div class="row">
            <?php
              $query = new WP_query ('pagename=home-gallery'); // page name adds pages to loop
                // The LooP
                if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                    <section class="post_content">
                  <?php the_content(); ?>
                    </section> <!-- end article section -->
                  </article><!-- / article-->  
                <?php 
                }
                }
              wp_reset_postdata();
            ?>
        </div><!--row-->
      </div><!--/container-->
    </div><!--/.section-->

    <div class="section" id="fourth">
      <div class="container">
        <div class="row">
            <?php
              $query = new WP_query ('pagename=home-vfm'); // page name adds pages to loop
                // The LooP
                if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                    <section class="post_content">
                  <?php the_content(); ?>
                    </section> <!-- end article section -->
                  </article><!-- / article-->  
                <?php 
                }
                }
              wp_reset_postdata();
            ?>
        </div><!--row-->
      </div><!--/container-->
    </div><!--/.section-->
        
 </div><!-- /.content -->
</div><!--/main-->
<?php get_footer(); ?>
