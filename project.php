<div class="col-sm-6 col-lg-4">
    <div class="portfolio-item d-block mx-auto">
        <div class="slider">
            <?php 
            $images = get_attached_media('image', $post->ID);
            foreach($images as $image) { ?>
                <img src="<?php echo wp_get_attachment_image_src($image->ID,'full')[0]; ?>" />
            <?php } ?>
        </div>
    </div>
</div>