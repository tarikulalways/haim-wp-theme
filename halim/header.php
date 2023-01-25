<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
   <head>
      <meta charset="<?php bloginfo( 'charset' )?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head();?>
      <?php get_template_part('theme-option/options-css'); ?>
   </head>
   <body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
   <?php 
      $config = get_option('halim_framework'); 
      if($config['section_show_of']){
   ?>
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
                  <?php 
                     if($config['header_left_switcher']){
                  ?>
						<div class="header-left">
                     <?php 
                        if($config['top_email']){
                     ?>
							<a href=""><i class="fa fa-envelope"></i> <?php echo esc_html($config['top_email']) ?></a>
                     <?php
                        }
                     ?>
                     <?php 
                        if($config['top_number']){
                     ?>
							<a href=""><i class="fa fa-phone"></i> <?php echo esc_html($config['top_number']) ?></a>
                     <?php
                        }
                     ?>
						</div>
                  <?php
                     }
                  ?>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
                  <?php 
                     if($config['switcher_socail']){
                  ?>
						<div class="header-social">
                     <?php 
                        $header_right_socials = $config['header_right_social'];
                        if($header_right_socials){
                           foreach($header_right_socials as $header_right_social){
                     ?>
							<a href="<?php echo esc_attr($header_right_social['socail_link']);?>"><i class="<?php echo esc_attr($header_right_social['social_icon']);?>"></i></a>
                     <?php
                           }
                        }
                     ?>
						</div>
                  <?php
                     }
                  ?>
					</div>
				</div>
			</div>
	   </section>
      <?php
         }
      ?>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="<?php echo esc_url(home_url());?>"><?php echo esc_html($config['site_logo']); ?></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                        <!-- dynamic menu -->
                        <?php 
                           wp_nav_menu(array(
                              'theme_location' => 'main-menu',
                              'menu_class' => 'navbar-nav ml-auto'
                           ));
                        ?>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>