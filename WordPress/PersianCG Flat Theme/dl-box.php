<style>
.cntrl{margin-right:-130px; margin-top:20px;}
.btn.ora{margin-right:-400px; margin-top:20px;}
.btn.blue { background-color: dodgerblue; margin-right:-380px; margin-top:20px;}

.btn.blue:hover { background-color: #005db7; }

.btn.green { background-color: limegreen; }

.btn.green:hover { background-color: #1e7b1e; }

.btn.red { background-color: #E74C3C; }
.btn.red:hover { background-color: #DB4334; }

.btn.yell{ background-color: #F1C40F; }
.btn.yell:hover{ background-color: #E2B607; }

.btn {
  display: inline-block;
  padding: 0 20px 0 70px;
  background-color: coral;
  color: white;
  text-decoration: none;
  position: relative;
  height: 50px;
  line-height: 50px;
  overflow: hidden;
  border-radius: 3px;
  transition: background-color 250ms linear;
}

.btn:hover { background-color: #e93f00; }

.btn .num {
  background-color: rgba(0, 0, 0, 0.075);
  width: 50px;
  position: absolute;
  left: 0px;
  top: 0px;
}

.btn .fa {
  line-height: 50px;
  margin: 0 0 0 20px;
  width: 50px;
  background-color: rgba(255, 255, 255, 0.2);
  position: absolute;
  right: -50px;
  top: 0px;
  font-size:24px;
}
.dl-box{
	border-top:2px solid #D0CCC3;
	border-bottom:4px solid #D0CCC3;
	border-right:2px solid #D0CCC3;
	border-left:2px solid #D0CCC3;
	margin-top:20px;
	text-align:center;
	background:#ece8e0;	
	
}

</style>
<!-- Download Box Variables --->
<?php $dl1 = get_post_meta($post->ID, 'dl1', true); ?>
<?php $dl2 = get_post_meta($post->ID, 'dl2', true); ?>
<?php $sou = get_post_meta($post->ID, 'sou', true); ?>
<?php $topic = get_post_meta($post->ID, 'topic', true); ?>
<?php $prev = get_post_meta($post->ID, 'prev', true); ?>

<?php
if(empty($sou) && empty($prev)){
echo '<style>.d{min-height: 250px;}</style>';
}
?>
<!-- Download Box Variables --->
<section class="dl-box d">
<?php if(isset($dl1) && !empty($dl1)) : ?>
<a class="btn ora a" href="<?php echo $dl1; ?>"><span class="num">دارد</span>دانلود با لینک مستقیم <i class="fa icon-cloud-download i"></i></a> <br>
<?php endif; ?>

<?php if(isset($dl2) && !empty($dl2)) : ?>
<a class="btn blue a" href="<?php echo $dl2; ?>"><span class="num">دارد</span>دانلود با لینک غیر مستقیم<i class="fa icon-download i"></i></a> <br>
<?php endif; ?>
<div class="cntrl">
<?php if(isset($sou) && !empty($sou)) : ?>
<a class="btn green a" href="<?php echo $sou; ?>"><span class="num">دارد</span>دانلود سورس<i class="fa icon-paperclip i"></i></a>
<?php endif; ?>


<?php if(isset($topic) && !empty($topic)) : ?>
<a style="float: right; padding-left: 70px; padding-right: 20px; margin-right: 148px;" class="btn red a" href="<?php echo $topic; ?>"><span class="num">دارد</span>لینک انجمن<i class="fa icon-forum i"></i></a>
<?php endif; ?>

<?php if(isset($prev) && !empty($prev)) : ?>
<a class="btn yell a" href="<?php echo $prev; ?>"><span class="num">دارد</span>پیش نمایش<i class="fa icon-tv i"></i></a>
<?php endif; ?>
</div>

 
<script>

$( document ).ready(function() {
  
  $('.a').hover(function(){
      $(this).stop().animate({'padding-left': '20px','padding-right':'70px'},'fast');
      $(this).find('.num').stop().animate({'left': '-50px'},'fast');
      $(this).find('.fa').stop().animate({'right': '0px'},'fast');
    }, function(){
      $(this).stop().animate({'padding-left':'70px','padding-right':'20px'},'fast');
      $(this).find('.num').stop().animate({'left': '0px'},'fast');
      $(this).find('.fa').stop().animate({'right': '-50px'},'fast');
  });
  
});
</script>
</section>
<div class="dl-box" style="padding:10px;">پسورد فایل در صورت نیاز : www.persiancg.ir یا persiancg.ir</div>