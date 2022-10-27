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
        <h1>Kom in contact</h1>
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
                <p>We zijn misschien een modern digitaal team, maar in sommige opzichten zijn we heerlijk ouderwets. Zo zijn wij van mening dat persoonlijke ontmoetingen en gesprekken essentieel zijn voor het ontwikkelen van onze en uw business. Als u ons niet kunt bezoeken in Capelle aan den IJssel, dan komen we graag langs bij u op kantoor om van gedachten te wisselen over uw digitale project. Maak vandaag een afspraak en we pakken onze laptops in om alles over u te leren en samen na te gaan hoe we u zouden kunnen helpen.<br/><br/>Aliquam venenatis pulvinar lobortis. Donec gravida semper metus, sollicitudin non est. Vivamus eu facilisis neque, sit amet vulputate dolor. Pellentesque posuere mollis eros, a placerat turpis varius at. Duis eros nulla, mattis eu tempor non, semper vitae enim. Curabitur a pretium dolor. <br/><br/>...Onderstaand formulier...</p>
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

<div class="cta-bottom">
    <div class="cta-bottom__inner">
        <div class="cta-bottom__inner--content">
            <h1>Interesse in een website laten maken?</h1>
            <h3>Kan uw website wel een update gebruiken of wilt u een hele nieuwe website laten bouwen? Neem contact met ons op om te kijken wat wij voor u kunt betekenen.</h3>
        </div>
    </div>
</div>

<?php get_footer(); ?>