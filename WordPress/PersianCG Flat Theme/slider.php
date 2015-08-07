<section class="slider-box">

<!-- <section class="slider">
  <div class="slide cur" style="background:url(<?php echo $aks1; ?>) no-repeat;">
    <p><?php echo $jomle1; ?></p>
  </div>
  <div class="slide" style="background:url(<?php echo $aks2; ?>) no-repeat;">
    <p><?php echo $jomle2 ; ?></p>
  </div>
  <div class="slide" style="background:url(<?php echo $aks3; ?>) no-repeat;">
    <p><?php echo $jomle3 ; ?></p>
  </div>
  <div class="slide" style="background:url(<?php echo $aks4; ?>) no-repeat;">
    <p><?php echo $jomle4 ; ?></p>
  </div>
</section>
-->

<?php
$jomle1 = get_option('WPBB_jomle1');
$aks1 = get_option('WPBB_img1');

$jomle2 = get_option('WPBB_jomle2');
$aks2 = get_option('WPBB_img2');

$jomle3 = get_option('WPBB_jomle3');
$aks3 = get_option('WPBB_img3');

$jomle4 = get_option('WPBB_jomle4');
$aks4 = get_option('WPBB_img4');
?>
<div id="slidercode" class="thethe_image_slider white-rounded" >
  <div class="ws_bullets">
    <div><a title="" class="ws_selbull">imag1</a><a title="" class="">imag2</a><a title="" class="">imag3</a><a title="" class="">imag4</a></div>
  </div>
  <div id="animate">
    <div id="imag1" ><img src="<?php echo $aks1; ?>" alt="">
    <a href="http://forum.persiancg.ir/Thread-%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%DB%8C%D9%88%D9%86%DB%8C%D8%AA%DB%8C-%D8%B3%D8%A7%D8%AE%D8%AA-%D8%A8%D8%A7%D8%B2%DB%8C-FPS-%D9%82%D8%B3%D9%85%D8%AA-1?pid=4915#pid4915"  target="_blank" ><span class="ws-title"><?php echo $jomle1; ?></span></a></div>
    <div id="imag2" ><img src="<?php echo $aks2; ?>" alt=""><a href="#"  target="_blank" ><span class="ws-title"><?php echo $jomle2; ?> </span></a></div>
    <div id="imag3" ><img src="<?php echo $aks3; ?>" alt=""><a href="#"  target="_blank" ><span class="ws-title"><?php echo $jomle3; ?></span></a></div>
    <div id="imag4" ><img src="<?php echo $aks4; ?>" alt=""><a href="#"  target="_blank" ><span class="ws-title"><?php echo $jomle4; ?></span></a></div>
  </div>
  <div class="thethe-image-slider-controls-prev thethe-image-slider-controls "   ></div>
  <div class="thethe-image-slider-controls-pause thethe-image-slider-controls thethe-pause"  ></div>
  <div class="thethe-image-slider-controls-next thethe-image-slider-controls "  ></div>
</div>
