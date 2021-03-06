
<aside class="secondary" class="widget-area" role="complementary">

<?php get_template_part( '_partials/website-social', get_post_format() ); ?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php else : ?>
	<aside id="search-2" class="widget widget_search">
	  <form method="get" id="searchform" action="/">
	    <label for="s" class="assistive-text">Search</label>
	    <input class="field" name="s" id="s" placeholder="Search" type="text">
	    <input class="submit" name="submit" id="searchsubmit" value="Search" type="submit">
	  </form>
	</aside>
	<aside class="widget">
	  <a href="/tickets" target="_self" class="tickets-link" title="Buy Tickets Now">
	  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tickets-button.png" alt="Buy Tickets Now!" />
	  </a>
	</aside>		
	<aside class="widget">
	  <div class="fb-like" data-href="https://www.facebook.com/WickedFaire" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
	</aside>
<?php endif; ?>

</aside><!-- #secondary .widget-area -->
