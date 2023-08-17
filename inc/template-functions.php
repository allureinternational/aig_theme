<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package conbix
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function conbix_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'conbix_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function conbix_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'conbix_pingback_header');


// Comment list
function conbix_custom_comments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment; ?>

	<div class="news__details-left-comment-item" id="comment-<?php comment_ID(); ?>">
		<div class="news__details-left-comment-item-comment">
			<div class="news__details-left-comment-item-comment-image">
				<?php if ($avarta = get_avatar($comment)) :
					printf($avarta);
				endif; ?>
			</div>
			<div class="news__details-left-comment-item-comment-content">
				<?php
				if ($comment->user_id != '0') {
					printf('<h6>%1$s</h6>', get_user_meta($comment->user_id, 'nickname', true));
				} else {
					printf('<h6>%1$s</h6>', get_comment_author_link());
				}
				?>
				<?php 
				comment_reply_link(array_merge($args, array(
					'depth' => $depth, 
					'max_depth' => $args['max_depth'], 
					'reply_text' => '<i class="fal fa-reply-all"></i>' . esc_html__('Reply', 'conbix'),
				)));
				?>
				<span><?php echo get_comment_date('j M, Y'); ?></span>
				<span><?php edit_comment_link(esc_html__('Edit', 'conbix'), '', ''); ?></span>
				<?php comment_text() ?>
			</div>

			<?php if ($comment->comment_approved == '0') : ?>
				<div class='comments-notify'>
					<span class="unapproved"><?php esc_html_e('Your comment is awaiting moderation.', 'conbix'); ?></span>
				</div>
			<?php endif; ?>

		</div>
	</div>
				
<?php }
