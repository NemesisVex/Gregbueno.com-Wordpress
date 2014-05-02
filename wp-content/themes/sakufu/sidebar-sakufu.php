				</div><!--sakufu-main-->
			</div><!--sakufu-frame-1-->

			<div id="frame-2" class="span-8 prepend-top last">

				<h3>About this weblog</h3>

				<p>
					「作譜」 is pronounced &quot;sakufu&quot;, and it means &quot;log&quot; or &quot;work file&quot; in Japanese. It's not the correct translation of &quot;weblog&quot;, but it seems appropriate for this site.
				</p>

				<p>This site started as a general dumping ground for external links, but these days, it's where I think about things related to the various technologies with which I work -- digital audio, web software engineering.</p>


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