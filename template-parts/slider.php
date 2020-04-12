<?php 
$images = get_field('home-slider','option');
if( $images ): ?>
    <div id="slider" class="slider-area">
        <div class="slick-hp-slider">
            <div class="home-slider slides">
                <?php foreach( $images as $image ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <p><?php echo esc_html($image['caption']); ?></p>
                <?php endforeach; ?>
                </div>
        </div>
    </div>
<?php endif; ?>