<?php /* Template Name: Diensten Template */ ?>
<?php get_header(); ?>

<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_field("hero_titel") ?></p>
            <img src="<?php the_field("hero_afbeelding") ?>" alt="">
            <a class="cta blue diensten-cta" href="/contact">Gratis Advies</a>
        </div>
    </div>
</div>

<div class="logo-en-huisstijl">
    <div class="logo-en-huisstijl__inner">
        <div class="logo-en-huisstijl__inner--left">
            <img src="<?php the_field('huisstijl_afbeelding') ?>" alt="">
        </div>
        <div class="logo-en-huisstijl__inner--right">
            <?php the_field('huisstijl_content'); ?>
            <a href="<?php the_permalink('281') ?>" class="button yellow">Meer info over Huisstijlen</a>
        </div>
    </div>
</div>

<div class="websites">
    <div class="websites__inner">
        <div class="websites__inner--left">
        <?php the_field('websites_content'); ?>
            <a href="<?php the_permalink('262') ?>" class="button yellow">Meer info over websites</a>
        </div>
        <div class="websites__inner--right">
            <img src="<?php the_field('websites_afbeelding') ?>" alt="">
        </div>
    </div>
</div>

<div class="mobiele-apps">
    <div class="mobiele-apps__inner">
        <div class="mobiele-apps__inner--left">
            <img src="<?php the_field('mobiele_apps_afbeelding') ?>" alt="">
        </div>
        <div class="mobiele-apps__inner--right">
            <?php the_field('mobiele_apps_content'); ?>
            <a href="<?php the_permalink('283') ?>" class="button yellow">Meer info over Apps</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>