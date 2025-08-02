<ul id="sidebar" role="complementary" class="grid gap-8">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) { ?>
        <li>
            <form role="search" method="get" action="/"
                class="flex gap-3 max-w-full relative text-neutral-700 focus-within:text-black">
                <label class="sr-only" for="s"><?php _e('Search for:', 'unity') ?></label>
                <svg class="absolute left-2.5 size-5 top-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m21 21-4.34-4.34" />
                    <circle cx="11" cy="11" r="8" />
                </svg>
                <input type="text" value="<?php the_search_query() ?>" name="s" id="s"
                    class="border border-neutral-400 py-1 px-4 rounded text-lg w-full pl-9">
                <button type="submit" class="border border-neutral-400 py-1 px-4 rounded text-lg">
                    <?php _e('Search', 'unity') ?>
                </button>
            </form>
        </li>

        <li>
            <h3 class="font-bold border-b border-neutral-300 pb-2 mb-4 text-xl"><?php _e('Upcoming Events', 'unity') ?></h3>
            <ul class="flex flex-col gap-4">
                <?php
                $events = [
                    [
                        'month' => 'JUL',
                        'day' => 23,
                        'time' => '7:00 pm – 8:00 pm',
                        'title' => 'Interpretation & Translation',
                    ],
                    [
                        'month' => 'JUL',
                        'day' => 24,
                        'time' => '7:00 pm – 8:00 pm',
                        'title' => 'Bridging the Gap',
                    ],
                    [
                        'month' => 'JUL',
                        'day' => 26,
                        'time' => '9:00 am – 10:00 am',
                        'title' => 'Public Information / Cooperation with the Professional Community',
                    ],
                    [
                        'month' => 'JUL',
                        'day' => 26,
                        'time' => '11:00 am – 12:00 pm',
                        'title' => 'Archives Committee',
                    ],
                    [
                        'month' => 'JUL',
                        'day' => 26,
                        'time' => '11:00 am – 12:00 pm',
                        'title' => 'Accessibilities Committee',
                    ],
                ];
                foreach ($events as $event) { ?>
                    <li class="flex gap-4 items-center">
                        <div class="rounded bg-neutral-200 px-5 py-2 flex flex-col justify-center">
                            <div class="text-sm text-center"><?php echo $event['month'] ?></div>
                            <div class="text-2xl"><?php echo $event['day'] ?></div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <a href="" class="font-semibold hover:underline"><?php echo $event['title'] ?></a>
                            <div class="text-sm"><?php echo $event['time'] ?></div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </li>

        <li>
            <h3 class="font-bold border-b border-neutral-300 pb-2 mb-4 text-xl">
                <?php _e('New Posts and Materials', 'unity') ?>
            </h3>
            <ul class="flex flex-col gap-4">
                <?php
                $news = [
                    [
                        'title' => 'CNCA Website Survey',
                        'date' => 'Jul 19',
                    ],
                    [
                        'title' => 'Comments July 2025',
                        'date' => 'Jul 18',
                    ],
                    [
                        'title' => 'June 2025 ACM Agenda',
                        'date' => 'Jul 17',
                    ],
                    [
                        'title' => '2025 Summer Assembly flyer',
                        'date' => 'Jul 14'
                    ],
                    [
                        'title' => 'New Trustees Announcement',
                        'date' => 'Jul 14'
                    ],
                ];
                foreach ($news as $item) { ?>
                    <li>
                        <a href="" class="font-semibold hover:underline"><?php echo $item['title'] ?></a>
                        <div class="text-sm"><?php echo $item['date'] ?></div>
                    </li>
                <?php } ?>
            </ul>
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