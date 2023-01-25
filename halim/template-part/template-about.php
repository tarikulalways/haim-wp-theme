<?php 
    if(get_option('halim_framework')){
        $config = get_option('halim_framework'); 
    }
?>
<section class="about-area pt-100 pb-100" id="about">
    <div class="container">
        <?php 
            if($config['about_switcher']){
        ?>
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <h3><span><?php echo esc_html($config['abt_head_sub']) ?></span> <?php echo esc_html($config['abt_head_title']) ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo esc_html($config['abt_head_des']) ?></p>
            </div>
        </div>
        <?php
            }
        ?>

        <div class="row">
            <div class="col-md-7">
                <?php 
                    if($config['about_left_switcher']){
                ?>
                <div class="about">
                    <div class="page-title">
                        <h4><?php echo esc_html($config['abt_left_title']); ?></h4>
                    </div>
                    <p><?php echo esc_html($config['abt_left_content']); ?>
                    </p>
                    <a href="<?php echo esc_url($config['abt_btn_link']);?>" class="box-btn"><?php echo esc_html($config['abt_btn_text']); ?> <i class="fa fa-angle-double-right"></i></a>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-md-5">
                <?php 
                    $abt_right_groups = $config['abt_right_group'];
                    foreach($abt_right_groups as $abt_right_group){
                ?>
                <div class="single_about">
                    <i class="<?php echo esc_attr($abt_right_group['mission_icon']);?>"></i>
                    <h4><?php echo esc_html($abt_right_group['mission_title']);?></h4>
                    <p><?php echo esc_html($abt_right_group['mission_des']);?>
                    </p>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>