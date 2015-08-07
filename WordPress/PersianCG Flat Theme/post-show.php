   <?php if(have_posts() ): ?>
  <?php while(have_posts()) : the_post(); ?>
  <section class="post">
    <header> <a href="<?php the_permalink(); ?>">
      <p class="title"><?php the_author(); ?> در <?php the_title();?></p>
      </a>
      <p class="post-time"> <?php the_time('d / m / y') ?>  <!--<?php echo time_ago(); ?>--></p>
    </header>
    <article>	<?php the_post_thumbnail(); ?>
      <p> <?php the_excerpt(); ?>
      <br>
      <br>
      <a href="<?php the_permalink(); ?>" class="link">
      <div class="more">ادامه</div>
      </a> 
      <?php the_tags('<div class="tags" style="display:none;"><b>برچسب‌ها :</b> ', ', ', ' </div>'); ?>
      </article>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
  