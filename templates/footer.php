<footer class="content-info container" role="contentinfo">
  <div class="footer-inner">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All rights reserved | Handcrafted Site with Love by <a href="http://hydrogene.hu">Hydrogene</a>  </p>
  </div>
</footer>

<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=171677096215391";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="http://szabogabi.tk:35729/livereload.js"></script>