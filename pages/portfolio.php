<?php /* Template Name: Portfolio Template */ ?>
<?php get_header(); ?>

<div class="hero">
    <div class="hero__inner">
        <div class="hero__inner--content">
            <p class="display"><?php the_field("hero_titel") ?></p>
            <img src="<?php the_field("hero_afbeelding") ?>" alt="">
        </div>
    </div>
</div>

<div class="intro">
    <div class="intro__inner">
        <div class="intro__inner--content">
            <?php the_field('intro_content') ?>
            <div>
                <a href="" class="button yellow">Contact opnemen</a>
            </div>
        </div>
    </div>
</div>

<div class="opdrachtgevers">
    <div class="opdrachtgevers__inner">
        <div class="opdrachtgevers__inner--intro">
            <?php the_field('opdrachtgevers_content') ?>
        </div>
        <div class="opdrachtgevers__inner--loop">
            <?php
            $args = array(  
                'post_type' => 'cases',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'title', 
                'order' => 'ASC', 
            );
            $loop = new WP_Query( $args );

            while( $loop->have_posts() ) : $loop->the_post();
            ?>
                <div class="project">
                    <a href="<?php the_permalink() ?>"><img src="<?php the_field('logo') ?>" alt=""></a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
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