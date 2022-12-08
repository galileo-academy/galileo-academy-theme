<?php /* Template Name: Privacy Policy Template */ ?>
<?php get_header(); ?>

<div class="intro">
    <div class="intro__inner">
        <h1><?php the_title() ?></h1>
    </div>
</div>

<?php if ( have_rows( 'content_blocks' ) && !empty( have_rows('content_blocks' ) ) ) { ?>
<?php while( have_rows( 'content_blocks' ) ): the_row(); ?>
<div class="privacy-policy">   
    <div class="privacy-policy__inner">
        <div class="privacy-policy__inner--block">
            <h2><?php the_sub_field('titel') ?></h2>
            <?php the_sub_field('content') ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php } ?>

<?php get_footer(); ?>