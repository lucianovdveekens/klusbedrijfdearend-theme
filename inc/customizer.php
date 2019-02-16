<?php

if ( class_exists( 'WP_Customize_Control' ) ) {
    class WP_Customize_Project_Control extends WP_Customize_Control {

        public $type = 'project';

        public function render_content() { 
		?>
			<label>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
				<textarea rows="5" style="width:100%;" <?php $this->link();?>><?php echo esc_textarea($this->value()); ?></textarea>
			</label> 
		<?php
  		}
    }
}

function kda_customize_register( $wp_customize )
{
    /* Site title and description */
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    /* About me */
    $wp_customize->add_section('about_me', array(
        'title' => 'Over mij',
        'priority' => 30,
    ));
    $wp_customize->add_setting('about_me_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_me_image', array(
        'label' => 'Foto',
        'section' => 'about_me',
        'settings' => 'about_me_image',
    )));
    $wp_customize->add_setting('left_column', array(
        'default' => 'placeholder',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('left_column_control', array(
        'label' => 'Linker kolom',
        'type' => 'textarea',
        'section' => 'about_me',
        'settings' => 'left_column',
    ));
    $wp_customize->add_setting('right_column', array(
        'default' => 'placeholder',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('right_column_control', array(
        'label' => 'Rechter kolom',
        'type' => 'textarea',
        'section' => 'about_me',
        'settings' => 'right_column',
    ));

    /* Contact */
    $wp_customize->add_section('contact', array(
        'title' => 'Contact',
        'priority' => 30,
    ));
    $wp_customize->add_setting('address', array(
        'default' => 'placeholder',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('address_control', array(
        'label' => 'Adres',
        'type' => 'textarea',
        'section' => 'contact',
        'settings' => 'address',
    ));

    /* Color */
    $wp_customize->add_section('colors', array(
        'title' => 'Kleuren',
        'priority' => 30,
    ));
    $wp_customize->add_setting('background_primary_color', array(
        'default' => '#292929',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_primary_color_control', array(
        'label' => 'Background Primary Color',
        'section' => 'colors',
        'settings' => 'background_primary_color',
    )));
    $wp_customize->add_setting('background_secondary_color', array(
        'default' => '#000000',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_secondary_color_control', array(
        'label' => 'Background Secondary Color',
        'section' => 'colors',
        'settings' => 'background_secondary_color',
    )));
}

add_action('customize_register', 'kda_customize_register');

function cd_customizer()
{
    wp_enqueue_script('cd_customizer', get_template_directory_uri() . '/js/customizer.js',
        array('jquery', 'customize-preview'), '', true);
}

add_action('customize_preview_init', 'cd_customizer');
