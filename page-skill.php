<?php get_header(); ?>

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>

      <div id="l-main">
         <div class="p-wrapper">
            <div class="p-about">
               <section class="p-about__left">
                  <ul>
                     <li class="p-about__item--html">
                        <p class="c-font__about">HTML</p>
                        <dl class="p-about__term--left u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">HTML</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              htmlが入ります。htmlが入ります。htmlが入ります。
                              htmlが入ります。htmlが入ります。htmlが入ります。
                              htmlが入ります。htmlが入ります。htmlが入ります。
                           </dd>
                        </dl>
                     </li>
                     <li class="p-about__item--css">
                        <p class="c-font__about">CSS</p>
                        <dl class="p-about__term--left u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">CSS</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              CSSが入ります。CSSが入ります。CSSが入ります。
                              CSSが入ります。CSSが入ります。CSSが入ります。
                              CSSが入ります。CSSが入ります。CSSが入ります。
                           </dd>
                        </dl>
                     </li>

                     <li class="p-about__item--js">
                        <p class="c-font__about">JavaScript</p>
                        <dl class="p-about__term--left u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">JavaScript</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              JavaScriptが入ります。CSSが入ります。CSSが入ります。
                              CSSが入ります。CSSが入ります。CSSが入ります。
                              CSSが入ります。CSSが入ります。CSSが入ります。
                           </dd>
                        </dl>
                     </li>

                     <li class="p-about__item--wp">
                        <p class="c-font__about">WordPress</p>
                        <dl class="p-about__term--left u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">WordPress</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              WordPressが入ります。CSSが入ります。CSSが入ります。
                              CSSが入ります。CSSが入ります。CSSが入ります。
                              CSSが入ります。CSSが入ります。CSSが入ります。
                           </dd>
                        </dl>
                     </li>

                  </ul>
               </section>

               <div class="p-about__center  c-circle__principal--skill">
                  <ul>
                     <li class="p-about__icon--html c-icon__circle--html"></li>
                     <li class="p-about__icon--css c-icon__circle--css"></li>
                     <li class="p-about__icon--js c-icon__circle--js"></li>
                     <li class="p-about__icon--wp c-icon__circle--wp"></li>
                     <li class="p-about__icon--ai c-icon__circle--ai"></li>
                     <li class="p-about__icon--ps c-icon__circle--ps"></li>
                     <li class="p-about__icon--xd c-icon__circle--xd"></li>
                     <li class="p-about__icon--figma c-icon__circle--figma"></li>
                  </ul>
               </div>

               <section class="p-about__right">
                  <ul>
                     <li class="p-about__item--ai">
                        <p class="c-font__about">illustrator</p>
                        <dl class="p-about__term--right u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">illustrator</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              illustratorが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                           </dd>
                        </dl>
                     </li>

                     <li class="p-about__item--ps">
                        <p class="c-font__about">Photoshop</p>
                        <dl class="p-about__term--right u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">Photoshop</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              Photoshopが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                           </dd>
                        </dl>
                     </li>

                     <li class="p-about__item--xd">
                        <p class="c-font__about">AdobeXD</p>
                        <dl class="p-about__term--right u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">AdobeXD</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              AdobeXDが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                           </dd>
                        </dl>
                     </li>

                     <li class="p-about__item--figma">
                        <p class="c-font__about">Figma</p>
                        <dl class="p-about__term--right u-margin__term">
                           <dt>
                              <h2 class="c-title__skill-font">Figma</h2>
                           </dt>
                           <dd class="c-font__skill-detail u-margin__detail">
                              Figmaが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                              テキストが入ります。テキストが入ります。テキストが入ります。
                           </dd>
                        </dl>
                     </li>
                  </ul>
               </section>
            </div>
         </div>
      </div>
      </div>


   <?php endwhile; ?>
<?php endif ?>

<?php get_footer(); ?>