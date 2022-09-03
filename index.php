<?php get_header(); ?>

      <main id="l-main">
         <!-- <canvas class="p-canvas" id="canvas"></canvas> -->
         <div class="p-wrapper">
            <!-- <div class="p-wrapper__layer c-layer-main"></div> -->
            <div class="p-wrapper__body">
               <section class="p-area">
                  <h2 class="p-area__main c-circle__main">
                     <a class="c-font__main" href="">力</a>
                  </h2>
                  <ul class="c-circle__principal">
                     <li class="p-area__front-menu--lv1 c-circle__menu">
                        <a class="c-font__main-menu--list" href="<?php echo get_permalink( get_page_by_path( 'about' )->ID ); ?>">己</a>
                     </li>
                     <li class="p-area__front-menu--lv2 c-circle__menu">
                        <a class="c-font__main-menu--list" href="page2.html">技</a>
                     </li>
                     <li class="p-area__front-menu--lv3  c-circle__menu">
                        <a class="c-font__main-menu--list" href="page3.html">仕</a>
                     </li>
                  </ul>
                  <div class="p-area__scroll">
                     <img class="p-area__scroll--img c-img__scroll" src="../images/scroll.svg" alt="スクロール画像">
                     <span class="p-area__scroll--font c-font__scroll">Wheel</span></div>
               </section>
            </div>
            <div class="p-wrapper__footer">
               <ul class="p-wrapper__footer-list">
                  <li class="c-list__footer"><a class="c-font__footer-menu" href="page4.html">contact</a></li>
                  <li class="c-list__footer"><a class="c-font__footer-menu" href="page5.html">price</a></li>
               </ul>
            </div>
         </div>
      </main>
   </div>
   <?php get_footer(); ?>
