<ul id="sidebar" role="complementary">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) { ?>
        <li>
            <?php get_search_form(); ?>
        </li>

        <?php if (is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged()) { ?>
            <li>
                <?php if (is_404()) { ?>
                <?php } elseif (is_category()) {  /* If this is a category archive */ ?>
                    <p>
                        <?php
                        printf(
                            /* translators: %s: Category name. */
                            __('You are currently browsing the archives for the %s category.'),
                            single_cat_title('', false)
                        );
                        ?>
                    </p>

                <?php } elseif (is_day()) { /* If this is a daily archive */ ?>
                    <p>
                        <?php
                        printf(
                            /* translators: 1: Site link, 2: Archive date. */
                            __('You are currently browsing the %1$s blog archives for the day %2$s.'),
                            sprintf('<a href="%1$s/">%2$s</a>', get_bloginfo('url'), get_bloginfo('name')),
                            /* translators: Daily archives date format. See https://www.php.net/manual/datetime.format.php */
                            get_the_time(__('l, F jS, Y'))
                        );
                        ?>
                    </p>

                <?php } elseif (is_month()) {  /* If this is a monthly archive */ ?>
                    <p>
                        <?php
                        printf(
                            /* translators: 1: Site link, 2: Archive month. */
                            __('You are currently browsing the %1$s blog archives for %2$s.'),
                            sprintf('<a href="%1$s/">%2$s</a>', get_bloginfo('url'), get_bloginfo('name')),
                            /* translators: Monthly archives date format. See https://www.php.net/manual/datetime.format.php */
                            get_the_time(__('F, Y'))
                        );
                        ?>
                    </p>

                <?php } elseif (is_year()) {  /* If this is a yearly archive */ ?>
                    <p>
                        <?php
                        printf(
                            /* translators: 1: Site link, 2: Archive year. */
                            __('You are currently browsing the %1$s blog archives for the year %2$s.'),
                            sprintf('<a href="%1$s/">%2$s</a>', get_bloginfo('url'), get_bloginfo('name')),
                            get_the_time('Y')
                        );
                        ?>
                    </p>

                <?php } elseif (is_search()) {  /* If this is a search result */ ?>
                    <p>
                        <?php
                        printf(
                            /* translators: 1: Site link, 2: Search query. */
                            __('You have searched the %1$s blog archives for <strong>&#8216;%2$s&#8217;</strong>. If you are unable to find anything in these search results, you can try one of these links.'),
                            sprintf('<a href="%1$s/">%2$s</a>', get_bloginfo('url'), get_bloginfo('name')),
                            esc_html(get_search_query())
                        );
                        ?>
                    </p>

                <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {  /* If this set is paginated */ ?>
                    <p>
                        <?php
                        printf(
                            /* translators: %s: Site link. */
                            __('You are currently browsing the %s blog archives.'),
                            sprintf('<a href="%1$s/">%2$s</a>', get_bloginfo('url'), get_bloginfo('name'))
                        );
                        ?>
                    </p>

                <?php } ?>

            </li>
        <?php } ?>
    <?php } ?>
</ul>