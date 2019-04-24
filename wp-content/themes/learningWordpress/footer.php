    
        <footer class="site-footer">
            <nav class="site-nav">
                <?php 
                    $argms = array(
                        'theme_location' => 'footer'
                    );
                    wp_nav_menu($argms); 
                ?>
            </nav>
            <p><?= bloginfo('name') . ' - &copy' . date('Y'); ?></p>
        </footer>
    </div> <!-- end container -->

    <?php wp_footer() ?>
</body>
</html>