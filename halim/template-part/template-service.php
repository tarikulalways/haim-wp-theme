<?php 
    $config = get_option('halim_framework'); 
?>
<section class="services-area pt-100 pb-50" id="services">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($config['service_sub_title']); ?></span> <?php echo esc_html($config['service_title']); ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($config['service_des']); ?></p>
            </div>
        </div>
        <div class="row">
            <?php 
                $servic_query = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page' => 6,
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
                    <h4><?php echo esc_html(get_field('title'));?> </h4>
                    <p><?php echo esc_html(get_field('description'));?>
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