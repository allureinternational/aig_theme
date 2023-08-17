<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package conbix
 */

if (!function_exists('conbix_comment_number')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function conbix_comment_number()
	{
		if (!post_password_required() && (comments_open() || get_comments_number()) && get_comments_number() != 0) {
			echo '<i class="fal fa-comment-dots"></i><span class="comment-number">';
			comments_popup_link('', '' . esc_html__('1 ', 'conbix') . ' <span class="comment-number-text">' . esc_html__('Comment', 'conbix') . '</span>', '% <span class="comment-number-text">' . esc_html__('Comments', 'conbix') . '</span>');
			echo '</span>';
		}
	}
endif;

if (!function_exists('conbix_entry_footer')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function conbix_entry_footer()
	{

		// Hide category and tag text for pages.
		if ('post' === get_post_type()) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x('', 'list item separator', 'conbix'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tag-title">' . esc_html__('Tags:', 'conbix') . '</span>' . esc_html__(' %1$s', 'conbix'), $tags_list); // WPCS: XSS OK.

			}
		}
	}
endif;

if (!function_exists('conbix_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function conbix_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>

<?php
		endif; // End is_singular().
	}
endif;

if (!function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
endif;
