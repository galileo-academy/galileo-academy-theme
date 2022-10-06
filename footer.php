<?php wp_footer(); ?>
    <div class="footer-wrapper">
        <div class="footer-wrapper__inner">
            <div class="footer-wrapper__inner--left">
                <img src="<?php the_field('primary_logo', 'options') ?>" height="70" />
            </div>
            <div class="footer-wrapper__inner--right">
                <p class="p-small"><?php the_field('bedrijfsgegevens', 'options', false) ?></p>
            </div>
        </div>
    </div>
</body>
</html>