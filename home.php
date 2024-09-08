<?php
/*
Template Name: home
*/
?>

<?php get_header();?>
         <main class="main">
            <section class="main__information_wrapper">
               <div class="main__information_wrapper__content">
                  <div class="main__information_wrapper__content__title">
                     <h2><?php the_field('slider');?></h2>
                  </div>
                  <div
                     class="main__information_wrapper__content__buttons_wrapper"
                  >
                     <button
                        class="main__information_wrapper__content__buttons_wrapper__active"
                     >
                        <?php the_field('link');?>
                     </button>
                     <button
                        class="main__information_wrapper__content__buttons_wrapper__inactive"
                     >
                        <?php the_field('sec_link');?>
                     </button>
                  </div>
                  <div class="main__information_wrapper__slider_wrapper">








                     <button class="main__information_wrapper__slider__button">
                        все новости
                     </button>
                  </div>
               </div>
            </section>
            <section class="service_section_wrapper">
               <div class="service_section_wrapper__content">
                  <div class="service_section_wrapper__content__title">
                     <?php the_field('uslugi');?>
                  </div>
                  <div class="service_section_wrapper__content__block_wrapper">
                     <div
                        class="service_section_wrapper__content__block_wrapper_item_wrapper"
                     >
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__img"
                        >
                           <img src="<?php the_field('pic1');?>" alt="zavod" />
                        </div>
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__text"
                        >
                           <?php the_field('op1');?>
                        </div>
                     </div>
                     <div
                        class="service_section_wrapper__content__block_wrapper_item_wrapper"
                     >
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__img"
                        >
                           <img src="<?php the_field('pic2');?>" alt="doc1" />
                        </div>
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__text"
                        >
                           <?php the_field('op2');?>
                        </div>
                     </div>
                     <div
                        class="service_section_wrapper__content__block_wrapper_item_wrapper"
                     >
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__img"
                        >
                           <img src="<?php the_field('pic3');?>" alt="2man" />
                        </div>
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__text"
                        >
                           <?php the_field('op3');?>
                        </div>
                     </div>
                     <div
                        class="service_section_wrapper__content__block_wrapper_item_wrapper"
                     >
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__img"
                        >
                           <img src="<?php the_field('pic4');?>" alt="docs" />
                        </div>
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__text"
                        >
                           <?php the_field('op4');?>
                        </div>
                     </div>
                     <div
                        class="service_section_wrapper__content__block_wrapper_item_wrapper"
                     >
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__img"
                        >
                           <img src="<?php the_field('pic5');?>" alt="prob" />
                        </div>
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__text"
                        >
                           <?php the_field('op5');?>
                        </div>
                     </div>
                     <div
                        class="service_section_wrapper__content__block_wrapper_item_wrapper"
                     >
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__img"
                        >
                           <img src="<?php the_field('pic6');?>" alt="dang" />
                        </div>
                        <div
                           class="service_section_wrapper__content__block_wrapper_item_wrapper__text"
                        >
                           <?php the_field('op6');?>
                        </div>
                     </div>
                  </div>
                  <div
                     class="service_section_wrapper__content__service_block_price_wrapper"
                  >
                     <div
                        class="service_section_wrapper__content__service_block_price_wrapper__price"
                     >
                        <div
                           class="service_section_wrapper__content__service_block_wrapper___price__price__img"
                        >
                           <img src="<?php bloginfo('template_url'); ?>/assets/img/cash.png" alt="cash" />
                        </div>
                        <div
                           class="service_section_wrapper__content__service_block_price_wrapper__price__text"
                        >
                           <a href="http://"><?php the_field('price_name');?></a>
                        </div>
                     </div>
                     <button class="service_section_wrapper__content__button">
                        <a href="http://"><?php the_field('but_name');?></a>
                     </button>
                  </div>
               </div>
            </section>
            <section class="information_die_main_wrapper">
							<div class="information_die_main_wrapper__img">
								<img src="<?php the_field('bg_img');?>" alt="img1" />
							</div>
               <div class="information_die_main_wrapper__content">
                  <div
                     class="information_die_main_wrapper__content__block_wrapper"
                  >
                     <div
                        class="information_die_main_wrapper__content__block_wrapper__block"
                     >
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__img"
                        >
                           <img src="<?php the_field('pic_1');?>" alt="ornam" />
                        </div>
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__text"
                        >
                           <?php the_field('text1');?>
                        </div>
                     </div>
                     <div
                        class="information_die_main_wrapper__content__block_wrapper__block die_color"
                     >
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__img"
                        >
                           <img src="<?php the_field('pic_2');?>" alt="min-gerb" />
                        </div>
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__text"
                        >
                           <?php the_field('text2');?>
                        </div>
                     </div>
                     <div
                        class="information_die_main_wrapper__content__block_wrapper__block"
                     >
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__img"
                        >
                           <img src="<?php the_field('pic_3');?>" alt="power" />
                        </div>
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__text"
                        >
                           <?php the_field('text3');?>
                        </div>
                     </div>
                     <div
                        class="information_die_main_wrapper__content__block_wrapper__block die_color"
                     >
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__img"
                        >
                           <img src="<?php the_field('pic_4');?>" alt="i-icon" />
                        </div>
                        <div
                           class="information_die_main_wrapper__content__block_wrapper__block__text"
                        >
                           <?php the_field('text4');?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="link_catalog_wrapper">
               <div class="link_catalog_wrapper__content">
                  <div class="link_catalog_wrapper__content__title">
                     <h2><?php the_field('link_catalog');?></h2>
                  </div>
                  <div class="swiper swiper1">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="link_wrapper">
                              <div class="link_wrapper__block_wrapper">
                                 <div class="link_wrapper__block_wrapper__img">
                                    <img
                                       src="<?php bloginfo('template_url'); ?>/assets/img/bel-gerb.png"
                                       alt="bel-gerb"
                                    />
                                 </div>
                                 <div class="link_wrapper__block_wrapper__text">
                                    Официальный интернет-портал Президента
                                    Республики Беларусь
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="link_wrapper">
                              <div class="link_wrapper__block_wrapper">
                                 <div class="link_wrapper__block_wrapper__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/sov-min.png" alt="sov-min" />
                                 </div>
                                 <div class="link_wrapper__block_wrapper__text">
                                    Совет Министров Республики Беларусь
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="link_wrapper">
                              <div class="link_wrapper__block_wrapper">
                                 <div class="link_wrapper__block_wrapper__img">
                                    <img
                                       src="<?php bloginfo('template_url'); ?>/assets/img/sdrav-gerb.png"
                                       alt="sdrav-gerb"
                                    />
                                 </div>
                                 <div class="link_wrapper__block_wrapper__text">
                                    министерство Здравоохранения Республики
                                    Беларусь
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="link_wrapper">
                              <div class="link_wrapper__block_wrapper">
                                 <div class="link_wrapper__block_wrapper__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/ispolk.png" alt="sov-min" />
                                 </div>
                                 <div class="link_wrapper__block_wrapper__text">
                                    минский городской исполнительный комитет
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="link_wrapper">
                              <div class="link_wrapper__block_wrapper">
                                 <div class="link_wrapper__block_wrapper__img">
                                    <img
                                       src="<?php bloginfo('template_url'); ?>/assets/img/bel-gerb.png"
                                       alt="bel-gerb"
                                    />
                                 </div>
                                 <div class="link_wrapper__block_wrapper__text">
                                    Официальный интернет-портал Президента
                                    Республики Беларусь
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
            </section>
         </main>
<?php get_footer();?>
