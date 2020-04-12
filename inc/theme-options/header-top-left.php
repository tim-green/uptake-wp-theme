<?php if( have_rows('top_bar', 'option') ): ?>


<?php while( have_rows('top_bar', 'option') ): the_row(); ?>

    <span><?php the_sub_field('top_left_message'); ?></span>

<?php endwhile; ?>


<?php endif; ?>