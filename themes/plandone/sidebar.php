<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plandone
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
 <div id="secondary" class="blog-page__articles blog-page__sidbar">
            <aside id="sidebar" class="sidebar">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                
            </aside>
    </div>


	  

