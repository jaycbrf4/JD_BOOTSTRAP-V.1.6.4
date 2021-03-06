<?php
/* 
*
* Template Name: Standard Full Width Page
*
*/
?>

<?php get_header(); ?>

<div id="main" class="clearfix" role="main">
    <div id="content">

    <!-- Hero Image -->
     <div id="hero-image">
       <h1 class="pagetitle">
        <!-- Custom Field for Page Heading --><?php echo get_post_meta($post->ID, 'Page Name', true); ?>
       </h1><!-- /.pagetitle -->
      </div>
    <!-- /#hero-image --> 

    <!-- loop the loop -->       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
      <section class="post_content">
        <?php the_content(); ?>          
      </section> <!-- end article section -->
    </article> <!-- end article -->

      <?php endwhile; ?>  
      <?php else : ?>

        <article id="post-not-found">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <header>
                  <h1><?php _e("Not Found", "JD_BOOTSTRAP"); ?></h1>
                </header>
                <section class="post_content">
                  <p><?php _e("Sorry, but the requested resource was not found on this site.", "JD_BOOTSTRAP"); ?></p>
                </section>
              </div><!-- /.col-sm-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->          
        </article>

      <?php endif; ?>

  </div><!-- /. content -->
</div><!--/main-->
<?php get_footer(); ?>
