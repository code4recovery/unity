<?php

function unity_language_toggle()
{

    if (!function_exists('pll_languages_list') || !function_exists('pll_get_post') || !function_exists('pll_current_language')) {
        return; // todo: recomend to install Polylang
    }

    if (!is_singular() || !is_main_query()) {
        return; // only show on singular posts and main query
    }

    $languages = pll_languages_list(['fields' => []]);
    $current_language = pll_current_language();
    $other_languages = array_values(array_filter($languages, function ($lang) use ($current_language) {
        return $lang->slug !== $current_language;
    }));

    if (count($other_languages) === 0) {
        return; // no other languages available
    }

    if (count($other_languages) > 1) {
        return; // todo: handle multiple languages with dropdown
    }

    $language = $other_languages[0];
    ?>
    <a class="border border-cyan-200 border-dotted cursor-pointer flex gap-2 items-center px-3 py-1 rounded"
        href="<?php echo get_permalink(pll_get_post(get_the_ID(), $language->slug)) ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="size-5">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
            <path d="M2 12h20" />
        </svg>
        <?php echo $language->name ?>
    </a>
    <?php
}