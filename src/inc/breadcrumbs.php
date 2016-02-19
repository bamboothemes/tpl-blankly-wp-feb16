<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package blank.ly
 */

function zen_breadcrumbs() {
 
 	echo '<ul class="breadcrumbs zen-nav zen-nav-divider">';
 	 if (!is_home()) {
 	         echo '<li><a href="';
 	         echo home_url();
 	         echo '"><span>';
 	         echo 'Home';
 	         echo "</span></a></li>";
 	         if (is_category() || is_single()) {
 	                 echo '<li><span>';
 	                 the_category(' </span></li><li><span>');
 	                 if (is_single()) {
 	                         echo "</span></li><li><span>";
 	                         the_title();
 	                         echo '</span></li>';
 	                 }
 	         } elseif (is_page()) {
 	                 echo '<li><span>';
 	                 echo the_title();
 	                 echo '</span></li>';
 	         }
 	 }
 	 elseif (is_tag()) {single_tag_title();}
 	 elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
 	 elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
 	 elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
 	 elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
 	 elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
 	 elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
 	 echo '</ul>';        
 
}