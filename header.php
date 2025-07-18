<!doctype html>
<html>

<head>
    <?php wp_head() ?>
</head>

<body <?php body_class("min-h-dvh flex flex-col") ?>>
    <header class="bg-cyan-700 py-7">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-white font-bold text-4xl px-6"><?php bloginfo('name'); ?></h1>
        </div>
    </header>
    <main class="max-w-7xl mx-auto py-7 flex flex-col gap-5 grow px-6 text-lg">