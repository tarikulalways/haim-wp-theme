<?php get_header();?>
      <!-- Header Area Start -->

<?php get_template_part('breadcumb/breadcumb'); ?>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title();?></h2>
                <img src="<?php the_post_thumbnail_url();?>" alt="">
                <p><?php the_content();?></p>
                <div class="comments">
                    <!-- <h4>leave a reply</h4>
                    <form action="">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="Send">
                    </form> -->
                    <?php comment_form(); ?>
                </div>
            </div>
            <div class="col-xl-4">
               <?php dynamic_sidebar('sidebar1'); ?>
            </div>
        </div>
    </div>
</section>

 <!-- CTA Area Start -->
 <?php get_footer(); ?>