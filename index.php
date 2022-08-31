<?php get_header(); ?>

<body>
   
   <!-- ページ偏移 -->
   <div class="deviation">
      <div class="deviation__main"></div>
      <p class="deviation__icon--eye"></p>
   </div>

   <div id="l-container__home">
      <header id="l-header">
         <a class="p-header__link--front" href="front-page.html">
            <img src="" class="p-header__logo c-logo--top" alt="ロゴ用画像">
         </a>
         <nav class="p-header__menu">
            <ul>
               <li class="p-header__list">
                  <a class="c-font__header-menu c-link__header-menu--en" href="page1.html">About</a>
                  <a class="c-font__header-menu c-link__header-menu--ja" href="page1.html">自己紹介</a>
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
                        <a class="c-font__main-menu--list" href="page1.html">力</a>
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
   <script src="../script/loder.js"></script>
   
   <script src="../script/rotate.js"></script>
   <script src="../dist/bundle.js"></script>
</body>

</html>