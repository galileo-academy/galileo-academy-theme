<?php /* Template Name: WMITW Template */ ?>
<?php get_header(); ?>

<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_title() ?></p>
            <div class="hero_afbeelding">
                <img src="<?php the_field("hero_afbeelding") ?>" alt="">
            </div>
        </div>
    </div>
</div>

<div class="traject">
    <div class="traject__inner">
        <div class="traject__inner--content">
            <?php the_field('traject_content') ?>
        </div>
    </div>
</div>

<div class="quote">
    <div class="quote__inner">
        <div class="quote__inner--content">
            <h1>Quotes van Cursisten</h1>
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php while( have_rows( 'cursisten' ) ): the_row(); ?>
                    <div class="swiper-slide">
                        <?php the_sub_field('quote') ?>
                        <h3><?php the_sub_field('naam') ?></h3>
                    </div>
                    <?php endwhile; ?> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-bottom">
    <div class="cta-bottom__inner">
        <div class="cta-bottom__inner--content">
            <?php the_field('wmitw_content', 'option') ?>    
        </div>
    </div>
</div>

<?php get_footer(); ?>