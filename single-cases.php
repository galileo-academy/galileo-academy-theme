<?php get_header(); ?>

<?php if( get_field( 'logo_groot' ) ): ?>
<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_title() ?></p>
            <img src="<?php the_field("logo_groot") ?>" alt="">
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( 'omschrijving_content' ) && get_field( 'omschrijving_screenshot' ) ): ?>
<div class="omschrijving">
    <div class="omschrijving__inner">
        <div class="omschrijving__inner--content">
            <?php the_field('omschrijving_content') ?>
            <div class="omschrijving_screenshot">
                <img src="<?php the_field('omschrijving_screenshot') ?>" alt="">
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( 'project_process_content' ) ): ?>
<div class="project_process">
    <div class="project_process__inner">
        <div class="project_process__inner--content">
            <?php the_field('project_process_content') ?>
            <div class="URL-website">
                <p><strong>Bekijk Website</strong></p>
                <p>URL: <a href="<?php the_field('website_url') ?>" target="_blank"><?php the_title() ?></a></p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if (get_field('is_er_een_quote')) { ?>
<div class="quotes">
    <div class="quotes__inner">
        <div class="quotes__inner--content">
            <h1>Quote van klant</h1>
            <?php the_field('quote_content') ?>
            <?php if( have_rows('klant') ): ?>
            <?php while ( have_rows('klant') ) : the_row(); ?>
                <h3 class="quote-person"><?php the_sub_field('naam') ?></h3> 
                <p class="p-small"><?php the_sub_field('functie') ?> | <?php the_sub_field('bedrijfsnaam') ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php } ?>

<?php if( get_field( 'logo_groot' ) ): ?>
<div class="cta-bottom">
    <div class="cta-bottom__inner">
        <div class="cta-bottom__inner--content">
            <?php the_field('section_content', 'option') ?>    
        </div>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>