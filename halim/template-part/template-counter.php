<section class="counter-area">
    <div class="container-fluid">
        <div class="row">
            <?php 
                $counter_query = new WP_Query(array(
                    'post_type' => 'counter',
                    'posts_per_page' => 4,
                    'orderby' => 'menu-order',
                    'order' => 'ASC'
                ));
                if($counter_query){
                    while($counter_query-> have_posts()){
                        $counter_query-> the_post();
            ?>
            <div class="col-md-3">
                <div class="single-counter">
                    <h4><?php echo get_field('counter_icon');?><span class="counter"><?php echo esc_html__(get_field('conter_number', 'halim'));?></span><?php echo esc_html__(get_field('title', 'halim'));?></span></h4>
                </div>
            </div>
            <?php
                    }wp_reset_postdata();
                }
            ?>
        </div>
    </div>
</section>