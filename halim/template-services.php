<?php 
   get_header();
   // template name: Service
?>
      <!-- Header Area Start -->
<?php get_template_part('breadcumb/breadcumb'); ?>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
         <div class="container">
         <div class="row">
            <?php 
                $servic_query = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'orderby' => 'menu-order',
                    'order' => 'ASC'
                ));
                if($servic_query){
                    while($servic_query-> have_posts()){
                        $servic_query-> the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <!-- Single Service -->
                <div class="single-service">
                    <?php echo get_field('service_icon');?>
                    <h4><?php echo esc_html__(get_field('title'));?> </h4>
                    <p><?php echo esc_html__(get_field('description'));?>
                    </p>
                </div>
            </div>
            <?php
                    }wp_reset_postdata();
                }
            ?>
        </div>
         </div>
      </section>
      <!-- Services Area End -->
 <!-- CTA Area Start -->
 <?php get_footer();?>