<?php
/*
*Template Name: Starter Homepage
*/
?>
<?php
get_header();
$placeholder_text = get_post_meta(get_the_ID(), "placeholder", true);
$button_label = get_post_meta(get_the_ID(), "button text", true);
$hint = get_post_meta(get_the_ID(), "hint", true);
?>

<body>

 <div class="fh5co-loader"></div>

 <div id="page">
  <nav class="fh5co-nav" role="navigation">
   <div class="container">
    <div class="row">
     <div class="col-xs-12 text-center">
      <div id="fh5co-logo"><a href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?><strong>.</strong></a></div>
     </div>
    </div>
   </div>
  </nav>

  <header id="fh5co-header" class="fh5co-cover hero_bg" role="banner" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
    <div class="row">
     <div class="col-md-8 col-md-offset-2 text-center">
      <div class="display-t">
       <div class="display-tc animate-box" data-animate-effect="fadeIn">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_content(); ?></h2>
        <div class="simply-countdown simply-countdown"></div>
        <div class="row">
         <h2>Notify me when it's ready</h2>
         <form class="form-inline" id="fh5co-header-subscribe">
          <div class="col-md-12 col-md-offset-0">
           <div class="form-group text-left">
            <input type="text" class="form-control" id="email" placeholder="<?php echo esc_attr($placeholder_text); ?>">
            <button type="submit" class="btn btn-primary"><?php echo esc_attr($button_label); ?></button>
            <p><?php echo esc_html($hint); ?></p>
           </div>
          </div>
         </form>
         <?php
         if (is_active_sidebar("footer_sidebar")) {
          dynamic_sidebar("footer_sidebar");
         }
         ?>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </header>

  <footer id="fh5co-footer" role="contentinfo">
   <div class="container">

    <div class="row copyright">
     <div class="col-md-12 text-center">
      <p>
       <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
       <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
      </p>
      <p>
      <ul class="fh5co-social-icons">
       <li><a href="#"><i class="icon-twitter"></i></a></li>
       <li><a href="#"><i class="icon-facebook"></i></a></li>
       <li><a href="#"><i class="icon-linkedin"></i></a></li>
       <li><a href="#"><i class="icon-dribbble"></i></a></li>
      </ul>
      </p>
     </div>
    </div>

   </div>
  </footer>
 </div>

 <div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
 </div>

 <?php
 get_footer();
 ?>