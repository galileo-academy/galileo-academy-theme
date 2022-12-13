<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>

<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_field("hero_titel") ?></p>
            <img src="<?php the_field("hero_afbeelding") ?>" alt="">
        </div>
    </div>
</div>

<div class="contactinfo">
    <div class="contactinfo__inner">
        <h1><?php the_field("contact_titel") ?></h1>
        <div class="contactinfo__inner--content">
            <?php if ( have_rows( 'contactgegevens' ) && !empty( have_rows('contactgegevens' ) ) ) { ?>
            <div class="left">
                <?php while( have_rows( 'contactgegevens' ) ): the_row(); ?>
                <div class="contactgegevens">
                    <div class="icon">
                        <img src="<?php the_sub_field('icon') ?>" alt="">
                    </div>
                    <div class="content">
                        <?php the_sub_field('content') ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php } ?>
            <div class="right">
                <?php the_field('contact_content') ?>
            </div>
        </div>
    </div>
</div>

<div class="contactform">
    <div class="contactform__inner">
        <div class="contactform__inner--content">
            <h1>Contactformulier</h1>
            <?php echo do_shortcode( '[contact-form-7 id="122" title="Contact Form"]' ) ?>
        </div>
    </div>
</div>

<div class="google-maps">
    <iframe
    class="gmaps-frame"
    style="border:0"
    loading="lazy"
    allowfullscreen
    referrerpolicy="no-referrer-when-downgrade"
    src="https://www.google.com/maps/embed/v1/search?key=AIzaSyCtuG5fXssq6mf8QoW1hqyIGp1fxGrT_0M
    &q=Galileo+Academy,Capelle-aan-den-IJssel">
    </iframe>
</div>

<?php get_footer(); ?>