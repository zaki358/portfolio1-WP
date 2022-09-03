<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="portfolio">
   <title>portfolio</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ページ偏移 -->
<div class="deviation">
      <div class="deviation__main"></div>
      <p class="deviation__icon--eye"></p>
   </div>

<?php
   if(is_home() || is_front_page()){
      $className = "l-container__home";
   }
   else {
      $className = "l-container";
   }
?>
   <div id=<?php echo $className?>>
      <header id="l-header">
         <a class="p-header__link--front" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="" class="p-header__logo c-logo--top" alt="ロゴ用画像">
         </a>
         <nav class="p-header__menu">
            <ul>
               <li class="p-header__list">
                  <a class="c-font__header-menu c-link__header-menu--en" href="<?php echo get_permalink( get_page_by_path( 'about' )->ID ); ?>">About</a>
                  <a class="c-font__header-menu c-link__header-menu--ja" href="<?php echo get_permalink( get_page_by_path( 'about' )->ID ); ?>">自己紹介</a>
               </li>
               <li class="p-header__list">
                  <a class="c-font__header-menu c-link__header-menu--en" href="page2.html">Skill</a>
                  <a class="c-font__header-menu c-link__header-menu--ja" href="page2.html">技能</a>
               </li>
               <li class="p-header__list">
                  <a class="c-font__header-menu c-link__header-menu--en" href="page3.html">Work</a>
                  <a class="c-font__header-menu c-link__header-menu--ja" href="page3.html">制作実績</a>
               </li>
            </ul>
         </nav>
      </header>