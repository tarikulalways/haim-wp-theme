<?php 
/**
* Include the TGM_Plugin_Activation class.
*/
    get_template_part('/plugin-install/class-tgm-plugin-activation');

    if(!function_exists('halim_plugins_install')){
        function halim_plugins_install(){
            $plugins = array(
                array(
                    'name' => 'Advanced Custom Fields',
                    'slug' => 'advanced-custom-fields',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Font Awesome Field',
                    'slug' => 'advanced-custom-fields-font-awesome',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Contact Form 7',
                    'slug' => 'contact-form-7',
                    'required' => true,
                    'force_deactivation' => true
                ),
                array(
                    'name' => 'Codestar Framework',
                    'slug' => 'codestar-framework',
                    'required' => true,
                    'force_deactivation' => true,
                    'source' => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip'
                ),
                array(
                    'name' => 'Custom post type',
                    'slug' => 'halim-custom-post-type-plugin',
                    'required' => true,
                    'force_deactivation' => true,
                    'source' => 'https://github.com/tarikulalways/halim-custom-post-type/archive/refs/heads/main.zip'
                ),
                array(
                    'name' => 'One Click Demo Import',
                    'slug' => 'one-click-demo-import',
                    'required' => true,
                    'required' => true,
                    'force_deactivation' => true
                )
            );

            $config = array(
                'id' => 'halim',
                'menu' => 'tgmpa-install-plugins',
                'parent_slug' => 'themes.php',
                'capability' => 'edit_theme_options',
                'has_notices' => true,          
            );
            tgmpa($plugins, $config);
        }
    }
    add_action('tgmpa_register', 'halim_plugins_install');
?>