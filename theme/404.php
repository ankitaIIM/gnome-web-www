<?php
/**
 * @package GNOME Website
 * @subpackage Grass Theme
 */

require_once("header.php"); ?>

    <!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
            
            <div class="content without_sidebar">
                
                <div class="grid_10 prefix_1 suffix_1 alpha omega">
                        <h1><?php _e( 'Ooooops. Something is not here.', 'grass' ); ?></h1>
                        
                        <p class="main_feature"><?php _e( 'The page you tried to access was not found.', 'grass' ); ?></p>
                        
                        <hr />
                        
                        <div class="grid_5 alpha">
                            <p><?php
                            
                            printf(
                                __( 'For now, you may want to go to the <a href="%1$s">home page</a> to start from the beginning, or try your luck in the search form below.', 'grass'),
                                get_bloginfo('url')
                            );
                            
                            ?></p>
                            <?php get_search_form(); ?>
                        </div>
                        
                        <div class="grid_5 omega">
                            <p><?php
                            
                            printf(
                                __('If you think there is a broken link on the GNOME website, please <a href="%1$s">report it as a bug</a>. Thank you.', 'grass'),
                                'https://bugzilla.gnome.org/enter_bug.cgi?product=website&component=www.gnome.org'
                            );
                            
                            ?></p>
                        </div>
                </div>
                
                <div class="clear"></div>
            </div>
            <?php $footer_art = '404'; ?>
            <?php require_once("footer_art.php"); ?>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
