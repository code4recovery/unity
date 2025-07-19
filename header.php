<!doctype html>
<html>

<head>
    <?php wp_head() ?>
</head>

<body <?php body_class("grid min-h-dvh") ?>>

    <header class="bg-cyan-700 text-white">
        <div class="max-w-7xl mx-auto px-6 py-7 flex items-center gap-6 w-full justify-between">
            <h1 class="font-bold text-4xl">
                <a class="cursor-pointer hover:underline" href="/"><?php bloginfo('name') ?></a>
            </h1>
            <?php wp_nav_menu([
                'menu_class' => 'flex gap-8 text-lg font-bold'
            ]) ?>
            <button class="px-3 py-1 border border-cyan-200 rounded">
                Español
            </button>
        </div>
    </header>

    <div class="gap-10 grid grid-cols-3 grow max-w-7xl mx-auto px-6 py-7 w-full">
        <main class="col-span-2 prose lg:prose-xl max-w-full">