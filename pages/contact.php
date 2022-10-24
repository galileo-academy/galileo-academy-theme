<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>

<div class="contactform">
    <div class="contactform__inner">
        <div class="contactform__inner--content">
            <h1>Contactformulier</h1>
            <?php echo do_shortcode( '[contact-form-7 id="122" title="Contact Form"]' ) ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>