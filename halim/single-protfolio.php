<?php get_header(); ?>
      <!-- Header Area Start -->
<?php get_template_part('breadcumb/breadcumb'); ?>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <img src="<?php the_post_thumbnail_url();?>" alt="">
                <p><?php the_content(); ?></p>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                  <?php 
                     $technologys = get_field('technology_used');
                     if($technologys){
                  ?>
                  <h4>technology used</h4>
                  <?php
                     }
                  ?>
                    <ul>
                     <?php 
                        if($technologys){
                           foreach($technologys as $technology){
                     ?>
                     <li><i class="fa fa-arrow-right"></i> <?php echo esc_html($technology); ?></li>
                     <?php
                           }
                        }
                     ?>
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                  <?php 
                     $projects = get_field('project_features');
                     if($projects){
                  ?>
                  <h4>project features</h4>
                  <?php
                     }
                  ?>
                    <ul>
                     <?php 
                        if($projects){
                           foreach($projects as $project){
                     ?>
                     <li><i class="fa fa-arrow-right"></i> <?php echo esc_html($project); ?></li>
                     <?php
                           }
                        }
                     ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- CTA Area Start -->
 <?php get_footer(); ?>