<div class="row">
    <div class="col-lg-6 review-description">
        <p class="lead">
            <?php echo preg_replace('/<img[^>]+./', '', get_the_content()); ?>
        </p>
        <p class="font-italic">
            <?php echo get_field( 'reviewer' ); ?>
        </p>
    </div>
    <div class="col-lg-6 review-image">
        <img class="black-border" src="<?php echo get_field( 'review_image' ); ?>" />
    </div>
</div>