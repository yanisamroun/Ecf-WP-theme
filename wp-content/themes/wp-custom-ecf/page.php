<?php

get_header();

if ( have_posts() ):
    the_post();
    ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
        <div><?php the_post_thumbnail( 'medium' ); ?></div>
    </article>
    <?php
endif;

get_footer();