<?php get_header(); ?>

<?php if( get_field( 'hero_afbeelding' ) ): ?>
<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_title() ?></p>
            <img src="<?php the_field("hero_afbeelding") ?>" alt="">
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( 'intro_titel' ) && get_field( 'intro_content' ) ): ?>
<div class="intro">
    <div class="intro__inner">
        <div class="intro__inner--content">
            <h1><?php the_field('intro_titel') ?></h1>
            <?php the_field('intro_content') ?>
            <a href="/contact" class="button yellow">Contact opnemen</a>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( have_rows('werkwijze_blocks') ): ?>
<div class="werkwijze">
    <div class="werkwijze__inner">
        <div class="werkwijze__inner--content">
            <h1 class="center">Onze werkwijze</h1>
            <div class="content-blocks">
                <?php while ( have_rows('werkwijze_blocks') ) : the_row(); ?>
                <div>
                    <?php the_sub_field('content') ?>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if( have_rows('fa_questions') ): ?>
<div class="FAQ">
    <div class="FAQ__inner">
        <div class="FAQ__inner--content">
            <h1>FAQ</h1>
            <div class="loop">
                <?php while ( have_rows('fa_questions') ) : the_row(); ?>
                <div class="block">
                    <h3 class="accordion"><?php the_sub_field('vraag') ?></h3>
                    <div class="panel">
                        <?php the_sub_field('antwoord') ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field( 'hero_afbeelding' ) ): ?>
<div class="cta-bottom">
    <div class="cta-bottom__inner">
        <div class="cta-bottom__inner--content">
            <?php the_field('section_content', 'option') ?>    
        </div>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>