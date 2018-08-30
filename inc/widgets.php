<?php 

function widget_scripts() {
    wp_enqueue_script('mediaUpload', get_template_directory_uri() . '/inc/media-upload.js');
}

add_action('admin_enqueue_scripts', 'widget_scripts');

class Kda_Header_Widget extends WP_Widget {
    
    public function __construct() {
        $widget_opts = array(
            'classname' => 'kda-header-widget',
            'description' => 'The header section'
        );

        parent::__construct('kda-header', 'KDA Header', $widget_opts);
    }

    // back-end form
    function form( $instance ) {
		$small_title = isset( $instance['small_title'] ) ? esc_attr( $instance['small_title'] ) : '';
		$big_title = isset( $instance['big_title'] ) ? esc_attr( $instance['big_title'] ) : '';
		$tagline = isset( $instance['tagline'] ) ? esc_attr( $instance['tagline'] ) : '';
		$image_url 	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'small_title' ); ?>">Small Title</label>
			<input id="<?php echo $this->get_field_id( 'small_title' ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'small_title' ); ?>" type="text" value="<?php echo $small_title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'big_title' ); ?>">Big Title</label>
			<input id="<?php echo $this->get_field_id( 'big_title' ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'big_title' ); ?>" type="text" value="<?php echo $big_title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'tagline' ); ?>">Tagline</label>
			<input id="<?php echo $this->get_field_id( 'tagline' ); ?>" class="widefat" name="<?php echo $this->get_field_name( 'tagline' ); ?>" type="text" value="<?php echo $tagline; ?>" />
		</p>	
		<p>
			<label for="<?php echo $this->get_field_id('image_url'); ?>"><?php _e('Upload your image', 'talon'); ?></label>
			<input class="widefat custom_media_url" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" type="text" value="<?php echo $image_url; ?>" size="3" />
			<!-- TODO: showcase the chosen image here? -->
		</p>
		<p>
			<input type="button" class="button button-primary custom_media_button" id="custom_media_button" value="<?php echo esc_attr__('Upload Image', 'talon'); ?>" />
		</p>	    
		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['small_title'] = sanitize_text_field( $new_instance['small_title'] );
		$instance['big_title']   = sanitize_text_field( $new_instance['big_title'] );
		$instance['tagline']     = sanitize_text_field( $new_instance['tagline'] );
		$instance['image_url']   = esc_url_raw( $new_instance['image_url'] );
		return $instance;
	}
    
	function widget( $args, $instance ) {
		$small_title = ( ! empty( $instance['small_title'] ) ) ? $instance['small_title'] : 'placeholder';
		$big_title = ( ! empty( $instance['big_title'] ) ) ? $instance['big_title'] : 'placeholder';
		$tagline = ( ! empty( $instance['tagline'] ) ) ? $instance['tagline'] : 'placeholder';
		$image_url 	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';		
		?>
		<header class="masthead bg-primary text-white text-center">
			<div class="header container">
				<h4 class="mb-0"><?php echo $small_title ?></h4>
				<h1 class="mb-3"><?php echo $big_title ?></h1>
				<div class="header-image mb-3">
					<img class="style-svg" alt="header image" src="<?php echo $image_url ?>" />
				</div>
				<h4 class="font-weight-light mb-0"><?php echo $tagline ?></h4>
			</div>
		</header>
		<?php
	}
}