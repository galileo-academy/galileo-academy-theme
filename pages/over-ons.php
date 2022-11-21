<?php /* Template Name: Over ons Template */ ?>
<?php get_header(); ?>

<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_field("hero_titel") ?></p>
            <img src="<?php the_field("hero_afbeelding") ?>" alt="">
        </div>
    </div>
</div>

<div class="verhaal">
    <div class="verhaal__inner">
        <h1><?php the_field('verhaal_titel') ?></h1>
        <div class="verhaal__inner--top">
            <div class="left">
                <img src="<?php the_field('verhaal_afbeelding') ?>" alt="">
            </div>
            
            <div class="right">
                <?php the_field('verhaal_content_top') ?>
            </div>
        </div>

        <div class="verhaal__inner--bottom">
            <div class="left">
                <?php the_field('verhaal_content_bottom') ?>
            </div>

            <div class="right">
                <img src="<?php the_field('verhaal_afbeelding') ?>" alt="">
            </div>
        </div>
    </div>
</div>

<div class="bedrijfscultuur">
    <div class="bedrijfscultuur__inner">
        <h1>Onze bedrijfscultuur</h1>
        <div class="bedrijfscultuur__inner--top">
            <div class="left">
                <?php the_field('mvo') ?>
            </div>
            <div class="right">
                <img src="<?php the_field('bedrijfscultuur_afbeelding') ?>" alt="">
            </div>
        </div>
        <div class="bedrijfscultuur__inner--bottom">
            <div  class="left">
                <?php the_field('goed_content') ?>
            </div>
            <div  class="right">
                <?php the_field('ontwikkeling_content') ?>
            </div>
        </div>
    </div>
</div>

<div class="team">
    <div class="team__inner">
        <h1>Ons team</h1>
        <?php if ( have_rows( 'team_members' ) && !empty( have_rows('team_members' ) ) ) { ?>
            <div class="team__inner--content">
                <?php while( have_rows( 'team_members' ) ): the_row(); ?>
                <div class="teamslid">
                    <img src="<?php the_sub_field('afbeelding') ?>" class="teamslid-afbeelding" alt="">
                    <div class="text-block">
                        <h2><?php the_sub_field('naam') ?></h2>
                        <h3><?php the_sub_field('functie') ?></h3>
                        <p><?php the_sub_field('beschrijving') ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</div>

<div class="cta-bottom">
    <div class="cta-bottom__inner">
        <div class="cta-bottom__inner--content">
            <?php the_field('section_content', 'option') ?>    
        </div>
    </div>
</div>

<?php get_footer(); ?>