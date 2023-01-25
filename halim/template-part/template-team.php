<?php 
    $config = get_option('halim_framework'); 
?>
<section class="team-area pb-100 pt-100" id="team">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($config['team_sub_title']); ?></span> <?php echo esc_html($config['team_title']);?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($config['team_des']); ?></p>
            </div>
        </div>
        <div class="row">
            <?php 
                $team_query = new WP_Query(array(
                    'post_type' => 'team',
                    'posts_per_page' => 3,
                    'orderby' => 'menu-order',
                    'order' => 'ASC'
                ));
                if($team_query){
                    while($team_query-> have_posts()){
                        $team_query-> the_post();
            ?>
            <div class="col-md-4">
                <div class="single-team">
                    <img src="<?php the_post_thumbnail_url();?>" alt="" />
                    <div class="team-hover">
                        <div class="team-content">
                            <h4><?php echo esc_html(get_field('title'));?> <span><?php echo esc_html(get_field('designation'));?></span></h4>
                            <ul>
                                <?php 
                                    if(get_field('facebook_link')){
                                ?>
                                <li><a href="<?php echo esc_url(get_field('facebook_link'));?>"><i class="fa fa-facebook"></i></a></li>
                                <?php
                                    }
                                ?>
                                <?php 
                                    if(get_field('twitter_link')){
                                ?>
                                <li><a href="<?php echo esc_url(get_field('twitter_link'));?>"><i class="fa fa-twitter"></i></a></li>
                                <?php
                                    }
                                ?>
                                <?php 
                                    if(get_field('instragram_link')){
                                ?>
                                <li><a href="<?php echo esc_url(get_field('instragram_link'));?>"><i class="fa fa-linkedin"></i></a></li>
                                <?php
                                    }
                                ?>
                                <?php 
                                    if(get_field('google_plus_link')){
                                ?>
                                <li><a href="<?php echo esc_url(get_field('google_plus_link'));?>"><i class="fa fa-google-plus"></i></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
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