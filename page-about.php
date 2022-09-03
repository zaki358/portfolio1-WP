<?php get_header(); ?>

<?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

<main id="l-main">
         <div class="p-wrapper">
            <div class="p-feature c-circle__principal--about">
               <!-- 主要なもの＝自己紹介 -->
               <h2 class="p-feature__title c-title__feature--title u-margin__feature--title">
                  <img src="../images/title.svg" alt="">
               </h2>
               <p class="p-feature__text c-font__feature--text u-margin__feature--text">
                  初めまして。山崎タクマと申します。
                  現在、Web全般について学んでいます。
                  既存のコーディング方法を踏襲しつつ新しい方法についても積極的に学ぶことが好きです。
                  また、Photoshopやillustratorなど使用してデザインすることについても学んでいます。
                  
               </p>
               <div class="p-feature__link">
                  <div class="p-feature__icon c-icon__feature--twitter">
                     <a href="https://twitter.com/zaki89475371"></a>
                  </div>
                  <div class="p-feature__icon c-icon__feature--github">
                     <a href="https://github.com/zaki358"></a>
                  </div>
               </div>
            </div>
         </div>
      </main>
   </div>

   <?php endwhile; ?>
<?php endif ?>

<?php get_footer(); ?>