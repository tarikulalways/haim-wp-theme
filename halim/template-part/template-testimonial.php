<?php $config = get_option('halim_framework');  ?>
<section class="testimonial-area pb-100 pt-100" id="testimonials">
    <div class="container">
        <div class="row section-title white-section">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($config['testi_sub_title']); ?></span> <?php echo esc_html($config['testi_title']); ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($config['testi_des']); ?></p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials owl-carousel">
                    <?php 
                        $testimonial_query = new WP_Query(array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => -1,
                            'orderby' => 'menu-order',
                            'order' => 'ASC'
                        )); 
                        if($testimonial_query){
                            while($testimonial_query-> have_posts()){
                                $testimonial_query-> the_post();
                    ?>
                    <div class="single-testimonial">
                        <div class="testi-img">
                            <img src="<?php the_post_thumbnail_url();?>"
                                alt="" />
                        </div>
                        <p><?php echo esc_html(get_field('descriptions'));?></p>
                        <h4><?php echo esc_html(get_field('title'));?> <span><?php echo esc_html(get_field('designation'));?></span></h4>
                    </div>
                    <?php
                            }wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>