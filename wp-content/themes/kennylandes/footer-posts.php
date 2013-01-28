            <hr>
            <footer>
                <p>&copy; <?php echo date("Y"); ?> <?php echo bloginfo('name'); ?></p>
            </footer>
        </div> <!-- /container -->
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
