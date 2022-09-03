<?php get_header(); ?>
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>

      <main id="l-main">
         <div class="p-wrpper">
            <div class="p-wrapper__swiper">
               <div class="swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                     <!-- Slides -->
                     <div class="swiper-slide">
                        <div class="p-wrapper__slide">
                           <div class="p-wrapper__slide--img">
                              <img class="c-img__swiper" src="../images/work/reise-tech.jpg" alt="代用">
                           </div>
                           <p class="p-wrapper__slide--title c-font__swiper">RaiseTech模写</p>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="p-wrapper__slide">
                           <div class="p-wrapper__slide--img">
                              <img class="c-img__swiper" src="../images/work/hamburger.jpg" alt="代用">
                           </div>
                           <p class="p-wrapper__slide--title c-font__swiper">ハンバーガーサイト</p>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="p-wrapper__slide">
                           <div class="p-wrapper__slide--img">
                              <img class="c-img__swiper" src="../images/work/portfolio.jpg" alt="代用">
                           </div>
                           <p class="p-wrapper__slide--title c-font__swiper">ポートフォリオ</p>
                        </div>
                     </div>
                     ...
                  </div>
                  <!-- If we need pagination -->
                  <!-- <div class="swiper-pagination"></div> -->

                  <!-- If we need navigation buttons -->
                  <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->

                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
               </div>
            </div>
         </div>
      </main>


   <?php endwhile; ?>
<?php endif ?>
<?php get_footer(); ?>