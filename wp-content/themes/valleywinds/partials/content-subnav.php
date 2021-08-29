<div class="sub-navigation">
<a class="toggle-nav" href="#">&#9776;</a>
								<?php
									$defaults = array(
										'theme_location'  => 'sub-menu',
										'menu'            => '',
										'container'       => 'nav',
										'container_class' => 'submenu',
										'container_id'    => '',
										'menu_class'      => 'active',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									);
									wp_nav_menu( $defaults );
								?>
</div>