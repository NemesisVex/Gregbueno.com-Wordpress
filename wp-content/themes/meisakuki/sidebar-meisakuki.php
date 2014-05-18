				</div>
			</div>

			<div id="frame-2" class="span-8 prepend-top last">

				<h3>About this weblog</h3>

				<p>
					「名作記」 is pronounced &quot;meisakuki&quot;, and it means &quot;masterpiece chronicle&quot; in Japanese. Yes, this title is meant to be an exaggeration.
				</p>

				<p>This site is my &quot;creative scrapbook&quot;, a place where I jot down ideas for creative projects. Mostly, I write about my music project, <a href="{$config.to_eponymous4}">Eponymous 4</a>, but I also might mention other writing endeavors.</p>

				<nav>
					<ul>
						<li> <a href="/index.php/gb/contact/">Contact</a></li>
						<li> <a href="/">Gregbueno.com</a></li>
					</ul>
				</nav>

				<hr />

				<h3>Search</h3>
				
				<?php get_search_form() ?>
				
				<hr>

				<h3>Calendar</h3>
				
				<ul>
				<?php wp_get_archives( array( 'type' => 'yearly' ) ); ?>
				</ul>


				<hr />

				<?php the_widget('WP_Widget_Meta', array( 'title' => __( 'Meta' )), array('before_title' => '<h3>', 'after_title' => '</h3>') ); ?>