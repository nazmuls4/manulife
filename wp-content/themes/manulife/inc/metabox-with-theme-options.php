<?php if ( ! defined( 'ABSPATH' ) ) { die; } 

function manulife_metabox_options( $options ) {

  $options      = array(); 

 // -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'manulife_page_option',
  'title'     => esc_html__( 'Page Breadcum Options', 'manulife' ),
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'  => 'manulife_page_content',     

      'fields' => array(
         array(
          'id'    => 'enable_breadcum',
          'type'  => 'switcher',
          'title' => esc_html__('Enable Breadcum', 'manulife'),
          'default' => false,
          'desc' => esc_html__('Enable Custom Breadcum Area', 'manulife'),
        ),      
        array(
          'id'    => 'custom_page_title',
          'type'  => 'text',
          'title' => esc_html__('Custom breadcum title','manulife'),        
          'desc' =>  esc_html__('Type Custom breadcum title','manulife'), 
          'dependency'   => array( 'enable_breadcum', '==', 'true' ),
        ) ,   
      
        array(
          'id'    => 'breadcum_description',
          'type'  => 'textarea',
          'title' => esc_html__('Custom breadcum description','manulife'),        
          'desc' =>  esc_html__('Type Custom breadcum description','manulife'),
          'default' =>  esc_html__('We’re passionate about helping you curate a lifestyle that fits your unique needs, and creating financial solutions for every stage of life. We combine our services using an integrative approach to help you realize your financial dream.','manulife'),
          'dependency'   => array( 'enable_breadcum', '==', 'true' ),
        )    
 

      ), 
    ), 
  ),

);

 // -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------


  return $options;

}
add_filter( 'cs_metabox_options', 'manulife_metabox_options' );



// Framework Options

function manulife_framework_options( $options ) {

  $options      = array(); 
    
   

    $options[]   = array(
      'name'     => 'manulife_logo_options',
      'title'    => esc_html__( 'Logo Setting', 'manulife' ),
      'icon'     => 'fa fa-camera',
      'fields'      => array(

          // begin: a field
          array(
            'id'      => 'enable_logo',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Site Logo', 'manulife' ),
            'desc'   => esc_html__( 'Do you want Enable Site Logo? If you want yes ? Just Enable the Switcher', 'manulife' ),
            'default'    => false,
          ),

          array(
            'id'      => 'upload_logo',
            'type'    => 'image',
            'title'   => esc_html__( 'Uplaod Logo', 'manulife' ),
            'desc'   => esc_html__( 'Do you want to Uplaod Logo? If you want Just Enable the Switcher', 'manulife' ),
            'help'   => esc_html__( 'Make sure your image size is : 120 By 62 px', 'manulife' ),
            'dependency'   => array( 'enable_logo', '==', 'true' ),
          ),

          array(
            'id'      => 'text_logo',
            'type'    => 'text',
            'title'   => esc_html__( 'Text Logo', 'manulife' ),
            'desc'   => esc_html__( 'Type Text Logo', 'manulife' ),
            'default'    => esc_html__( 'manulife', 'manulife' ),
            'dependency'   => array( 'enable_logo', '==', 'false' ),
          ),
          

        ), // end: fields
    );

 

    $options[]   = array(
      'name'     => 'manulife_social_link_options',
      'title'    => esc_html__( 'Social Link Setting', 'manulife' ),
      'icon'     => 'fa fa-signal',
      'fields'      => array(

          // begin: a field
          array(
            'id'              => 'social_link',
            'type'            => 'group',
            'title'           => esc_html__( 'Social link', 'manulife' ),
            'button_title'    => 'Add New',
            'accordion_title' => esc_html__( 'Add New Social link', 'manulife'),
            'fields'          => array(

              array(
                'id'      => 'social_link_icon',
                'type'    => 'icon',
                'title'   => esc_html__( 'Social link Icon', 'manulife' ),
                'desc'   => esc_html__( 'Select Social link Icon', 'manulife' ),
                'default'    => esc_attr__( 'fa fa-facebook', 'manulife' ),
              ),
              array(
                'id'      => 'social_link',
                'type'    => 'text',
                'title'   => esc_html__( 'Social link', 'manulife' ),
                'desc'   => esc_html__( 'Type Social link', 'manulife' ),
                'default'    => esc_html__( 'http://facebook.com/', 'manulife' ),
              ),              
                           
             
            )
          ),
          

        ), // end: fields
    );

  
    

    $options[]   = array(
      'name'     => 'manulife_footer_options',
      'title'    => esc_html__( 'Footer setting', 'manulife' ),
      'icon'     => 'fa fa-flag',
      'fields'      => array(

          // begin: a field
          
         
          array(
            'id'      => 'footer_copyright_text',
            'type'    => 'textarea',
            'sanitize'    => false,
            'title'   => esc_html__( 'Footer Copyright text', 'manulife' ),
            'desc'   => esc_html__( 'Type Footer Copyright text', 'manulife' ),
            'default'    => esc_html__( '© Copyright 2020 manulife Company - All Rights Reserved', 'manulife' ),
          ),


          // begin: a field
          array(
            'id'              => 'footer_contact_info',
            'type'            => 'group',
            'title'           => esc_html__( 'Footer contact info', 'manulife' ),
            'button_title'    => 'Add New',
            'accordion_title' => esc_html__( 'Add New Footer contact info', 'manulife'),
            'fields'          => array(

              array(
                'id'      => 'info_icon',
                'type'    => 'icon',
                'title'   => esc_html__( 'Select icon', 'manulife' ),
                'desc'   => esc_html__( 'Type linkType link', 'manulife' ),
                'default'    => esc_attr__( 'fas fa-phone', 'manulife' ),
              ),
              array(
                'id'      => 'info_link',
                'type'    => 'text',
                'title'   => esc_html__( 'Type link', 'manulife' ),
                'desc'   => esc_html__( 'Type linkType link', 'manulife' ),
                'default'    => esc_attr__( 'tel:1-888-286-8122', 'manulife' ),
              ),
              array(
                'id'      => 'link_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Info text', 'manulife' ),
                'desc'   => esc_html__( 'Type Info text', 'manulife' ),
                'default'    => esc_html__( '1-888-286-8122', 'manulife' ),
              ),              
                           
             
            )
          ),

        ), // end: fields
    );
  

  

  return $options;

}
add_filter( 'cs_framework_options', 'manulife_framework_options' );


// Framework Setting

function manulife_framework_settings( $settings ) {

  $settings      = array(); 

  $settings           = array(
    'menu_title'      => esc_html__( 'Theme Options', 'manulife'),
    'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
    'menu_slug'       => 'manulife-theme-option',
    'ajax_save'       => true,
    'show_reset_all'  => true,
    'framework_title' => esc_html__( 'manulife Theme Options by templateacademy', 'manulife'),
  );
  return $settings;

}
add_filter( 'cs_framework_settings', 'manulife_framework_settings' );




// Shortcode Setting
function manulife_shortcode_options( $options ) {

  $options      = array(); 

  return $options;

}
add_filter( 'cs_shortcode_options', 'manulife_shortcode_options' );

// Customize Setting
function manulife_customize_options( $options ) {

  $options      = array(); 

  return $options;

}
add_filter( 'cs_customize_options', 'manulife_customize_options' );


