<div class="row">
    <div class="col-lg-6 review-description">
        <p class="lead">
            <?php echo get_field( 'review' ); ?> 
        </p>
        <p class="font-italic">
            <?php echo get_field( 'reviewer' ); ?>
        </p>
    </div>
    <div class="col-lg-6 review-image">
        <img class="black-border" src="<?php echo wp_get_attachment_image_src( get_field( 'review_image' ), 'large' )[0]; ?>" />
    </div>
</div>