<?php $config = get_option('halim_framework'); ?>
<?php 
   if($config['cta_switcher']){
?>
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4><?php echo esc_html($config['cta_title']); ?> <span><?php echo esc_html($config['cta_des']); ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php echo esc_url($config['cta_btn_link']);?>" class="box-btn"><?php echo esc_html($config['cta_btn_text']) ?> <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<?php
   }
?>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <?php  dynamic_sidebar('footer_one');?>
         </div>
         <div class="col-lg-2 col-md-6">
         <?php  dynamic_sidebar('footer_two');?>
         </div>
         <div class="col-lg-4 col-md-6">
         <?php  dynamic_sidebar('footer_three');?>
         </div>
         <div class="col-lg-3 col-md-6">
         <?php  dynamic_sidebar('footer_four');?>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p><?php echo esc_html($config['copy_text']); ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <?php 
                  $copy_socails = $config['copy_socails'];
                  if($copy_socails){
                  foreach($copy_socails as $copy_socail){
               ?>
               <li><a href="<?php echo esc_url($copy_socail['footer_social_link']);?>"><i class="<?php echo esc_attr($copy_socail['footer_social_icon']);?>"></i></a></li>
               <?php
                  }}
               ?>
            </ul>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer();?>
</body>
</html>