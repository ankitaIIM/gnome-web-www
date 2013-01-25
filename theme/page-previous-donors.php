<?php

$donors = array();

foreach (array(
    2012,
    2011,
    2010,
    ) as $year) {
    
    $donors[$year] = array();
    
    foreach (array('philanthropist', 'sponsor', 'associate') as $level) {
        if (false === ($donor_file = get_transient("friends_of_gnome_{$year}_{$level}"))) {
            $url = "http://people.gnome.org/~tobiasmue/fog/{$year}-{$level}.txt";
            $donors_file = file_get_contents($url);
        }
        $donors[$year][$level] = array();

        $donors[$year][$level] = explode("\n", $donors_file);

        // keeps a 24-hour cache until another HTTP request
        // to get the members list
        set_transient("friends_of_gnome_{$year}_{$level}", $donors, 60*60*24);
    }
}




require_once("header.php"); ?>

    <!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
        
            <?php require_once('inc/page-title.php'); ?>
            
            <div class="content without_sidebar">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                
                <?php
                
                if (isset($donors)) {
                  foreach ($donors as $year => $level_array) {
                    echo "<h3>{$year}</h3>\n";
                    foreach ($level_array as $level => $donor_array) {
                        $level_count = count($donor_array);
                        if ($level_count > 1) { // The count behaves weirdly for me. Always +1.
                            echo "<h4>$level</h4>\n";
                            echo '<ul style="list-style-type: disc;">'."\n";
                            foreach ($donor_array as $donor_line) {
                                $donor = trim($donor_line, "\x00..\x20");
                                if (strlen($donor) > 0)
                                    echo "  <li>".htmlspecialchars($donor)."</li>\n";
                            }
                            echo "</ul>\n";
                        }
                    }
                  }
                }
                ?>
                
            <?php endwhile; // End the loop. Whew. ?>
                <br />
                <div class="clear"></div>
            </div>
            
            <?php require_once("footer_art.php"); ?>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
