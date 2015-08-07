<section class="author_box">
<header><p>درباره ی نویسنده ی این مطلب : <?php the_author(); ?></p></header>
<article>
 <div class="author_avatar"><?php echo (get_avatar(get_the_author_id(), 100)) ; ?></div>
  <div class="author_desc"><?php the_author_description(); ?></div>
</article>
</section>