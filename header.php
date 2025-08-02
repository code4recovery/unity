<!doctype html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_front_page() ? bloginfo('name') : wp_title('') ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class("bg-linear-0 flex flex-col from-cyan-700 min-h-dvh to-neutral-200") ?>>

    <header class="bg-cyan-700 text-white">
        <div class="flex gap-6 items-center justify-between max-w-7xl mx-auto px-6 py-7 text-lg w-full">
            <div class="flex gap-3 items-center">
                <a class="cursor-pointer lg:hidden">
                    <svg class="size-9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 12h16" />
                        <path d="M4 18h16" />
                        <path d="M4 6h16" />
                    </svg>
                </a>
                <h1 class="font-bold text-4xl">
                    <a class="cursor-pointer hover:underline" href="/"><?php bloginfo('name') ?></a>
                </h1>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'font-bold gap-3 hidden lg:flex',
                'walker' => new Unity_Primary_Menu_Walker()
            ]) ?>
            <?php unity_language_toggle() ?>
        </div>
    </header>

    <div class="bg-white grow">
        <div class="flex flex-col lg:flex-row gap-10 max-w-7xl mx-auto px-6 py-10 w-full">
            <main class="flex-grow lg:w-2/3">