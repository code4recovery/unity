<!doctype html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_front_page() ? bloginfo('name') : wp_title('') ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class("bg-linear-0 from-cyan-700 to-neutral-200 flex flex-col min-h-dvh") ?>>

    <header class="bg-cyan-700 text-white">
        <div class="max-w-7xl mx-auto px-6 py-7 flex items-center gap-6 w-full justify-between">
            <h1 class="font-bold text-4xl">
                <a class="cursor-pointer hover:underline" href="/"><?php bloginfo('name') ?></a>
            </h1>
            <?php wp_nav_menu([
                'menu_class' => 'flex gap-8 text-lg font-bold'
            ]) ?>
            <a class="px-3 py-1 border border-cyan-200 cursor-pointer rounded" href="/es">
                Español
            </a>
        </div>
    </header>

    <div class="bg-white grow">
        <div class="gap-10 grid grid-cols-3 max-w-7xl mx-auto px-6 py-10 w-full">
            <main class="col-span-2">