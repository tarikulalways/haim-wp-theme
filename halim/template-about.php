<?php 
   get_header();
   // template name: About
?>
<?php $config = get_option('halim_framework');  ?>
      <!-- Header Area Start -->
<?php get_template_part('breadcumb/breadcumb'); ?>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
         <div class="container">
         <div class="row">
            <div class="col-md-7">
                <?php 
                    if($config['about_left_switcher']){
                ?>
                <div class="about">
                    <div class="page-title">
                        <h4><?php echo esc_html($config['abt_left_title']); ?></h4>
                    </div>
                    <p><?php echo esc_html($config['abt_left_content']); ?>
                    </p>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-md-5">
                <?php 
                    $abt_right_groups = $config['abt_right_group'];
                    foreach($abt_right_groups as $abt_right_group){
                ?>
                <div class="single_about">
                    <i class="<?php echo esc_attr($abt_right_group['mission_icon']);?>"></i>
                    <h4><?php echo esc_html($abt_right_group['mission_title']);?></h4>
                    <p><?php echo esc_html($abt_right_group['mission_des']);?>
                    </p>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
         </div>
</section>
      <!-- About Area End -->
 <!-- CTA Area Start -->
 <?php get_footer();?>