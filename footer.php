<?php wp_footer(); ?>
    <div class="footer-wrapper">
        <div class="footer-wrapper__inner">
            <div class="footer-wrapper__inner--left">
                <a href="/"><img src="<?php the_field('primary_logo', 'options') ?>" height="100" /></a>
            </div>
            <div class="footer-wrapper__inner--right">
                <?php the_field('bedrijfsgegevens', 'options') ?>
                <p>Privacy Policy | Algemene voorwaarden | 2022 © Galileo Academy, B.V.</p>
                <a class="cta yellow footer" href="/contact">Contact opnemen</a>
            </div>
        </div>
    </div>
</body>
</html>