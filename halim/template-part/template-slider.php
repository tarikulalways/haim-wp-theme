<section class="slider-area" id="home">
    <div class="slider owl-carousel">
        <?php 
            $query_slider = new WP_QUERY(array(
                'post_type' => 'slider',
                'posts_per_page' => -1,
                'orderby' => 'menu-order',
                'order' => 'ASC'
            ));
            if($query_slider){
                while($query_slider-> have_posts()){
                    $query_slider-> the_post();
        ?>
        <div class="single-slide"
            style="background-image:url('<?php the_post_thumbnail_url();?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-table">
                            <div class="slide-tablecell">
                                <h4><?php echo esc_html(get_field('sub_title'));?></h4>
                                <h2><?php the_title();?></h2>
                                <p><?php the_excerpt();?></p>
                                <a href="<?php echo esc_url(get_field('button_link'));?>" class="box-btn"><?php echo esc_html(get_field('button_text'));?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }wp_reset_postdata();
            }
        ?>
    </div>
</section>