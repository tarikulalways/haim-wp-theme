<?php get_header();
   // template name: Protfolio
?>
      <!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Portfolio</h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="portfolio-menu mb-40 text-center">
                     <button class="active" data-filter="*">ALL</button>
                     
                     <?php 
                        $prot_cats = get_terms('prot_cat');
                        if($prot_cats){
                           foreach($prot_cats as $prot_cat){
                     ?>
                     <button data-filter=".<?php echo $prot_cat-> slug;?>" class=""><?php echo esc_html($prot_cat-> name); ?> </button>
                     <?php
                           }
                        }
                     ?>
                  </div>
               </div>
            </div>
            <div class="row grid no-gutters">
               <?php 
                  $protfolio_query = new WP_Query(array(
                     'post_type' => 'protfolio',
                     'posts_per_page' => -1,
                     'orderby' => 'menu-order',
                     'order' => 'ASC'
                  ));
                  if($protfolio_query){
                     while($protfolio_query-> have_posts()){
                        $protfolio_query-> the_post();
                        $protfolio_imag = get_field('image');
               ?>
               <div class="col-md-4 grid-item 
                  <?php 
                     $cat_veiws = get_the_terms(get_the_ID(), 'prot_cat');
                     if($cat_veiws){
                        foreach($cat_veiws as $cat_veiw){
                           echo $cat_veiw->slug.' ';
                        }
                     }
                  ?>
               ">
                  <div class="single-portfolio">
                     <img src="<?php the_post_thumbnail_url();?>" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php the_permalink();?>" class=""><i class="fa fa-link"></i> <?php the_title(); ?> <span><?php echo esc_html__(get_field('title')); ?></span></a></h3>
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
      <!-- projectss Area End -->
 <!-- CTA Area Start -->
 <?php get_footer();?>