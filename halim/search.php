<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Search for resul: <?php echo get_search_query();?></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
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
                        <a href="<?php the_permalink();?>" class="box-btn">read more <i
                                class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
                    }wp_reset_postdata();
                }else{
            ?>
            <h4>Not found your search result! plz try again.</h4>
            <hr>
            <a href="<?php echo esc_url(home_url());?>" class="btn btn-success">Back Home</a>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>