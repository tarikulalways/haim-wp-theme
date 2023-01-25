<?php 
    if(get_option('halim_framework')){
        $config = get_option('halim_framework'); 
    }
    // this query for about right content area
    $color = $config['about_group_color'];        
?>

<style>
/* header top start */
.header-top {
    background-color: <?php echo $config['bg_color'];
    ?>
}

/* header top end */

/* about css start */
.about a.box-btn {
    background-color: <?php echo $config['abt_btn_bg'];
    ?>
}

.single_about i {
    color: <?php echo $color['color_abt_icon']?>;
    border-color: <?php echo $color['color_brdr_icon_color'];
    ?>
}

.single_about:hover i {
    background-color: <?php echo $color['color_abt_hover_bg']?>;
    color: <?php echo $color['color_abt_hover_icon']?>;
    border-color: <?php echo $color['color_hover_border'];
    ?>
}

/* about css end */
</style>