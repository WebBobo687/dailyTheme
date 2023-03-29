    </div>
    <footer>
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'container' => 'false',
            // 'menu_class' => 'nav'
        ])
        ?>
    </footer>
    <?php wp_footer() ?>
</body>

</html>