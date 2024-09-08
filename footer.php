         <footer class="footer_wrapper">
            <div class="footer_wrapper__upper_footer">
               <div class="footer_wrapper__upper_footer__content">
                  <div class="footer_wrapper__upper_footer__content__subtitle">
                     <h3><?php the_field('fot_text');?></h3>
                  </div>
                  <div class="footer_wrapper__upper_footer__content__title">
                     <h2><?php the_field('fot_title');?></h2>
                  </div>
                  <div
                     class="footer_wrapper__upper_footer__content__contacts_wrapper"
                  >
                     <div
                        class="footer_wrapper__upper_footer__content__contacts_wrapper__loc"
                     >
                        <div
                           class="footer_wrapper__upper_footer__content__contacts_wrapper__loc__img"
                        >
                           <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_location.png" alt="" />
                        </div>
                        <div
                           class="footer_wrapper__upper_footer__content__contacts_wrapper__loc__text"
                        >
                           <?php the_field('foot_adres');?>
                        </div>
                     </div>
                     <div
                        class="footer_wrapper__upper_footer__content__contacts_wrapper__tel"
                     >
                        <div
                           class="footer_wrapper__upper_footer__content__contacts_wrapper__tel__img"
                        >
                           <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-tel.png" alt="icon-tel" />
                        </div>
                        <div
                           class="footer_wrapper__upper_footer__content__contacts_wrapper__tel__text"
                        >
                           <span><?php the_field('foot_line');?></span
                           ><span><a class="footer_wrapper__upper_footer__content__contacts_wrapper__tel__text__phone" href="tel:8-0111-11-11-11"><?php the_field('foot_tel');?></a></span
                           >
                        </div>
                     </div>
                     <div
                        class="footer_wrapper__upper_footer__content__contacts_wrapper__mail"
                     >
                        <div
                           class="footer_wrapper__upper_footer__content__contacts_wrapper__mail__img"
                        >
                           <img src="<?php bloginfo('template_url'); ?>/assets/img/icom-mail.png" alt="icom-mail" />
                        </div>
                        <div>
                           <a class="footer_wrapper__upper_footer__content__contacts_wrapper__mail__text" href="mailto:priem@testiweb.test"><?php the_field('foot_mail');?></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer_wrapper__bottom_footer">
               <div class="footer_wrapper__bottom_footer__content">
                  <div
                     class="footer_wrapper__bottom_footer__content__left_column"
                  >
                     <div
                        class="footer_wrapper__bottom_footer__content__left_column__year"
                     >
                        <?php echo date("Y"); ?> &copy; <?php the_field('fot-text');?>
                     </div>
                     <div
                        class="footer_wrapper__bottom_footer__content__left_column__update"
                     >
                        <?php the_field('update');?>
                     </div>
                  </div>
                  <div
                     class="footer_wrapper__bottom_footer__content__right_column"
                  >
                     <div
                        class="footer_wrapper__bottom_footer__content__right_column__develop"
                     >
                        <span>Разработка и поддержка сайта</span
                        ><img src="<?php bloginfo('template_url'); ?>/assets/img/our-logo.png" alt="" /><span
                           ><a href="http://">gt-systems.by</a></span>
                     </div>
                  </div>
               </div>
               <div class="back-to-top">
                  <div id="back-top">
                     <a href="#top"
                        ><span><img src="<?php bloginfo('template_url'); ?>/assets/img/up-arr.png" alt="up-arr" /></span
                     ></a>
                  </div>
               </div>
            </div>
         </footer>
      </div>
<?php wp_footer(); ?>
   </body>
</html>
