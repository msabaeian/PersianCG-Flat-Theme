<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/commnet-style.css" >
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slider.css" >

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<?php 
if(isset($_COOKIE['color'])){
	$cookie = $_COOKIE['color'];
	if($cookie == 'red'){
	}else if($cookie == 'blue'){
		echo'<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/colors/Blue.css" >';
	}else if($cookie =='gold'){
		echo'<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/colors/Gold.css" >';
	}else if($cookie == 'green'){
		echo'<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/colors/Green.css" >';}
}
?>
<title><?php bloginfo('name'); ?></title>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>


<script>
/*<![CDATA[*/
var wwidth = 650;
var hheight = 350;
var ttime = 5000;
var trantime = 1500;
/*]]>*/

$(window).load(function() {
	$('.loading').fadeOut('normal');
});
</script>
<?php wp_head();?>
</head>

<body>
<div class="loading">
			<img width="200" height="200" alt="لودینگ سایت" src="<?php echo get_template_directory_uri(); ?>/images/loading.svg">
		</div>
        

	<!-- START NAVIGATION -->
	<nav>
    	<div class="center">
            <ul>
                <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'center' =>'nav', 'menu_class' =>'topnav' ) ); ?>
            </ul>
            
           	<section class="logo"><h3>آموزش تخصصی کامپیوتر | </h3>  <h2 style="font-size: 30px;">  پرشین سی جی</h2></section>
		</div>
    </nav>
    <!-- END NAVIGATION -->

    <section class="ChooseColor">
        <a href="<?php echo get_template_directory_uri(); ?>/setColor.php?color=blue"><div class="ccBlue"></div></a>
        <a href="<?php echo get_template_directory_uri(); ?>/setColor.php?color=gold"><div class="ccGold"></div></a>
        <a href="<?php echo get_template_directory_uri(); ?>/setColor.php?color=green"><div class="ccGreen"></div></a>
        <a href="<?php echo get_template_directory_uri(); ?>/setColor.php?color=red"><div class="ccRed"></div></a>
    </section>
    
    <section class="codeOff">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Offsale.png" width="50" alt="تخفیف"><p>کد تخفیف فعال: </p><h6>Nouroz94</h6><p> مقدار 40% تا 7 فروردین</p>
    </section>