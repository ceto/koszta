<footer class="content-info container" role="contentinfo">
  <div class="sidebar-wrap">
    <aside class="sidebar clearfix <?php echo roots_sidebar_class(); ?>" role="complementary">
      <?php include roots_sidebar_path(); ?>
    </aside>
  </div>
  <div class="footer-inner">
      <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1389733414622982";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
