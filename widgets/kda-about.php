<?php

class Kda_About_Widget extends WP_Widget
{

    public function __construct()
    {
        $widget_opts = array(
            'classname' => 'kda-about-widget',
            'description' => 'The about section',
        );

        parent::__construct('kda-about', 'KDA About', $widget_opts);
    }

    public function form($instance)
    {
        $left_column = isset($instance['left_column']) ? esc_attr($instance['left_column']) : '';
        $right_column = isset($instance['right_column']) ? esc_attr($instance['right_column']) : '';
        $image_url = isset($instance['image_url']) ? esc_url($instance['image_url']) : '';?>

        <div class="flex-space-around">
          <div>
            <p>
              <div><label for="<?php echo $this->get_field_id('image_url'); ?>">Image</label></div>
              <input type="hidden" class="custom_media_url" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" type="text" value="<?php echo $image_url; ?>" size="3" />
              <img class="custom_media_image" width="150" height="150" alt="chosen image" src="<?php echo $image_url; ?>">
            </p>
            <p>
              <input type="button" class="button button-primary custom_media_button" id="custom_media_button" value="Upload Image" />
            </p> 
          </div>
          <div>
            <p>
              <label for="<?php echo $this->get_field_id('left_column'); ?>">Left Column</label>
              <textarea id="<?php echo $this->get_field_id('left_column'); ?>" class="input" name="<?php echo $this->get_field_name('left_column'); ?>" rows="10" cols="50"><?php echo $left_column; ?></textarea>
            </p>
          </div>
          <div>
            <p>
              <label for="<?php echo $this->get_field_id('right_column'); ?>">Right Column</label>
              <textarea id="<?php echo $this->get_field_id('right_column'); ?>" class="input" name="<?php echo $this->get_field_name('right_column'); ?>" rows="10" cols="50"><?php echo $right_column; ?></textarea>
            </p>
          </div>
        </div> <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['left_column'] = sanitize_textarea_field($new_instance['left_column']);
        $instance['right_column'] = sanitize_textarea_field($new_instance['right_column']);
        $instance['image_url'] = esc_url_raw($new_instance['image_url']);
        return $instance;
    }

    public function widget($args, $instance)
    {
        $left_column = (!empty($instance['left_column'])) ? $instance['left_column'] : 'placeholder';
        $right_column = (!empty($instance['right_column'])) ? $instance['right_column'] : 'placeholder';
        $image_url = isset($instance['image_url']) ? esc_url($instance['image_url']) : '';?>

        <section class="text-white mb-0" id="about">
          <div class="container">
            <h2 class="text-center text-secondary">Over</h2>
            <div class="black-logo-hline"></div>
            <div class="row">
              <div class="about-img-container col-lg-4 ml-auto">
                <img class="img-fluid about-img" src="<?php echo $image_url; ?>" alt="Een foto van Arend van der Veekens">
              </div>
              <div class="col-lg-4 ml-auto">
                <p class="lead text-secondary">
                  <?php echo nl2br($left_column) ?>
                </p>
              </div>
              <div class="col-lg-4 ml-auto">
                <p class="lead text-secondary">
                  <?php echo nl2br($right_column) ?>
                </p>
              </div>
            </div>
          </div>
       </section> <?php
    }
}