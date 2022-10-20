<?php /* Template Name: Diensten Template */ ?>
<?php get_header(); ?>

<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_field("hero_title") ?></p>
            <img src="<?php the_field("hero_image") ?>" alt="">
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
            <h1>Logo en Huisstijl</h1>
            <p>Aan de huisstijl en logo’s herken je het bedrijf. De huisstijl en logo’s omvat de eerste indruk die een klant krijgt van uw bedrijf. Of u nu een lokaal werkzaam bedrijf bent of wereldwijd activiteiten heeft het is van groot belang om een duidelijke, herkenbare en betrouwbare logo enhuisstijl te hebben die aansluit bij uw bedrijf.</p>
            <a href="" class="button yellow">Meer info over Huisstijlen</a>
        </div>
    </div>
</div>

<div class="websites">
    <div class="websites__inner">
        <div class="websites__inner--left">
            <h1>Websites en webshops</h1>
            <p>Kan uw website of webshop wel een update gebruiken of wilt u een hele nieuwe laten bouwen?  Wilt u een nieuwe website zodat u beter gevonden kan worden, wilt u meer bezoekers op uw website, meer potentiële klanten binnen halen of een beter design en informatie op uw website?</p>
            <a href="" class="button yellow">Meer info over websites</a>
        </div>
        <div class="websites__inner--right">
            <img src="<?php the_field('huisstijl_afbeelding') ?>" alt="">
        </div>
    </div>
</div>

<?php get_footer(); ?>