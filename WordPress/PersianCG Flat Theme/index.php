<?php get_header(); ?>

<!-- START Slider & Boxes -->

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

<!-- START CONTENT -->
<div class="center">
  <section class="content">
    <?php include 'post-show.php'; ?>
      <div class="pagination">
    <?php /* wp_pagination(); */  kriesi_pagination();  ?>
  </div>
  </section>

  <?php get_sidebar(); ?>
</div>
<!-- END CONTENT --> 

<!-- Footer -->

<?php get_footer(); ?>
</body></html>