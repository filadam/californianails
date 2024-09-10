<?php

/**
 * Prints HTML with meta information for the current post-date/time.
 */
function parkeringlygten_posted_on()
{
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date())
    );
    echo '<div class="post-date">';
    echo '<i class="bi bi-calendar3"></i>';
    printf(
        '%s',
        $time_string // phpcs:ignore WordPress.Security.EscapeOutput
    );
    echo '</div>';
}

/**
 * Prints HTML with meta information about theme author.
 */
function parkeringlygten_posted_by()
{
    if (!get_the_author_meta('description') && post_type_supports(get_post_type(), 'author')) {
        echo '<div class="post-author">';
        echo '<i class="bi bi-person-fill"></i>';
        printf(
            '%s',
            '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" class="author" rel="author">' . esc_html(get_the_author()) . '</a>'
        );
        echo '</div>';
    }
}

function parkeringlygten_category_list()
{
    if (has_category()) {
        $categories_list = get_the_category_list(', ');
        if ($categories_list) {
            echo '<div class="post-category">';
            echo '<i class="bi bi-list-ul"></i>';
            printf(
                '<span class="cat-links">%s</span>',
                $categories_list // phpcs:ignore WordPress.Security.EscapeOutput
            );
            echo '</div>';
        }
    }
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 * Footer entry meta is displayed differently in archives and single posts.
 */
function parkeringlygten_entry_meta_footer()
{
    // Early exit if not a post.
    if ('post' !== get_post_type()) {
        return;
    }

    // Hide meta information on pages.
    if (!is_single()) {

        if (is_sticky()) {
            echo '<p>' . esc_html_x('Featured post', 'Label for sticky posts', 'parkeringlygten') . '</p>';
        }

        // Posted on.
        parkeringlygten_posted_on();

        // Edit post link.
        edit_post_link(
            sprintf(
                /* translators: %s: Name of current post. Only visible to screen readers. */
                esc_html__('Edit %s', 'parkeringlygten'),
                '<span class="screen-reader-text">' . get_the_title() . '</span>'
            ),
            '<span class="edit-link">',
            '</span><br>'
        );

        if (has_category() || has_tag()) {

            echo '<div class="post-taxonomies">';

            /* translators: used between list items, there is a space after the comma. */
            $categories_list = get_the_category_list(__(', ', 'parkeringlygten'));
            if ($categories_list) {
                printf(
                    /* translators: %s: list of categories. */
                    '<span class="cat-links">' . esc_html__('Categorized as %s', 'parkeringlygten') . ' </span>',
                    $categories_list // phpcs:ignore WordPress.Security.EscapeOutput
                );
            }

            /* translators: used between list items, there is a space after the comma. */
            $tags_list = get_the_tag_list('', __(', ', 'parkeringlygten'));
            if ($tags_list) {
                printf(
                    /* translators: %s: list of tags. */
                    '<span class="tags-links">' . esc_html__('Tagged %s', 'parkeringlygten') . '</span>',
                    $tags_list // phpcs:ignore WordPress.Security.EscapeOutput
                );
            }
            echo '</div>';
        }
    } else {

        if (has_tag()) {
            echo '<div class="post-taxonomies">';
            $tags_list = get_the_tag_list('', ' ');
            if ($tags_list) {
                printf(
                    '<div class="tags-links">%s</div>',
                    $tags_list // phpcs:ignore WordPress.Security.EscapeOutput
                );
            }
            echo '</div>';
        }
    }
}
