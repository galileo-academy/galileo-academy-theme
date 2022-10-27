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
                <h2>MVO</h2>
                <p>Galileo Academy geeft invulling aan haar maatschappelijke verantwoordelijkheid door mensen met een afstand tot de arbeidsmarkt op te leiden en een vaste contract aan te bieden.<br/><br/>Alle medewerkers van Galileo Academy zijn begonnen met een afstand tot de arbeidsmarkt en zijn hard op weg om die achterstand in te lopen. In tegenstelling tot andere sociale bedrijven, die bijvoorbeeld alleen mensen met een stoornis in het autistisch spectrum aannemen, stelt Galileo Academy zich open voor iedereen met een beperking. De enige voorwaarde is dat de medewerker intrinsiek gemotiveerd is om te werken en affiniteit heeft met digitalisering. <br/><br/>Galileo Academy heeft het certificaat voor de hoogste trede van de Prestatieladder Sociaal Ondernemen (PSO) behaald sinds 1 januari 2020.</p>
            </div>
            <div class="right">
                <img src="<?php the_field('bedrijfscultuur_afbeelding') ?>" alt="">
            </div>
        </div>
        <div class="bedrijfscultuur__inner--bottom">
            <div  class="left">
                <h2>G.O.E.D.</h2>
                <p>Onze collega’s hebben het uitstekend naar hun zin binnen ons bedrijf. Galileo Academy biedt haar mensen een veilige en prettige (werk)omgeving waarin ze zowel persoonlijke alsook vakinhoudelijke ontwikkeling en groei kunnen realiseren. Daarbij wordt er rekening gehouden met ieders ambities, mogelijkheden en onmogelijkheden.<br/><br/> Daarnaast hanteert Galileo Academy de bedrijfscultuur GOED (Gelijkwaardig, Open, Eerlijk en Duidelijk).</p>
            </div>
            <div  class="right">
                <h2>Continue ontwikkeling</h2>
                <p>Ons werk en de wereld waarin we werken verandert snel dus is “permanente educatie” bij ons een vanzelfsprekende zaak. Onze medewerkers zijn geselecteerd op hun innerlijke drive zichzelf verder te willen ontwikkelen, gefaciliteerd door Galileo Academy.<br/>Galileo Academy biedt maatwerk in de professionele ontwikkeling van haar medewerkers. De Human Factor is de bepalende factor in het succes van Galileo Academy.<br/><br/>Galileo Academy ziet de competenties van haar medewerkers niet alleen als de kern van het bedrijf maar ook de invulling van haar commerciële propositie: er bestaat dus ook een 1 op 1 verbinding tussen de de competenties van onze medewerkers en de producten en diensten die Galileo Academy aanbiedt.</p>
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