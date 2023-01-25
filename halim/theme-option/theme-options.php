<?php 
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'halim_framework';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => esc_html__('Theme Options', 'halim'),
      'menu_slug'  => 'halim-framework',
      'framework_title' => esc_html__('Halim Options Setting', 'halim')
    ) );
  
    //
    // Create a section for header top
    CSF::createSection($prefix, array(
        'id' => 'home_page',
        'title' => esc_html__('Header Top', 'halim')
    ));
    // create a section for logo
    CSF::createSection($prefix,  array(
        'parent' => 'home_page',
        'title' => esc_html__('Logo', 'halim'),
        'fields' => array(
            array(
                'id' => 'site_logo',
                'title' => esc_html__('Site Logo', 'halim'),
                'type' => 'text',
                'default' => 'Halim'
            )
        )
    ));
    // create a section for left side
    CSF::createSection($prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__( 'Header Left', 'halim' ),
        'fields' => array(
            array(
                'id' => 'header_left_switcher',
                'title' => esc_html__('Show/Hide', 'halim'),
                'type' => 'switcher',
                'default' => true
            ),
            array(
                'id' => 'top_email',
                'title' => esc_html__('Email', 'halim'),
                'type' => 'text',
                'default' => 'info@gmail.com',
                'dependency' => array('header_left_switcher', '==', 'true')
            ),
            array(
                'id' => 'top_number',
                'title' => esc_html__('Number', 'halim'),
                'type' => 'number',
                'default' => '123456789',
                'dependency' => array('header_left_switcher', '==', 'true')
            )
        )
    ));
    // create section for header top right

    CSF::createSection($prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Header Right', 'halim'),
        'fields' => array(
            array(
                'id' => 'switcher_socail',
                'type' => 'switcher',
                'default' => true,
                'title' => esc_html__('Show/Hide', 'halim')
            ),
            array(
                'id' => 'header_right_social',
                'type' => 'group',
                'button_title' => esc_html__('Add social', 'halim'),
                'dependency' => array('switcher_socail', '==', 'true'),
                'title' => esc_html__('Add new social', 'halim'),
                'fields' => array(
                    array(
                        'id' => 'icon_name',
                        'type' => 'text',
                        'title' => esc_html__('Icon name', 'halim'),
                        'default' => esc_html__('Facebook', 'halim')
                    ),
                    array(
                        'id' => 'social_icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'halim'),
                        'default' => 'fa fa-facebook'
                    ),
                    array(
                        'id' => 'socail_link',
                        'type' => 'text',
                        'title' => esc_html__('Link', 'halim'),
                        'default' => 'https://www.facebook.com'
                    )
                )
            )
        )
    ));

    // create header top bg color options

    CSF::createSection($prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Backgroud color', 'halim'),
        'fields' => array(
            array(
                'id' => 'bg_color',
                'title' => esc_html__('Color', 'halim'),
                'type' => 'color',
                'default' => '#635CDB'
            )
        )
    ));

    // create section show or of
    CSF::createSection($prefix, array(
        'parent' => 'home_page',
        'title' => esc_html__('Section', 'halim'),
        'fields' => array(
            array(
                'id' => 'section_show_of',
                'title' => esc_html__('Show/Hide', 'halim'),
                'type' => 'switcher',
                'default' => true,
                'subtitle' => esc_html__('This is optins only section show or hide', 'halim')
            )
        )
    ));

    // create a about section

    CSF::createSection($prefix, array(
        'id' => 'about_section',
        'title' => esc_html__('About area', 'halim')
    ));

    // about heading section

    CSF::createSection($prefix, array(
        'parent' => 'about_section',
        'title' => esc_html__('About Heading', 'halim'),
        'fields' => array(
            array(
                'id' => 'about_switcher',
                'title' => esc_html__( 'Show/Hide', 'halim'),
                'type' => 'switcher',
                'default' => true
            ),
            array(
                'id' => 'abt_head_sub',
                'title' => esc_html__('Sub title', 'halim'),
                'type' => 'text',
                'default' => 'who we are?',
                'dependency' => array('about_switcher', '==', 'true')
            ),
            array(
                'id' => 'abt_head_title',
                'title' => esc_html__('Title', 'halim'),
                'type' => 'text',
                'default' => 'ABOUT US',
                'dependency' => array('about_switcher', '==', 'true')
            ),
            array(
                'id' => 'abt_head_des',
                'title' => esc_html__('Description', 'halim'),
                'type' => 'textarea',
                'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d',
                'dependency' => array('about_switcher', '==', 'true')
            )
        )
    ));

    // create a section for about content area

    CSF::createSection($prefix, array(
        'parent' => 'about_section',
        'title' => esc_html__('About left content area', 'halim'),
        'fields' => array(
            array(
                'id' => 'about_left_switcher',
                'title' => esc_html__('Show/Hide', 'halim'),
                'type' => 'switcher',
                'default' => true
            ),
            array(
                'id' => 'abt_left_title',
                'title' => esc_html__('Content title', 'halim'),
                'type' => 'text',
                'default' => 'Welcome To Halim',
                'dependency' => array('about_left_switcher', '==', 'true')
            ),
            array(
                'id' => 'abt_left_content',
                'title' => esc_html__('Content', 'halim'),
                'type' => 'textarea',
                'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry',
                'dependency' => array('about_left_switcher', '==', 'true')
            ),
            array(
                'id' => 'abt_btn_text',
                'title' => esc_html__('Button text', 'halim'),
                'type' => 'text',
                'default' => 'READ MORE',
                'dependency' => array('about_left_switcher', '==', 'true')
            ),
            array(
                'id' => 'abt_btn_link',
                'title' => esc_html__('Button link', 'halim'),
                'type' => 'text',
                'default' => 'http://localhost/work/theme-dev/about/',
                'dependency' => array('about_left_switcher', '==', 'true')
            ),
            array(
                'id' => 'abt_btn_bg',
                'title' => esc_html__('Button color', 'halim'),
                'type' => 'color',
                'default' => '#635CDB',
                'dependency' => array('about_left_switcher', '==', 'true')
            )
        )
    ));

    // create a section for about right content
    CSF::createSection($prefix, array(
        'parent' => 'about_section',
        'title' => esc_html__('About right content', 'halim'),
        'fields' => array(
            array(
                'id' => 'abt_right_group',
                'title' => esc_html__('Add new content', 'halim'),
                'type' => 'group',
                'fields' => array(
                    array(
                        'id' => 'mission_title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'halim'),
                        'default' => 'Our Mission'
                    ),
                    array(
                        'id' => 'mission_icon',
                        'type' => 'icon',
                        'title' => esc_html__('Upload Icon', 'halim'),
                        'default' => 'fab fa-laptop'
                    ),
                    array(
                        'id' => 'mission_des',
                        'type' => 'textarea',
                        'title' => esc_html__('Description', 'halim'),
                        'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry'
                    )
                )
            ),
            array(
                'id' => 'about_group_color',
                'title' => esc_html__('Change Color', 'halim'),
                'type' => 'color_group',
                'options' => array(
                    'color_abt_icon' => 'Icon color',
                    'color_brdr_icon_color' => 'Border Color',
                    'color_abt_hover_bg' => 'Hover bg color',
                    'color_abt_hover_icon' => 'Hover icon color',
                    'color_hover_border' => 'Hover Border color'
                ),
                'default' => array(
                    'color_abt_icon' => '#635CDB',
                    'color_brdr_icon_color' => '#635CDB',
                    'color_abt_hover_bg' => '#635CDB',
                    'color_abt_hover_icon' => '#fff',
                    'color_hover_border' => '#635CDB'
                )
            )
        )
    ));

    // create a section for faq and skill

    CSF::createSection($prefix, array(
        'id' => 'faq_and_skill',
        'title' => esc_html__('Faq and Skill', 'halim')
    ));
    // faq section sart
    CSF::createSection($prefix, array(
        'parent' => 'faq_and_skill',
        'title' => esc_html__('Faq', 'halim'),
        'fields' => array(
            array(
                'id' => 'faq_switcher',
                'type' => 'switcher',
                'title' => esc_html__('Show/Hide', 'halim'),
                'default' => true
            ),
            array(
                'id' => 'faq_content',
                'title' => esc_html__('Add a question', 'halim'),
                'type' => 'group',
                'dependency' => array('faq_switcher', '==', 'true'),
                'button_title' => 'add a question',
                'fields' => array(
                    array(
                        'id' => 'faq_title',
                        'title' => esc_html('Title', 'halim'),
                        'type' => 'text',
                        'default' => 'add a faq'
                    ),
                    array(
                        'id' => 'faq_des',
                        'title' => esc_html__('Descriptions', 'halim'),
                        'type' => 'textarea',
                        'default' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolo'
                    )
                )
            )
        )
    ));
    // faq section end

    // skill section start
    CSF::createSection($prefix, array(
        'parent' => 'faq_and_skill',
        'title' => esc_html__('Skil', 'halim'),
        'fields' => array(
            array(
                'id' => 'skill_switcher',
                'title' => esc_html__('Show/Hide', 'halim'),
                'type' => 'switcher',
                'default' => true
            ),
            array(
                'id' => 'skill_content',
                'title' => esc_html__('Skill content', 'halim'),
                'type' => 'group',
                'dependency' => array('skill_switcher', '==', 'true'),
                'fields' => array(
                    array(
                        'id' => 'skill_name',
                        'title' => esc_html__('skill name', 'halim'),
                        'type' => 'text',
                        'default' => 'Html'
                    ),
                    array(
                        'id' => 'skill_percentence',
                        'title' => esc_html__('Skill percentence', 'halim'),
                        'type' => 'number',
                        'default' => '90'
                    )
                )
            )
        )
    ));
    // skill section end

    // section heading start
    CSF::createSection($prefix, array(
        'id' => 'section_heading',
        'title' => esc_html__('Section Heading', 'halim'),
    ));
    // service section heading
    CSF::createSection($prefix, array(
        'parent' => 'section_heading',
        'title' => esc_html__('Service header content', 'halim'),
        'fields' => array(
            array(
                'id' => 'service_sub_title',
                'title' => esc_html__('Sub Title', 'halim'),
                'type' => 'text',
                'default' => 'who we are?'
            ),
            array(
                'id' => 'service_title',
                'title' => esc_html__('Title', 'halim'),
                'type' => 'text',
                'default' => 'OUR SERVICES'
            ),
            array(
                'id' => 'service_des',
                'title' => esc_html__('Descriptions', 'halim'),
                'type' => 'textarea',
                'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
            ),
        )
    ));

    // team section

    CSF::createSection($prefix, array(
        'parent' => 'section_heading',
        'title' => esc_html__('Team header content', 'halim'),
        'fields' => array(
            array(
                'id' => 'team_sub_title',
                'title' => esc_html__('Sub Title', 'halim'),
                'type' => 'text',
                'default' => 'who we are?'
            ),
            array(
                'id' => 'team_title',
                'title' => esc_html__('Title', 'halim'),
                'type' => 'text',
                'default' => 'CREATIVE TEAM'
            ),
            array(
                'id' => 'team_des',
                'title' => esc_html__('Descriptions', 'halim'),
                'type' => 'textarea',
                'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
            ),
        )
    ));

    // testimonial section

    CSF::createSection($prefix, array(
        'parent' => 'section_heading',
        'title' => esc_html__('Testimonial header content', 'halim'),
        'fields' => array(
            array(
                'id' => 'testi_sub_title',
                'title' => esc_html__('Sub Title', 'halim'),
                'type' => 'text',
                'default' => 'who we are?'
            ),
            array(
                'id' => 'testi_title',
                'title' => esc_html__('Title', 'halim'),
                'type' => 'text',
                'default' => 'WHAT CLIENT SAY'
            ),
            array(
                'id' => 'testi_des',
                'title' => esc_html__('Descriptions', 'halim'),
                'type' => 'textarea',
                'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
            ),
        )
    ));

    // letest blog section

    CSF::createSection($prefix, array(
        'parent' => 'section_heading',
        'title' => esc_html__('Blog header content', 'halim'),
        'fields' => array(
            array(
                'id' => 'blog_sub_title',
                'title' => esc_html__('Sub Title', 'halim'),
                'type' => 'text',
                'default' => 'who we are?'
            ),
            array(
                'id' => 'blog_title',
                'title' => esc_html__('Title', 'halim'),
                'type' => 'text',
                'default' => 'LATEST NEWS'
            ),
            array(
                'id' => 'blog_des',
                'title' => esc_html__('Descriptions', 'halim'),
                'type' => 'textarea',
                'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
            ),
        )
    ));
    // section heading end

    // cta section area 
    CSF::createSection($prefix, array(
        'id' => 'cta_section',
        'title' => esc_html__('Cta Section', 'halim')
    ));

    // cta section
    CSF::createSection($prefix, array(
        'parent' => 'cta_section',
        'title' => esc_html__('cta content', 'halim'),
        'fields' => array(
            array(
                'id' => 'cta_switcher',
                'title' => esc_html__('Show/Hide', 'halim'),
                'type' => 'switcher',
                'default' => true
            ),
            array(
                'id' => 'cta_title',
                'title' => esc_html__('Title', 'halim'),
                'type' => 'text',
                'default' => 'Best Solution For Your Business',
                'dependency' => array('cta_switcher', '==', 'true')
            ),
            array(
                'id' => 'cta_des',
                'title' => esc_html__('Description', 'halim'),
                'type' => 'textarea',
                'default' => 'The Can Be Used On Larger Scale Projectss As Well As Small Scale Projectss',
                'dependency' => array('cta_switcher', '==', 'true')
            ),
            array(
                'id' => 'cta_btn_text',
                'title' => esc_html__('Btn text', 'halim'),
                'type' => 'text',
                'default' => 'CONTACT US',
                'dependency' => array('cta_switcher', '==', 'true')
            ),
            array(
                'id' => 'cta_btn_link',
                'title' => esc_html__('Btn link', 'halim'),
                'type' => 'text',
                'default' => '/contact',
                'dependency' => array('cta_switcher', '==', 'true')
            )
        )
    ));
    // contact info
    CSF::createSection($prefix, array(
        'parent' => 'cta_section',
        'title' => esc_html__('Contact info', 'halim'),
        'fields' => array(
            array(
                'id' => 'cont_info_switch',
                'title' => esc_html__('Show/Hide', 'halim'),
                'type' => 'switcher',
                'default' => true
            ),
            array(
                'id' => 'contact_info',
                'title' => esc_html__('Contact info content', 'halim'),
                'dependency' => array('cont_info_switch', '==', 'true'),
                'type' => 'group',
                'fields' => array(
                    array(
                        'id' => 'address',
                        'title' => esc_html__('Title', 'halim'),
                        'type' => 'text',
                        'default' => 'address'
                    ),
                    array(
                        'id' => 'info_icon',
                        'title' => esc_html__('Icon', 'halim'),
                        'type' => 'icon',
                        'default' => 'fa fa-map-marker'
                    ),
                    array(
                        'id' => 'info',
                        'title' => esc_html__('Info', 'halim'),
                        'type' => 'text',
                        'default' => '11223344'
                    )
                )
            )
        )
    ));

    // create a map section

    CSF::createSection($prefix, array(
        'parent' => 'cta_section',
        'title' => esc_html__('Map', 'halim'),
        'fields' => array(
            array(
                'id' => 'map',
                'title' => esc_html__('Map info', 'halim'),
                'type' => 'map'
            ) 
        )
    ));
    // create a section for copy wright

    CSF::createSection($prefix, array(
        'parent' => 'cta_section',
        'title' => esc_html__('Copy content', 'halim'),
        'fields' => array(
            array(
                'id' => 'copy_text',
                'title' => esc_html__('Title', 'halim'),
                'type' => 'text',
                'default' => '© All Rights Reserved 2020'
            ),
            array(
                'id' => 'copy_socails',
                'title' => esc_html__('Footer social', 'halim'),
                'type' => 'group',
                'fields' => array(
                    array(
                        'id' => 'footer_social_icon',
                        'title' => esc_html__('Icon', 'halim'),
                        'default' => 'fab fa-facebook',
                        'type' => 'icon'
                    ),
                    array(
                        'id' => 'footer_social_link',
                        'title' => esc_html__('Link', 'halim'),
                        'type' => 'text',
                        'default' => 'https://www.facebook.com'
                    )
                )
            )
        )
    ));
}
?>