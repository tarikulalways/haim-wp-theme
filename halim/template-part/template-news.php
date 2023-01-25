<?php $config = get_option('halim_framework');  ?>
<section class="blog-area pb-100 pt-100" id="blog">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($config['blog_sub_title']); ?></span> <?php echo esc_html($config['blog_title']); ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($config['blog_des']); ?></p>
            </div>
        </div>
        <div class="row">
            <?php 
                $post_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'menu-order',
                    'order' => 'ASC'
                ));
                if($post_query){
                    while($post_query-> have_posts()){
                        $post_query-> the_post();
            ?>
            <div class="col-md-4">
                <div class="single-blog">
                    <img src="<?php the_post_thumbnail_url();?>" alt="" />
                    <div class="post-content">
                        <div class="post-title">
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        </div>
                        <div class="pots-meta">
                            <ul>
                                <li><a href="#"><?php echo get_the_date('d M y');?></a></li>
                                <li><a href="<?php the_permalink();?>"><?php echo get_the_author();?></a></li>
                            </ul>
                        </div>
                        <p><?php the_excerpt()?></p>
                        <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
                    }wp_reset_postdata();
                }
            ?>
        </div>
    </div>
</section>