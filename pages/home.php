<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

<div class="quotes">
    <?php
    if( have_rows('beoordelingen') ):
    while ( have_rows('beoordelingen') ) : the_row();
    ?>
    <div class="quotes__inner">
        <p class="quote">“<?php the_sub_field('content', false) ?>”</p>
        <p class="p-small quote-person"><?php the_sub_field('naam') ?><br/> <?php the_sub_field('functie') ?> | <?php the_sub_field('bedrijf') ?></p>
        <a href="/" class="button yellow">Meer beoordelingen lezen</a>
    </div>
    <?php 
    endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>