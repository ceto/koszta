<?php global $actualurl; ?>
<section class="entry-share">
  <h3>Segítsd munkámat<small>Oszd meg barátaiddal</small></h3>
  <ul class="clearfix">
    <li>
      <a onClick="return fbs_click(400, 300)" terget="_blank" class="jax-popup" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actualurl; ?>">
        <span class="ion-social-facebook fb"></span>
      </a>
    </li>
    <li class="likes">
      <a data-toggle="collapse" data-target="#responds">
        <span class="ion-thumbsup"></span>
      </a>
    </li>
    <li><a href="#"><span class="ion-social-googleplus gplus"></span></a></li>

  </ul>
</section>