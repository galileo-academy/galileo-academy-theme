<?php wp_footer(); ?>
    <div class="footer-wrapper">
        <div class="footer-wrapper__inner">
            <div class="footer-wrapper__inner--left">
                <img src="<?php the_field('primary_logo', 'options') ?>" height="100" />
            </div>
            <div class="footer-wrapper__inner--right">
                <p class="p-small"><?php the_field('bedrijfsgegevens', 'options', false) ?></p>
                <p class="p-small">Privacy Policy | Algemene voorwaarden | 2022 © Galileo Academy, B.V.</p>
                <a class="cta yellow footer" href="/contact">Contact opnemen</a>
            </div>
        </div>
    </div>
</body>
</html>