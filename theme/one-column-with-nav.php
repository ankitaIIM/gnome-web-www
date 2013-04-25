<?php
/*
Template Name: One Column with Foundation Navigation
*/

require_once("header.php"); ?>

    <!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
          <div id = "foundation">
            <div class="page_title" style="margin-bottom: 2px;">
                <h1><?php the_title(); ?></h1>
            </div>
	    <div class="clearfix"></div>
            <?php wp_nav_menu(array('menu'=>'foundationnav','container_class'=>'foundation_nav')); ?>
            <div class="content without_sidebar">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End the loop. Whew. ?>
                <br />
                <div class="clear"></div>
            </div>
           </div> 
            <?php require_once("footer_art.php"); ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php require_once("footer.php"); ?>
</body>
</html>
