<!-- FOOTER -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="clearfix" id="inner-footer">
          <a class="scrollup"></a>         
          <div id="widget-footer" class="clearfix">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
            <?php endif; ?>   
          </div><!--/#widget-footer-->
          <div id="social-row" class="row">
            <hr>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer5') ) : ?>
            <?php endif; ?>
          </div><!-- /#social-row -->
          <div id="tags" >
            <div id="copyright" class="col-sm-6">
            <!-- this is the option from the "Theme Options"  It will display the copyright information ONLY if it is present in the Theme Options-->
              <?php $copyright_options = (array) get_option('copyright_options'); ?>
              <?php $name = $copyright_options['name']; ?>
              <?php if (0 < strlen( trim( $name ) ) ) { ?>
              <p>Copyright &copy;  <?php echo date('Y'); ?> 
              <?php echo $name; ?></p>
              <?php } //end if  ?>
            </div><!-- /#copyright -->

            <div id="credit" class="col-sm-6 text-right">
              <p><i class="fa fa-tv"></i> Site Designed and Built by: <a href="http://hudsonvalleywebdesign.net" target="_blank">Hudson Valley Web Design</a></p>
            </div>  <!--/#credit-->  
          </div><!--/.tags-->
        </div> <!--/#inner-footer-->
      </div><!--/.col-->
    </div> <!-- .row -->              
  </div><!-- /.container -->
<?php wp_footer(); ?>
</footer>
  <?php $options = get_option( 'GA_options' ); ?>
  <?php $ID = $options['wp_textbox']; ?>
  <?php if (0 < strlen( trim( $ID ) ) ) { ?>
  <!-- Google Analytics code here -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '<?php echo $options['wp_textbox']; ?>', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- end Analytics -->
  <?php } //end if  ?>

</body>
</html>

