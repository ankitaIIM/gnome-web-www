<?php
/**
 * @package GNOME Website
 * @subpackage Grass Theme
 */

require_once("header.php"); ?>

    <!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
        
            <?php require_once('inc/page-title.php'); ?>
            
            <div class="content">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End the loop. Whew. ?>


   
              <h4>Donate today to help make GNOME safer than ever!</h4>

              GNOME was founded with the
              goal of promoting software freedom. We remain committed to the empowerment of our
              users, and are always looking for ways to improve our software. We want people to be
              safe, in control, and enriched by the software they use. The GNOME community was
              inspired by the keynote delivered by Jacob Applebaum on the topic of privacy at this
              years' GUADEC and was reminded of our mission. To this end, GNOME is working on a new
              campaign focused on privacy. Through this campaign, we aim to enhance GNOME 3 so that
              it offers one of the most secure computing environments available. Proceeds from the
              privacy fundraising campaign will be used to fund development efforts such as:
            
              <ul>
                <li>application containment</li>
            
                <li>enhanced disk encryption support</li>
            
                <li>Tor integration</li>
            
                <li>user control over diagnostic reporting features</li>
            
                <li>robust VPN routing</li>
            
                <li>application integration with system-wide privacy settings</li>
            
                <li>controls for how GNOME devices are identified on local networks</li>
            
                <li>anti-phishing features for Web, GNOME's web browser</li>
              </ul>
            
              <div class="container_24">
                <div class="grid_18">
                  <div id="boxes">
                    <div id="adopt">
                      <div class="active-text">
                        You get: GNOME stickers, a thank you postcard from a hacker, a subscription
                        to LWN and a t-shirt if you commit to a year for $10/month!
                      </div>
            
                      <div class="level-text">
                        Adopt a Hacker
                      </div>
                    </div>
            
                    <div id="associate">
                      <div class="active-text">
                        You get: A GNOME mouse pad, a set of stickers, and recognition of your
                        contribution of $25-$500.
                      </div>
            
                      <div class="level-text">
                        Associate
                      </div>
                    </div>
            
                    <div id="sponsor">
                      <div class="active-text">
                        You get: A GNOME coffee mug, a GNOME t-shirt, and recognition of your
                        contribution of $500-$1200.
                      </div>
            
                      <div class="level-text">
                        Sponsor
                      </div>
                    </div>
            
                    <div id="philanthropist">
                      <div class="active-text">
                        You get: A print of the GNOME foot signed by the Board of Directors and
                        recognition of your contribution of $1200+.
                      </div>
            
                      <div class="level-text">
                        Philanthropist
                      </div>
                    </div>
                  </div>
            
                  <div id="below">
                    <p id="donation-details">Please select your donation level</p>
            
                    <form id="adopt-form" action="https://www.paypal.com/cgi-bin/webscr" method=
                    "post" name="adopt-form">
                      You have chosen to <strong>adopt a hacker</strong> for a monthly amount of:
                      <input id="amount" type="text" name="a3" size="5" value="10" />
                      <!-- Alright, this is stupid. Wordpress inserts a br here *sigh* --><select name="currency_code">
                        <option value="USD">
                          $ USD
                        </option>
            
                        <option value="EUR">
                          &euro; EUR
                        </option>
                      </select> <input type="hidden" name="notify_url" value=
                      "https://muelli.cryptobitch.de/paypaltest/ipnhandler.php" />
                      <small>Please increase the amount above if you want to make a larger difference.</small>
            
                      <p style="text-align: left;"><span style="color: #993300;">PLEASE NOTE</span>:
                      Monthly or annual subscription payments made through Paypal will continue until
                      you contact the <a href="http://www.gnome.org/foundation/">GNOME Foundation</a>
                      to cancel the payments.</p>
            
                      <h5>Pick a hacker from whom you will receive a post card:</h5><input type=
                      "hidden" name="on0" value="Favorite Hacker" />
            
                      <div class="wrapper">
                        <ul>
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Emmanuele Bassi" /><a href=
                          "http://live.gnome.org/EmmanueleBassi" target="_blank">Emmanuele
                          Bassi</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Brian Cameron" /><a href=
                          "http://live.gnome.org/BrianCameron" target="_blank">Brian Cameron</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Diego Escalante Urrelo" /><a href=
                          "http://live.gnome.org/DiegoEscalanteUrrelo" target="_blank">Diego
                          Escalante Urrelo</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Behdad Esfahbod" /><a href=
                          "http://live.gnome.org/BehdadEsfahbod" target="_blank">Behdad
                          Esfahbod</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Andre Klapper" /><a href=
                          "http://live.gnome.org/AndreKlapper" target="_blank">Andre Klapper</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Alexander Larsson" /><a href=
                          "http://blogs.gnome.org/alexl" target="_blank">Alexander Larsson</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Federico Mena Quintero" /><a href=
                          "http://live.gnome.org/FedericoMenaQuintero" target="_blank">Federico Mena
                          Quintero</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Andreas Nilsson" /><a href=
                          "http://live.gnome.org/AndreasNilsson" target="_blank">Andreas
                          Nilsson</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Tobias Mueller" /><a href=
                          "http://live.gnome.org/TobiasMueller" target="_blank">Tobias
                          Mueller</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Frederic Peters" /><a href=
                          "http://live.gnome.org/FredericPeters" target="_blank">Frederic
                          Peters</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Stormy Peters" /><a href=
                          "http://live.gnome.org/StormyPeters" target="_blank">Stormy Peters</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Lucas Rocha" /><a href=
                          "http://live.gnome.org/LucasRocha" target="_blank">Lucas Rocha</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Vincent Untz" /><a href=
                          "http://live.gnome.org/VincentUntz" target="_blank">Vincent Untz</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Luis Villa" /><a href=
                          "http://live.gnome.org/LuisVilla4" target="_blank">Luis Villa</a></li>
            
                          <li><input type="radio" name="os0" value=
                          "You will receive a postcard from Karen Sandler" /><a href=
                          "http://live.gnome.org/KarenSandler" target="_blank">Karen Sandler</a></li>
                        </ul>
                      </div>
            
                      <h5>Do you want to receive a gift?:</h5><input type="hidden" name="on1" value=
                      "Donation Gift" /> <input type="radio" checked="checked" name="os1" value=
                      "Yes" />Yes <input type="radio" name="os1" value="No" />No <small>Your gifts
                      will be mailed out after a year of monthly contributions or a single upfront
                      annual payment. If you do not want to receive a gift, we will save the money
                      for the gift and shipping and use it to further the mission of the GNOME
                      Project, bringing a free desktop to the public.</small>
            
                      <h5>T-shirt size:</h5><input type="hidden" name="on3" value="T-shirt Size" />
                      <input type="radio" name="os3" value="M" />M <input type="radio" checked=
                      "checked" name="os3" value="L" />L <input type="radio" checked="checked" name=
                      "os3" value="XL" />XL <input type="radio" name="os3" value="XXL" />XXL
            
                      <h5>Do you want to have your name listed in the donors page?:</h5><input type=
                      "hidden" name="on2" value="List name in the donors page" /> <input type="radio"
                      checked="checked" name="os2" value="Yes" />Yes <input type="radio" name="os2"
                      value="No" />No
            
                      <h5>Additional comments or ideas on how we can improve the GNOME
                      Foundation:</h5>
                      <textarea cols="88" name="custom" rows="7">
            </textarea><input type="hidden" name="return" value=
            "http://www.gnome.org/thank-you/" /><input type="hidden" name="business" value=
            "friends@gnome.org" /><!-- Specify a Subscribe button. --><input type="hidden" name="cmd"
                      value="_xclick-subscriptions" /><!-- Identify the subscription. --><input type=
                      "hidden" name="item_name" value=
                      "Friends of GNOME - Adopt a hacker monthly subscription" />
                      <!-- Define the intervals between payments. "1" means every period. --><input type="hidden"
                      name="p3" value="1" />
                      <!-- "t3" defines the period duration (D=days; W=weeks; M=months and Y=Years). --><input id="t3"
                      type="hidden" name="t3" value="M" />
                      <!-- "src" with a value of "1" causes it to repeat for every interval. --><input type="hidden"
                      name="src" value="1" />
                      <!-- Reattempt on failure. If a recurring payment fails, PayPal attempts to collect the payment two more times before canceling the subscription. See https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&#038;content_ID=developer/e_howto_html_Appx_websitestandard_htmlvariables --><input type="hidden"
                      name="sra" value="1" /><input type="hidden" name="currency_code" value="USD" />
                      <!-- Display the payment button. -->
                      <input type="image" alt="PayPal - The safer, easier way to pay online" name=
                      "submit" src=
                      "http://www.gnome.org/wp-content/themes/gnome-grass/images/donate-button.png" />
                      <img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1"
                      height="1" border="0" />
                    </form>
            
                    <form id="associate-form" action="https://www.paypal.com/cgi-bin/webscr" method=
                    "post" name="associate-form">
                      <input type="hidden" name="notify_url" value=
                      "https://muelli.cryptobitch.de/paypaltest/ipnhandler.php" /> You have chosen to
                      become a <strong>associate</strong> for a one time amount of: <input id=
                      "amount" type="text" name="amount" size="5" value="50" /> <select name=
                      "currency_code">
                        <option value="USD">
                          $ USD
                        </option>
            
                        <option value="EUR">
                          &euro; EUR
                        </option>
                      </select> <small>Please increase the amount above if you want to make a larger
                      difference.</small>
            
                      <h5>Do you want to receive a gift?</h5><input type="hidden" name="on1" value=
                      "Donation Gift" /> <input type="radio" checked="checked" name="os1" value=
                      "Yes" />Yes <input type="radio" name="os1" value="No" />No <small>If you do not
                      want to receive a gift, we will save the money for the gift and shipping and
                      use it to further the mission of the GNOME Project, bringing a free desktop to
                      the public.</small>
            
                      <h5>Do you want to have your name listed in the donors page?:</h5><input type=
                      "hidden" name="on2" value="List name in the donors page" /> <input type="radio"
                      checked="checked" name="os2" value="Yes" />Yes <input type="radio" name="os2"
                      value="No" />No
            
                      <h5>Additional comments or ideas on how we can improve the GNOME
                      Foundation:</h5>
                      <textarea cols="88" name="custom" rows="7">
            </textarea><input type="hidden" name="business" value=
                      "friends@gnome.org" /><input type="hidden" name="return" value=
                      "http://www.gnome.org/thank-you/" /><input type="hidden" name="cmd" value=
                      "_xclick" /><input type="hidden" name="item_name" value=
                      "Friends of GNOME - Associate level donation ($25-500)" /><input type="image"
                      alt="Donate" name="submit" src=
                      "http://www.gnome.org/wp-content/themes/gnome-grass/images/donate-button.png" />
                      <small>You will be redirected to the Paypal website.</small>
                    </form>
            
                    <form id="sponsor-form" action="https://www.paypal.com/cgi-bin/webscr" method=
                    "post" name="sponsor-form">
                      <input type="hidden" name="notify_url" value=
                      "https://muelli.cryptobitch.de/paypaltest/ipnhandler.php" /> You have chosen to
                      become a <strong>sponsor</strong> for a one time amount of: <input id="amount"
                      type="text" name="amount" size="5" value="500" />
                      <!-- Alright, this is stupid. Wordpress inserts a br here *sigh* --><select name="currency_code">
                        <option value="USD">
                          $ USD
                        </option>
            
                        <option value="EUR">
                         &euro; EUR
                        </option>
                      </select> <small>Please increase the amount above if you want to make a larger
                      difference.</small>
            
                      <h5>Do you want to receive a gift?</h5><input type="hidden" name="on1" value=
                      "Donation Gift" /> <input type="radio" checked="checked" name="os1" value=
                      "Yes" />Yes <input type="radio" name="os1" value="No" />No <small>If you do not
                      want to receive a gift, we will save the money for the gift and shipping and
                      use it to further the mission of the GNOME Project, bringing a free desktop to
                      the public.</small>
            
                      <h5>Select a t-shirt size:</h5><input type="hidden" name="on3" value=
                      "T-shirt Size" /> <input type="radio" name="os3" value="M" />M <input type=
                      "radio" checked="checked" name="os3" value="L" />L <input type="radio" checked=
                      "checked" name="os3" value="XL" />XL <input type="radio" name="os3" value=
                      "XXL" />XXL
            
                      <h5>Do you want to have your name listed in the donors page?:</h5><input type=
                      "hidden" name="on2" value="List name in the donors page" /> <input type="radio"
                      checked="checked" name="os2" value="Yes" />Yes <input type="radio" name="os2"
                      value="No" />No
            
                      <h5>Additional comments or ideas on how we can improve the GNOME
                      Foundation:</h5>
                      <textarea cols="88" name="custom" rows="7">
            </textarea><input type="hidden" name="business" value=
                      "friends@gnome.org" /><input type="hidden" name="return" value=
                      "http://www.gnome.org/thank-you/" /><input type="hidden" name="cmd" value=
                      "_xclick" /> <input type="hidden" name="item_name" value=
                      "Friends of GNOME - Sponsor level donation ($500-1200)" /><input type="image"
                      alt="Donate" name="submit" src=
                      "http://www.gnome.org/wp-content/themes/gnome-grass/images/donate-button.png" />You
                      will be redirected to the Paypal Site.
                    </form>
            
                    <form id="philanthropist-form" action="https://www.paypal.com/cgi-bin/webscr"
                    method="post" name="philanthropist-form">
                      <input type="hidden" name="notify_url" value=
                      "https://muelli.cryptobitch.de/paypaltest/ipnhandler.php" /> You have chosen to
                      become a <strong>philanthropist</strong> for a one time amount: <input id=
                      "amount" type="text" name="amount" size="5" value="1200" />
                      <!-- Alright, this is stupid. Wordpress inserts a br here *sigh* --><select name="currency_code">
                        <option value="USD">
                          $ USD
                        </option>
            
                        <option value="EUR">
                          &euro; EUR
                        </option>
                      </select> <small>Please increase the amount above if you want to make a larger
                      difference.</small>
            
                      <h5>Do you want to receive a gift?:</h5><input type="hidden" name="on1" value=
                      "Donation Gift" /> <input type="radio" checked="checked" name="os1" value=
                      "Yes" />Yes <input type="radio" name="os1" value="No" />No <small>If you do not
                      want to receive a gift, we will save the money for the gift and shipping and
                      use it to further the mission of the GNOME Project, bringing a free desktop to
                      the public.</small>
            
                      <h5>Do you want to have your name listed in the donors page?:</h5><input type=
                      "hidden" name="on2" value="List name in the donors page" /> <input type="radio"
                      checked="checked" name="os2" value="Yes" />Yes <input type="radio" name="os2"
                      value="No" />No
            
                      <h5>Additional comments or ideas on how we can improve the GNOME
                      Foundation:</h5>
                      <textarea cols="88" name="custom" rows="7">
            </textarea> <input type="hidden" name="business" value="friends@gnome.org" />
                      <input type="hidden" name="return" value="http://www.gnome.org/thank-you/" />
                      <input type="hidden" name="cmd" value="_xclick" /> <input type="hidden" name=
                      "item_name" value=
                      "Friends of GNOME - Philanthropist level donation ($1200 or more)" />
                      <input type="image" alt="Donate" name="submit" src=
                      "http://www.gnome.org/wp-content/themes/gnome-grass/images/donate-button.png" />
                       <small>You will be redirected to the Paypal website.</small>
                    </form>
                  </div>
            
                  <p style="text-align: center;"><small>GNOME Foundation is a 501(c)3 non-profit
                  organization, and your donation is considered charitable to the extent of
                  applicable law. Consult your tax preparer to determine
                  tax-deductibility.</small></p>
                </div>
              </div>
            
              <div class="clear"></div>
            
              <div class="container_24"></div>&nbsp;
            
              <div class="footer"></div>
            

                <br />
                <div class="clear"></div>
            </div>
            
            <div class="sidebar">
                
                <?php
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = get_page($parent_id);
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                if (isset($breadcrumbs[0])) {
                    $first_page = $breadcrumbs[0];
                } else {
                    $first_page = NULL;
                }
                ?>

                <?php if(is_page()) {?>
                <ul class="navigation_list">
                    <?php
                    if(isset($first_page) && $first_page->ID != '') {
                        wp_list_pages(array('title_li' => '', 'include' => $first_page->ID));
                        wp_list_pages(array('title_li' => '', 'child_of' => $first_page->ID));
                    } else {
                        wp_list_pages(array('title_li' => '', 'include' => $post->ID));
                        wp_list_pages(array('title_li' => '', 'child_of' => $post->ID));
                    }
                    ?>
                </ul>
                <?php } ?>            
            </div>
            <?php require_once("footer_art.php"); ?>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
