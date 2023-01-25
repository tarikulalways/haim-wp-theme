<?php get_header();?>
      <!-- Header Area Start -->
<?php get_template_part('breadcumb/breadcumb'); ?>

<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
         <div class="row">
            <?php 
                $post_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'menu-order',
                    'order' => 'ASC'
                ));
                if($post_query){
                    while($post_query-> have_posts()){
                        $post_query-> the_post();
            ?>
            <div class="col-md-4">
                <div class="single-blog" <?php post_class();?>>
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
                <?php wp_link_pages(); ?>
            </div>
            <?php
                    }wp_reset_postdata();
                }
            ?>
        </div>
         </div>
      </section>
      <!-- Latest News Area End -->
 <!-- CTA Area Start -->
 <?php get_footer();?>