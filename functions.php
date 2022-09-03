<?php

//グローバル変数
if(is_home() || is_front_page()){
   $className = "l-container__home";
}
else {
   $className = "l-container";
}

$about = get_page_by_path( 'about' )->ID;
$skill = get_page_by_path( 'skill' )->ID;
$work = get_page_by_path( 'work' )->ID;

function portfolio_setup()
{
   add_theme_support('post-thumbnails');
   add_theme_support('menus');
   add_theme_support('html5', array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
   ));
}
add_action('after_setup_theme', 'portfolio_setup');

function portfolio_script()
{
   wp_enqueue_style('Mincho', '//fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700&display=swap', array());
   wp_enqueue_style('Potta', '//fonts.googleapis.com/css2?family=Potta+One&display=swap', array());
   wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array());
   wp_enqueue_style('portfolio', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
   wp_enqueue_script('slider', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(),);
   wp_enqueue_script('swiper', get_template_directory_uri() . '/script/libs/slider.js', array(), '1.0.0');
   wp_enqueue_script('rotate', get_template_directory_uri() . '/script/rotate.js', array(), '1.0.0');
   wp_enqueue_script('icon', get_template_directory_uri() . '/script/icon.js', array(), '1.0.0');

}
add_action('wp_enqueue_scripts', 'portfolio_script');

function head_script() {
   wp_enqueue_script('pace', get_template_directory_uri() . '/script/pace.js', array(), '1.0.0');
}
add_action('wp_head','head_script');


function foot_script()
{
   
   if (is_home() || is_front_page()) {
      wp_enqueue_script('loader', get_template_directory_uri() . '/script/loader.js', array(), '1.0.0');
   }
}
add_action('wp_footer', 'foot_script');





function font_script() {
   $Font = <<< EOL
   <script>
      (function(d) {
        var config = {
          kitId: 'lub3qcu',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
   EOL;
    echo $Font;
   }
add_action('wp_head', 'font_script');


