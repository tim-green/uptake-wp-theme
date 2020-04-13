<div id="slider" class="slider-area">
        <div class="slick-hp-slider">
        <?php if( have_rows('home-slider','option') ): ?>
            <div class="home-slider slides">
<?php while( have_rows('home-slider','option') ): the_row(); 
    // slider vars
    $slider_image = get_sub_field('slider_image','option');
    $slider_heading = get_sub_field('slider_heading','option');
    $slider_caption = get_sub_field('slider_caption','option');
    $slider_button = get_sub_field('slider_button','option');
    ?>
   
        <div class="slide-container">
        <img src="<?php echo $slider_image; ?>" alt="<?php echo $image['alt'] ?>" />
        <div class="slider-content" style="display:none">
            <h2><?php echo $slider_heading; ?></h2>
            <p><?php echo $slider_caption; ?></p>
        </div>
            <?php if( $slider_button ): ?>
                <a href="<?php echo $slider_button; ?>"></a>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
                </div>
        </div>
    </div>
