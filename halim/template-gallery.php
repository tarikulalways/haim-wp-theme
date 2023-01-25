<?php 
   get_header();
   // template name: Gallery
?>
      <!-- Header Area Start -->
<?php get_template_part('breadcumb/breadcumb'); ?>

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php 
                $gallery_query = new WP_Query(array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1,
                    'ordeby' => 'menu-order',
                    'order' => 'ASC'
                ));
                if($gallery_query){
                    while($gallery_query-> have_posts()){
                        $gallery_query-> the_post();
                        $normal_image = get_field('normal_image');
                        $big_image = get_field('big_image');
            ?>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo esc_url($normal_image['url']);?>" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo esc_url($big_image['url']);?>" class="gallery"><i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                        </div>
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
 <!-- CTA Area Start -->
 <?php get_footer();?>