<?php

/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "site-content" div.

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */



?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="mainHeader">
  <div class="headerTop">
    <div class="container">
      <ul>
        <li><a href="tel:+512 213 5893"><i class="fa fa-volume-control-phone"></i> +512 213 5893</a></li>
        <li><a href="mailto:info.youhypnosis@gmail.com"><i class="fa fa-envelope-open-o"></i> info.youhypnosis@gmail.com</a></li>
      </ul>
    </div>
  </div>
  <div class="headerBottom">
    <div class="container"> <a href="http://localhost:8888/youhypnosis/" class="logo"> <img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg"> </a>
      <div class="mobileMenuToggle"> <span class="bar bar1"></span> <span class="bar bar2"></span> <span class="bar bar3"></span> </div>
      <nav id="mainMenu">
        <ul>
          <li class="menu-item"> <a href="http://localhost:8888/youhypnosis/" class="active"> Home </a> </li>
          <li class="submainMenu"> <a href="/about-us"> About us <i class="fa fa-angle-down d-none d-lg-block d-md-block" aria-hidden="true"></i> </a> <i class="fa fa-angle-right mobile-arrow d-lg-none d-md-none" aria-hidden="true"></i>
            <ul class="submenu">
			<li class="menu-item"><a href="http://localhost:8888/youhypnosis/about-us/meet-your-hypnotherapist/ "> Meet Your Hypnotherapist </a></li>
              <li class="menu-item"><a href="/youhypnosis/testimonial"> Testimonials </a></li>
              <li class="menu-item"><a href="/youhypnosis/guest-speakers"> Guest Speakers </a></li>
            </ul>
          </li>
          <li class="submainMenu"> <a href="/youhypnosis/weight-loss"> Services <i class="fa fa-angle-down d-none d-lg-block d-md-block" aria-hidden="true"></i> </a> <i class="fa fa-angle-right mobile-arrow d-lg-none d-md-none" aria-hidden="true"></i>
            <ul class="submenu">
              <li class="menu-item"> <a href="/youhypnosis/weight-loss"> Weight Loss</a> </li>
              <li class="menu-item"> <a href="/youhypnosis/smoking-cessation"> Smoking Cessation</a> </li>
              <li class="menu-item"> <a href="/youhypnosis/stress-anxiety"> Stress &amp; Anxiety</a> </li>
              <li class="menu-item"> <a href="/youhypnosis/healing-from-a-breakup"> Healing from a Breakup</a> </li>
              <li class="menu-item"> <a href="/youhypnosis/personal-branding"> Personal Branding</a> </li>
              <li class="menu-item"> <a href="/youhypnosis/past-life-regression"> Past Life Regression</a> </li>
            </ul>
          </li>
          <li class="menu-item"> <a href="/youhypnosis/blog"> Blog </a> </li>
          <li class="menu-item"> <a href="/contact-us"> Contact Us </a> </li>
        </ul>
      </nav>
    </div>
  </div>
  
  <!-- <div class="bot-header">
    <div class="container">
      <div class="logo">
	  <?php twentysixteen_the_custom_logo(); ?>
	  </div>
      <div class="MenuBtn"> 
	  <span class="bar bar1"></span> 
	  <span class="bar bar2"></span> 
	  <span class="bar bar3"></span> 
	  </div>

      <div class="mainMenu">
        <nav>
		<?php
          wp_nav_menu( array(
          'theme_location' => 'primary',
           'menu_class'     => 'mainMenu',
           'menu_container' => '',
			'after'         => '<span class="mSubMenuToggle"></span>',
            'container' => false
                            ) );
                        ?>
        </nav>
      </div>
    </div>
  </div>--> 
  
  <!-- <div class="callToday">
	<p class="PhoneNumber"> Call Today <img src="<?php bloginfo('template_directory'); ?>/images/phone-icons.png">+512 213 5893 </p>
	</div> --> 
  
</header>
<div id="content" class="site-content">
