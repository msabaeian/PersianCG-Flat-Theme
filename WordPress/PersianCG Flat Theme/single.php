<?php get_header(); ?>
<link href="<?php echo get_template_directory_uri() ;?>/jquerysctipttop.css" rel="stylesheet" type="text/css" />
<!-- START Slider & Boxes -->
<style>
li .bypostauthor, li.bypostauthor a {background:#C1392B; color: #fff;}
</style>
<div class="center">
  <?php include 'slider.php' ;?>
  <section class="boxes"> <a href="http://www.persiancg.ir/?page_id=25">
    <div class="req">
      <div></div>
      <h4 style="padding-top:12px;">درخواست آموزش</h4>
      <h5>ضبط در کمترین زمان</h5>
    </div>
    </a> <a href="#">
    <div class="getfree">
      <div></div>
      <h4 style="padding-top:12px;">دریافت رایگان</h4>
      <br>
      <h5>آموزش ها را رایگان دریافت کنید</h5>
    </div>
    </a> <a href="http://www.persiancg.ir/?page_id=2054">
    <div class="teach">
      <div></div>
      <h4 style="padding-top:12px;">تدریس در سایت</h4>
      <h5>آموزش های خود را شروع کنید</h5>
    </div>
    </a> </section>
  </section>
</div>
<!-- END Slider & Boxes -->
<div class="center">
  <section class="content">
    <?php if(have_posts() ): ?>
    <?php while(have_posts()) : the_post(); ?>
    <section class="post">
      <header> <a href="<?php the_permalink(); ?>">
        <p class="title">
          <?php the_author(); ?>
          در
          <?php the_title();?>
        </p>
        </a>
        <p align="left" style="line-height:46px; color:#fff; font-size:15px; margin-left:5px;">
          <?php the_time('d / m / y') ?>
        </p>
      </header>
      <article>
        <?php the_post_thumbnail(); ?>
        <p>
          <?php the_content(); ?>
        </p>
        <br>
        <br>
      </article>
      <?php the_tags('<div class="tags" style="display:none;"><b>برچسب‌ها :</b> ', ', ', ' </div>'); ?>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php include 'dl-box.php';?>
     <?php include 'authorbox.php'; ?>
    <?php include 'sharebox.php'; ?>
    <?php comments_template(); ?>
  </section>
  <?php get_sidebar(); ?>
</div>
<!-- END CONTENT --> 

<!-- Footer -->

<?php get_footer(); ?>
</body></html>