<?php 
   get_header();
   // template name: Contact
?>
      <!-- Header Area Start -->
      
<?php $config = get_option('halim_framework'); ?>
<?php get_template_part('breadcumb/breadcumb'); ?>
<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row text-center">
                     <?php 
                        if($config['cont_info_switch']){
                        
                        $contact_infos = $config['contact_info'];
                        foreach($contact_infos as $contact_info){
                     ?>
                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo esc_attr($contact_info['info_icon']);?>"></i>
                           <h4><?php echo esc_html($contact_info['address']);?> <span><?php echo esc_html($contact_info['info']);?></span></h4>
                        </div>
                     </div>
                     <?php
                        }}
                     ?>
                  </div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="contact-form">
                           <form action="#">
                           <?php echo do_shortcode('[contact-form-7 id="188" title="halim-contact"]'); ?>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <?php 
                           $maps = $config['map'];
                        ?>
                        <div class="google-map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5785846.583418618!2d-90.75907970166762!3d44.9208869696666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4caa3dc7ca0411%3A0x97dd48597a62c9b3!2sMichigan%2C+USA!5e0!3m2!1sen!2sbd!4v1540614431885?/lat=<?php echo $maps['latitude'];?>&long=<?php echo $maps['longitude'];?>"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->
 <!-- CTA Area Start -->
 <?php get_footer();?>