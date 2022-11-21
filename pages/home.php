<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--left">
            <p class="quote"><?php the_field('hero_heading') ?></p>
            <a class="cta blue intro-cta" href="/contact">Gratis Advies</a>
        </div>
        <div class="hero__inner--right">
            <img src="<?php the_field("hero_afbeelding") ?>" alt="">
        </div>
    </div>
</div>

<div class="hero-mobiel">
    <div class="hero-mobiel__inner">
        <div class="hero-mobiel__inner--content">
            <p class="quote"><?php the_field('hero_heading') ?></p>
            <img src="<?php the_field("hero_afbeelding") ?>" alt="">
            <a class="cta blue intro-cta" href="/contact">Gratis Advies</a>
        </div>
    </div>
</div>

<div class="diensten">
    <div class="intro">
        <div class="intro__inner">
            <div class="intro__inner--content">
                <?php the_field('intro_content') ?>
            </div>
        </div>
    </div>

    <div class="diensten__inner">
        <div class="diensten__inner--heading">
            <h1>Onze Diensten</h1>
        </div>

        <div class="diensten__inner--diensten">
            <?php
            if( have_rows('dienst') ):
            while ( have_rows('dienst') ) : the_row();
            ?>
            <div class="dienst">
                <div class="image-box">
                    <img src="<?php the_sub_field('dienst_afbeelding') ?>" alt="">
                </div>
                <div class="content-box">
                    <h2><?php the_sub_field('dienst_naam') ?></h2>
                    <p><?php the_sub_field('dienst_content') ?></p>
                </div>
            </div>
            <?php 
            endwhile;
            endif;
            ?>
        </div>

        <div class="diensten__inner--meer">
            <a class="button blue" href="/diensten">Meer over onze diensten</a>
        </div>
    </div>
</div>

<div class="diensten-mobiel">
    <div class="intro">
        <div class="intro__inner">
            <div class="intro__inner--content">
                <?php the_field('intro_content') ?>
            </div>
        </div>
    </div>

    <div class="diensten-mobiel__inner">
        <div class="diensten-mobiel__inner--heading">
            <h1>Onze Diensten</h1>
        </div>

        <div class="swiper-diensten">
            <div class="swiper-wrapper">
                <?php
                if( have_rows('dienst') ):
                while ( have_rows('dienst') ) : the_row();
                ?>
                <div class="swiper-slide dienst">
                    <div class="image-box">
                        <img src="<?php the_sub_field('dienst_afbeelding') ?>" alt="">
                    </div>
                    <div class="content-box">
                        <h2><?php the_sub_field('dienst_naam') ?></h2>
                        <p><?php the_sub_field('dienst_content') ?></p>
                    </div>
                </div>
                <?php 
                endwhile;
                endif;
                ?>
            </div>
            <div class="swiper-button-next diensten-right"></div>
            <div class="swiper-button-prev diensten-left"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="diensten-mobiel__inner--meer">
            <a class="button blue" href="/diensten">Meer over onze diensten</a>
        </div>
    </div>
</div>

<div class="uniek">
    <div class="uniek__inner">
        <div class="uniek__inner--left">
            <img src="<?php the_field('uniek_afbeelding') ?>" />
        </div>
        <div class="uniek__inner--right">
            <?php the_field('uniek_content'); ?>        
        </div>
    </div>
</div>

<div class="quotes">
    <?php
    if( have_rows('beoordelingen') ):
    while ( have_rows('beoordelingen') ) : the_row();
    ?>
    <div class="quotes__inner">
        <?php the_sub_field('content') ?>

        <div class="quote-person">
            <h3><?php the_sub_field('naam') ?></h3>
            <p class="p-small"><?php the_sub_field('functie') ?> | <?php the_sub_field('bedrijf') ?></p>
        </div>
        
        <a href="/portfolio" class="button yellow">Meer beoordelingen lezen</a>
    </div>
    <?php 
    endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>