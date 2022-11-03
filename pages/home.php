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

<div class="diensten">
    <div class="intro">
        <div class="intro__inner">
            <div class="intro__inner--content">
                <p>Wij zorgen voor uw digitale aanwezigheid door middel van een Wordpress website, een Woocommerce webshop of een mobiele app.  Wij dekken het hele traject af van het maken van een logo en een huisstijl, tot aan het design, de bouw en uiteindelijk de hosting en het beheer van uw website of app. We kunnen  echter ook onderdelen van het proces oppakken, zoals het optimaliseren van uw bestaande website.</p>
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
            <a class="button blue" href="">Meer over onze diensten</a>
        </div>
    </div>
</div>

<div class="uniek">
    <div class="uniek__inner">
        <div class="uniek__inner--left">
            <img src="<?php the_field('uniek_afbeelding') ?>" />
        </div>
        <div class="uniek__inner--right">
            <h1>Wat ons uniek maakt</h1>
            <p>Galileo Academy is een sociale onderneming, gecertificeerd op de hoogste trede van PSO (Prestatieladder Sociaal Ondernemen). Wij ontwikkelen mensen ‘met een afstand tot de arbeidsmarkt’ door commerciële opdrachten uit te voeren op het vlak van ontwerp, ontwikkeling en beheer van websites, webshops en mobiele apps. Wij maken Wordpress websites, Woocommerce webshops en IOS en Android apps.<br/><br/> Door uw vraag op dit vlak bij ons neer te leggen kunnen wij mensen met een afstand tot de arbeidsmarkt opleiden, werkervaring laten op doen en sociale en werknemersvaardigheden bij brengen en vervolgens in dienst nemen, dan wel naar een baan toe leiden bij een andere werkgever.</p>
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
        
        <a href="/" class="button yellow">Meer beoordelingen lezen</a>
    </div>
    <?php 
    endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>