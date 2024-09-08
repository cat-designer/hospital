<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

			<?php wp_head();?>

      <title>Тестовая страница</title>
   </head>
   <body>
      <div class="page-wrapper">
         <header class="header">
            <div class="header__menu_wrapper">
               <nav class="header__menu_wrapper__content">
                  <?php wp_nav_menu( $args ); ?>
               </nav>
            </div>
            <div class="header__upperhead_wrapper">
               <div class="header__upperhead_wrapper__content">
                  <div class="header__upperhead_wrapper__content__left_wrapper">
                     <div
                        class="header__upperhead_wrapper__content__left_wrapper__img"
                     >
                        <?php the_custom_logo(); ?>
                     </div>
                  </div>
                  <div
                     class="header__upperhead_wrapper__content__right_wrapper"
                  >
                     <div
                        class="header__upperhead_wrapper__content__right_wrapper__search_wrapper"
                     >
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__search_wrapper__text"
                        >
                           <?php get_search_form(); ?>
                        </div>
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__search_wrapper__search_img"
                        >
                           <img src="<?php bloginfo('template_url'); ?>/assets/img/search.png" alt="search" />
                        </div>
                     </div>
                     <div
                        class="header__upperhead_wrapper__content_right_wrapper__devider"
                     ></div>
                     <div
                        class="header__upperhead_wrapper__content__right_wrapper__visually_impaired_wrapper"
                     >
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__visually_impaired_wrapper__img"
                        >
                           <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-loop.png" alt="" />
                        </div>
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__visually_impaired_wrapper__text"
                        ><a href="http://">Версия для слабовидящих</a>
                           
                        </div>
                     </div>
                     <div
                        class="header__upperhead_wrapper__content_right_wrapper__devider"
                     ></div>
                     <div
                        class="header__upperhead_wrapper__content__right_wrapper__lang_wrapper"
                     >
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__lang_wrapper__item_text"
                        >
                           язык сайта
                        </div>
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__lang_wrapper__item_lang_active"
                        >
                           RU
                        </div>
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__lang_wrapper__item_lang"
                        >
                           BY
                        </div>
                        <div
                           class="header__upperhead_wrapper__content__right_wrapper__lang_wrapper__item_lang"
                        >
                           EN
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header__main_wrapper">
							<div class="header__main_wrapper__main_pic">
								<img src="<?php the_field('main_pic');?>" alt="главная картинка">
							</div>
               <div class="header__main_wrapper__content">
                  <div class="header__main_wrapper__upper_title">
                     <h3><?php the_field('uptitle');?></h3>
                  </div>
                  <div class="header__main_wrapper__title">
                     <h1><?php the_field('page_name');?></h1>
                  </div>
                  <div class="header__main_wrapper__subtitle">
                     <h2><?php the_field('sec_title');?></h2>
                  </div>
                  <div class="header__main_wrapper__contacts_wrapper">
                     <div class="header__main_wrapper__contacts_wrapper_loc">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_location.png" alt="location" /><span
                           ><?php the_field('adress');?></span
                        >
                     </div>
                     <div class="header__main_wrapper__contacts_wrapper_phone">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon-tel.png" alt="telephone" /><span
                           ><?php the_field('otdel');?></span
                        ><span
                           class="header__main_wrapper__contacts_wrapper_phone__number"
                           ><?php the_field('phone');?></span
                        >
                     </div>
                     <div class="header__main_wrapper__contacts_wrapper_mail">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icom-mail.png" alt="mail" /><span
                           ><?php the_field('mail');?></span
                        >
                     </div>
                     <div class="header__main_wrapper__contacts_wrapper_time">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/icon-time.png" alt="time" /></div>
                        <div>
                           <p><?php the_field('grafic');?></p>
                           <span
                              class="header__main_wrapper__contacts_wrapper_time__work_day"
                              ><?php the_field('grafic_day');?></span
                           >
                           <span
                              class="header__main_wrapper__contacts_wrapper_time__work_hours"
                              ><?php the_field('day_time');?></span
                           >
                        </div>
                     </div>
                  </div>
                  <div class="header__main_wrapper_buttons_wrapper">
                     <button
                        class="header__main_wrapper_buttons_wrapper_button"
                     >
                        <?php the_field('up_but');?>
                     </button>
                     <button
                        class="header__main_wrapper_buttons_wrapper_button"
                     >
                        <?php the_field('mid_but');?>
                     </button>
                     <button
                        class="header__main_wrapper_buttons_wrapper_button"
                     >
                        <?php the_field('bot_but');?>
                     </button>
                  </div>
               </div>
            </div>
         </header>